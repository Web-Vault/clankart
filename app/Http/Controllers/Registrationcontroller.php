<?php

namespace App\Http\Controllers;

use App\Models\carousel_images;
use App\Models\chatPartner;
use App\Models\ChatMessage;
use App\Models\order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PhpParser\Builder\Function_;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\Book;
use App\Models\Category;
use App\Models\Cart;
use App\Models\wishlist;
use App\Models\Coupon;
use App\Models\review;
// use App\Models\message;
use App\Models\keyword;
use function PHPUnit\Framework\isEmpty;




class Registrationcontroller extends Controller
{

    public function index()
    {
        $images = Carousel_images::all();

        return view('index', compact('images'));
    }

    public function search(Request $request)
    {
        $search = $request->input('searchbar');

        // if (isEmpty($search)) {
        //     echo "<script>alert('please enter valid keywords to search appropriate books!!');</script>";

        //     $images = Carousel_images::all();
        //     return view('index', compact('images'));
        // }
        // else {

        $results = book::where('book_title', 'LIKE', "%{$search}%")
            ->orWhere('year', 'LIKE', "%{$search}%")
            ->orWhere('seller_name', 'LIKE', $search)
            ->orWhere('author_name', 'LIKE', "%{$search}%")
            ->orWhere('price', 'LIKE', "%{$search}%")
            ->get();

        return view('Search_result', compact('results', 'search', ));
        // }
    }


    public function sell_book(Request $r)
    {

        $add_product = new Book();

        $r->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|in:1,2,3,4',
            'type' => 'required|string|in:hardcover,paperback,ebook',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'condition' => 'required|string|max:255',
            'description' => 'required|string',
            'authorName' => 'required|string|min:2',
            'img' => 'required',
            'stock' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:50',
        ], [
            'title.required' => 'The title is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',

            'category.required' => 'The category is required.',
            'category.string' => 'The category must be a string.',
            'category.in' => 'The selected category is invalid.',

            'type.required' => 'The type is required.',
            'type.string' => 'The type must be a string.',
            'type.in' => 'The selected type is invalid.',

            'year.required' => 'The year is required.',
            'year.integer' => 'The year must be an integer.',
            'year.min' => 'The year must be at least 1900.',
            'year.max' => 'The year may not be greater than the current year.',

            'condition.required' => 'The condition is required.',
            'condition.string' => 'The condition must be a string.',
            'condition.max' => 'The condition may not be greater than 255 characters.',

            'description.required' => 'The description is required.',
            'description.string' => 'The description must be a string.',

            'authorName.required' => "Author's name must be specified.",
            'authorName.string' => "Author's name must be a string.",
            'authorName.min' => "Author's name must be at least 2 characters.",

            'seller.required' => "Seller's name must be specified.",
            'seller.string' => "Seller's name must be a string.",
            'seller.min' => "Seller's name must be at least 2 characters.",

            'stock.required' => 'The stock count is required.',
            'stock.numeric' => 'The stock count must be a number.',
            'stock.min' => 'The stock count must be at least 1.',

            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a number.',
            'price.min' => 'The price must be at least 50.',
        ]);

        if (Session::has('customer_email')) {
            $user = Customer::where('email', Session::get('customer_email'))->first();
            $seller_id = $user->id;
            $seller = $user->firstname;
        } else {
            $seller = session('customer_email');
        }


        $add_product = new Book();

        $add_product->book_title = $r->title;
        $add_product->category = $r->category;
        $add_product->type = $r->type;
        $add_product->year = $r->year;

        if ($r->hasFile('img')) {
            $file = $r->file('img');
            $filename = time() . "_" . $file->getClientOriginalName();

            $file_path = "/product_image" . "/";

            $file->move(public_path('product_image'), $filename);

            $db_name = $file_path . $filename;
        }

        $add_product->book_image = $db_name;
        $add_product->stock = $r->stock;
        $add_product->condition = $r->condition;
        $add_product->description = $r->description;
        $add_product->author_name = $r->authorName;

        if (Session::has('customer_email')) {

            $add_product->seller_name = $seller;
            $add_product->seller_id = $seller_id;
        }

        $add_product->price = $r->price;

        if ($add_product->save()) {
            return redirect()->route('ads');
        }

    }

    public function showProfile()
    {
        if (Session::has('customer_email')) {
            $user = Customer::where('email', Session::get('customer_email'))->first();
            $id = $user->id;
        }
        $profile = Customer::find($id);
        return view('profile', compact('profile'));
    }

    public function update_profile(Request $request)
    {
        if (Session::has('customer_email')) {
            $user = Customer::where('email', Session::get('customer_email'))->first();
            $id = $user->id;
        }

        $profile = Customer::find($id);

        if (!$profile) {
            return redirect()->back()->with('error', 'Profile not found.');
        }

        $request->validate([
            'firstname' => 'required|min:4|max:25',
            'lastname' => 'required|min:3|max:25',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'pincode' => 'required|digits:6',
            'Address' => 'required|string',
        ]);

        $profile->update([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "email" => $request->email,
            "mobile_number" => $request->phone_number,
            "pincode" => $request->pincode,
            "address" => $request->Address,
        ]);

        echo "<script>alert('the profile has been successfully updated!');</script>";
        return redirect()->route('profile', compact('profile'))->with('success', 'Profile updated successfully.');

    }

    // public function changePassword(Request $request) {
    //     $request->validate([
    //         'password'=>'required',
    //     ]);

    //     $id=12;
    //     $profile = Customer::find($id);
    //     $old_password = $profile->password;

    //     if($request->password != $old_password) {
    //         $profile->update([
    //             'password'=> $request->password,
    //         ]);
    //     } else {
    //         echo "<Script>alert('unable to change your password!');</script>";
    //     }

    //     return view('profile', compact('profile'));
    // }

    // login / signup

    public function indexLogin(Request $request)
    {
        $request->validate([
            'loginEmail' => 'required|email',
            'loginPassword' => 'required|min:6|max:25',
        ], [
            'email.required' => 'Please enter your email',
            'email.email' => 'Please enter a valid email',
            'password.required' => 'Please enter your password',
            'password.min' => 'Password must be at least 6 characters',
            'password.max' => 'Password must be 25 characters long.'
        ]);

        $customer = Customer::where('email', $request->input('loginEmail'))->first();
        $admin = Admin::where('email', $request->input('loginEmail'))->first();


        if ($customer) {

            // check hash


            if ($customer->password === $request->input('loginPassword')) {
                session(['customer_email' => $customer->email]);

                if ($customer->activate != 0) {

                    $images = Carousel_images::all();

                    return view('index', compact('images'));
                } else {
                    echo "<script>alert('verify your account first!');</script>";


                    return view('login');
                }
            } else {
                return view('login')->with('error', 'Invalid email or password.');
            }
        }

        if ($admin) {

            // check hash 
            session(['admin_email' => $admin->email]);

            if ($admin->password === $request->input('loginPassword')) {

                return redirect()->route('a-index');

            } else {
                return view('login')->with('error', 'Invalid email or password.');
            }
        }

        return view('login')->with('error', 'Invalid email or password.');





        // return view('index');
    }

    public function indexSignup(Request $request)
    {
        $add_user = new Customer();

        $request->validate([
            'signupName' => 'required|string|max:55|regex:/^[a-zA-Z][a-zA-Z]+$/',
            'signupEmail' => 'required|string|email|max:255|unique:users,email',
            'signupPassword' => 'required|string|min:8|same:signupConfirmPassword',
            'signupConfirmPassword' => 'required'
        ], [
            'signupName.required' => 'Please enter your name.',
            'signupName.regex' => 'Name must contain only letters.',
            'signupName.max' => 'Name must not be longer than 55 characters.',

            'signupEmail.required' => 'Please enter your email address.',
            'signupEmail.email' => 'Please enter a valid email address.',
            'signupEmail.max' => 'Email must not be longer than 255 characters.',
            'signupEmail.unique' => 'This email address is already taken.',

            'signupPassword.required' => 'Please enter your password.',
            'signupPassword.min' => 'Password must be at least 8 characters long.',
            'signupPassword.same' => 'Password and Confirm Password do not match.',

            'signupConfirmPassword.required' => 'Conirm password must be entered.'
        ]);

        if (Customer::where('email', $request->input('signupEmail'))->first()) {
            echo "<script>alert('A user with same email already exists.');</script>";
            return view("login");
        } else {

            $add_user->firstname = $request->signupName;
            $add_user->email = $request->signupEmail;
            $add_user->password = $request->signupPassword;
            $token = uniqid();
            $add_user->token = $token;

            if ($add_user->save()) {
                $data = array('name' => 'Aryan', 'email' => $request->signupEmail, 'token' => $token);

                Mail::send('mail_format', ["data1" => $data], function ($message) use ($data) {
                    $message->to($data['email'], $data['name']);
                    $message->subject('Activate your Clankart account');
                    $message->from("aryanlathigara@gmail.com", "Aryan Soni");
                });

                return view('login');
            }

        }

        // return view('login');
    }    

    public function verify_email($email, $token)
    {
        $result = Customer::where('email', $email)->where('token', $token)->first();
        if (empty($result)) {
            session()->flash('error', 'Your account is not registered. Kindly register here.');
            return redirect('login');
        } else {
            if ($result->activate == 1) {
                session()->flash('success', 'Your account is already activated kindly login');
            } else {
                $update = Customer::where('email', $email)->update(array('activate' => 1));
                if ($update) {
                    session()->flash('success', 'Your account is activated successfully.');
                } else {
                    session()->flash('error', 'Account activation failed please try after sometime.');
                }
            }
            return redirect('login');
        }
    }


    public function forgotPassword(Request $request)
    {
        $request->validate([
            'forgotEmail' => 'required|string|email|max:255|exists:users,email',
        ], [
            'forgotEmail.required' => 'Please enter your email address.',
            'forgotEmail.email' => 'Please enter a valid email address.',
            'forgotEmail.max' => 'Email must not be longer than 255 characters.',
            'forgotEmail.exists' => 'This email address is not registered.',
        ]);


        $customer = Customer::where('email', $request->input('email'))->first();

        if ($customer) {
            $pass = $customer->password;
            $data = ['email' => $request->input('email'), 'password' => $pass];

            Mail::send('forgotPass_format', ['data' => $data], function ($message) use ($data) {
                $message->from('aryanlathigara@gmail.com', 'Aryan Soni');
                $message->to($data['email']);
                $message->subject('Forgotten Password');
            });

            Session()->flash('success', 'Password reset instructions have been sent to your email.');
        } else {
            Session()->flash('error', 'No user found with that email address.');
        }


        // return view('login');
    }

    public function place_order($id, $price)
    {

        $find_book = Book::find($id);

        return view('checkout', compact('find_book'));
    }


    public function go_to_pay($book_id, $book_price)
    {
        $currentDate = Carbon::now();

        $valid_coupons = Coupon::where('applicable_amount', '<=', $book_price)
            ->where('deactivation_time', '>=', $currentDate)
            ->get();

        return view('purchase_form', [
            'valid_coupons' => $valid_coupons,
            'book_id' => $book_id,
            'book_price' => $book_price
        ]);
    }




    public function make_payment(Request $request)
    {
        $order_detail = new order();

        $user = Customer::where('email', session('customer_email'))->first();
        $username = $user->firstname;

        $order_detail->customer_name = $username;
        $order_detail->book_name = $request->bookname;
        $order_detail->order_price = $request->amount;
        $order_detail->book_id = $request->book_id;
        $order_detail->order_date = Carbon::now();
        $order_detail->order_status = "pending";

        $all_orders = order::all();

        if ($order_detail->save()) {


            $remove_book_from_cart = Cart::where('book_id', $order_detail->book_id);
            $remove_book_from_cart->delete();


            // return view('orders', compact('all_orders'));

            return redirect()->route('orders');
        } else {
            echo "order is not placed! please go back and try again !";
        }
    }




    public function set_delivered($order_id, $delivered)
    {
        $order_info = Order::find($order_id);

        if (!$order_info) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        if ($delivered === 'delivered') {
            $order_info->order_status = $delivered;
            $order_info->save();
        }

        $data = [
            'email' => session('customer_email'),
            'order_name' => $order_info->book_name
        ];

        if (!empty($data['email'])) {
            Mail::send('delivered_order_mail_format', ["data1" => $data], function ($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Your Order for ' . $data['order_name'] . ' Has Been Delivered!');
                $message->from("aryanlathigara@gmail.com", "Aryan Soni");
            });
        }

        $user = Customer::where('email', session('customer_email'))->first(); // Use first() to fetch a single record

        if ($user) {
            $name = $user->firstname;

            $orders = Order::where('customer_name', $name)->get();

            return view('orders', compact('orders'));
        }

        return redirect()->back();
    }


    // 

    public function logout()
    {
        auth()->logout(); // Log out the user
        session()->invalidate(); // Invalidate the session (without losing CSRF token)
        session()->regenerateToken(); // Regenerate CSRF token for security

        return redirect()->route('login'); // Redirect to login route or view
    }

    public function login()
    {
        return view('login');
    }


    // admin forms

    public function addUser(Request $request)
    {

        $add_user = new Customer();

        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'contactNumber' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'pincode' => 'required|string|max:10',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|same:confirmPassword',
            'confirmPassword' => 'required|string|min:8',
        ], [
            'firstName.required' => 'The first name is required.',
            'firstName.string' => 'The first name must be a string.',
            'firstName.max' => 'The first name may not be greater than 255 characters.',

            'lastName.required' => 'The last name is required.',
            'lastName.string' => 'The last name must be a string.',
            'lastName.max' => 'The last name may not be greater than 255 characters.',

            'contactNumber.required' => 'The contact number is required.',
            'contactNumber.string' => 'The contact number must be a string.',
            'contactNumber.max' => 'The contact number may not be greater than 20 characters.',

            'address.required' => 'The address is required.',
            'address.string' => 'The address must be a string.',
            'address.max' => 'The address may not be greater than 255 characters.',

            'pincode.required' => 'The pincode is required.',
            'pincode.string' => 'The pincode must be a string.',
            'pincode.max' => 'The pincode may not be greater than 10 characters.',

            'email.required' => 'The email address is required.',
            'email.email' => 'The email address must be a valid email address.',
            'email.max' => 'The email address may not be greater than 255 characters.',
            'email.unique' => 'The email address has already been taken.',

            'password.required' => 'The password is required.',
            'password.string' => 'The password must be a string.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.same' => 'The password and confirm password must match.',

            'confirmPassword.required' => 'The confirm password field is required.',
            'confirmPassword.string' => 'The confirm password must be a string.',
            'confirmPassword.min' => 'The confirm password must be at least 8 characters.',
        ]);

        $add_user->firstname = $request->firstName;
        $add_user->lastname = $request->lastName;
        $add_user->email = $request->email;
        $add_user->password = $request->password;
        $add_user->mobile_number = $request->contactNumber;
        $add_user->address = $request->address;
        $add_user->pincode = $request->pincode;
        $add_user->activate = false;

        if (Customer::where('email', $request->input('email'))->first()) {
            echo "<script>alert('A user with same email already exists.');</script>";
            return view("admin\add-user");
        } else {

            if ($add_user->save()) {

                $data = [
                    'fname' => $request->firstName,
                    'email' => $request->email,
                ];

                Mail::Send(['text' => 'mail_format'], ['data' => $data], function ($message) use ($data) {
                    $message->from('aryanlathigara@gmail.com', 'Aryan Soni');
                    $message->to($data['email']);
                    $message->subject('Activate Your Clankart Account');

                });


                return view('admin/add-user');
            }

        }

    }


    public function edit_user_info(Request $request)
    {

        $id = $request->id;

        $user = Customer::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found!');
        }

        $request->validate([
            'id' => 'required',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:customers,email,' . $id,
            'address' => 'nullable|string|max:255',
            'pincode' => 'nullable|string|max:10',
        ]);


        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->pincode = $request->pincode;


        if ($user->save()) {
            $all_customer = Customer::all();
            return view('admin/customer', compact('all_customer'));
        } else {
            echo "<script>alert('error in updating ! ');</script>";
            return redirect()->back()->with('error', 'Failed to update user information.');
        }
    }

    public function addProduct(Request $request)
    {

        $add_product = new Book();

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|in:1,2,3,4',
            'type' => 'required|string|in:hardcover,paperback,ebook',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'condition' => 'required|string|max:255',
            'description' => 'required|string',
            'authorName' => 'required|string|min:2',
            'seller' => 'required|string|min:2',
            'stock' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:50',
        ], [
            'title.required' => 'The title is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',

            'category.required' => 'The category is required.',
            'category.string' => 'The category must be a string.',
            'category.in' => 'The selected category is invalid.',

            'type.required' => 'The type is required.',
            'type.string' => 'The type must be a string.',
            'type.in' => 'The selected type is invalid.',

            'year.required' => 'The year is required.',
            'year.integer' => 'The year must be an integer.',
            'year.min' => 'The year must be at least 1900.',
            'year.max' => 'The year may not be greater than the current year.',

            'condition.required' => 'The condition is required.',
            'condition.string' => 'The condition must be a string.',
            'condition.max' => 'The condition may not be greater than 255 characters.',

            'description.required' => 'The description is required.',
            'description.string' => 'The description must be a string.',

            'authorName.required' => "Author's name must be specified.",
            'authorName.string' => "Author's name must be a string.",
            'authorName.min' => "Author's name must be at least 2 characters.",

            'seller.required' => "Seller's name must be specified.",
            'seller.string' => "Seller's name must be a string.",
            'seller.min' => "Seller's name must be at least 2 characters.",

            'stock.required' => 'The stock count is required.',
            'stock.numeric' => 'The stock count must be a number.',
            'stock.min' => 'The stock count must be at least 1.',

            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a number.',
            'price.min' => 'The price must be at least 50.',
        ]);

        $add_product->book_title = $request->title;
        $add_product->category = $request->category;
        $add_product->type = $request->type;
        $add_product->year = $request->year;
        $add_product->stock = $request->stock;
        $add_product->condition = $request->condition;
        $add_product->description = $request->description;
        $add_product->author_name = $request->authorName;
        $add_product->seller_name = $request->seller;
        $add_product->price = $request->price;

        if ($add_product->save()) {
            return redirect()->back()->with('success', 'Product has been successfully added!');
        } else {
            return redirect()->back()->with('error', 'Product has not been added!');
        }
        // alert("error...");

    }

    public function edit_product_form(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:hardcover,paperback,ebook',
            'year' => 'required|integer|digits:4',
            'condition' => 'required|string|max:50',
            'description' => 'required|string',
            'author_name' => 'required|string|min:2',
            'price' => 'required|numeric|min:0',
        ], [
            'title.required' => 'The title is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',

            'category.required' => 'The category is required.',
            'category.in' => 'The selected category is invalid.',

            'type.required' => 'The type is required.',
            'type.in' => 'The selected type is invalid.',

            'year.required' => 'The year is required.',
            'year.integer' => 'The year must be an integer.',
            'year.digits' => 'The year must be exactly 4 digits.',

            'condition.required' => 'The condition is required.',
            'condition.string' => 'The condition must be a string.',
            'condition.max' => 'The condition may not be greater than 50 characters.',

            'description.required' => 'The description is required.',
            'description.string' => 'The description must be a string.',

            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a number.',
            'price.min' => 'The price must be at least 0.',
        ]);

        $book = Book::find($request->id);

        if ($book) {
            $book->book_title = $request->title;
            $book->type = $request->type;
            $book->year = $request->year;
            $book->description = $request->description;
            $book->price = $request->price;
            $book->condition = $request->condition;

            if ($book->save()) {
                echo "<script>alert('the book data has been updated ! ');</script>";

                $all_products = Book::all();
                return view('admin/product', compact('all_products'));
            } else {
                return redirect()->back();
            }
        }

    }

    public function edit_user($id)
    {

        $user = Customer::find($id);
        return view('admin/edit_customer', compact('user'));

    }

    public function product_review($id)
    {

        // echo $id;

        $review = review::where("product_id", $id)->get();

        return view('admin\product-review', compact('review'));
    }


    public function review_book($book_id, $order_id)
    {
        $oid = $order_id;
        $book = Book::find($book_id);
        return view('book_review_form', compact('book', 'oid'));
    }

    public function submit_review(Request $request)
    {
        $rating = $request->input('rating');
        $reviewText = $request->input('review_text');
        $pid = $request->product_id;
        $oid = $request->order_id;

        // Validation
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'review_text' => 'required|string|max:1000',
        ]);

        // Get the user from the session
        $user = Customer::where('email', session('customer_email'))->first();
        if ($user) {
            $id = $user->id;
        }

        // Create and save the review
        $review = new Review();
        $review->rating_value = $rating;
        $review->review_text = $reviewText;
        $review->product_id = $pid;
        $review->customer_id = $id;
        $review->order_id = $oid;
        $review->save();

        $single = Book::find($pid);

        return redirect()->route('click', ['id' => $single->id]);
    }


    public function filterProducts($ctgy_id)
    {
        if ($ctgy_id == '') {
            return redirect()->route('a-product');
        } else {
            $all_products = Book::where('category', $ctgy_id)->get();
        }
        return view('admin.product', compact('all_products'));
    }




    public function edit_product($id)
    {
        $book = Book::find($id);
        return view('admin\edit-product', compact('book'));
    }

    public function addCode(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:12',
            'applicable_amount' => 'required|numeric|min:10',
            'discount_amount' => 'required|numeric|min:100',
            'activation_time' => 'required|date',
            'deactivation_time' => 'required|date'
        ], [
            'code.required' => 'The coupon code is required.',
            'code.string' => 'The coupon code must be a string.',
            'code.max' => 'The coupon code may not be greater than 12 characters.',

            'applicable_amount.required' => 'The applicable amount is required.',
            'applicable_amount.numeric' => 'The applicable amount must be a number.',
            'applicable_amount.min' => 'The applicable amount must be at least 10.',

            'discount_amount.required' => 'The discount amount is required.',
            'discount_amount.numeric' => 'The discount amount must be a number.',
            'discount_amount.min' => 'The discount amount must be at least 100.',

            'activation_time.required' => 'The activation time is required.',
            'activation_time.date' => 'The activation time must be a valid date.',

            'deactivation_time.required' => 'The deactivation time is required.',
            'deactivation_time.date' => 'The deactivation time must be a valid date.'
        ]);

        $add_coupon = new Coupon();

        if (Coupon::where('coupon_code', $request->code)->first()) {
            echo "<script>alert('generated referral code already exists in the database!');</script>";
        } else {
            $add_coupon->coupon_code = $request->code;
            $add_coupon->applicable_amount = $request->applicable_amount;
            $add_coupon->discount_value = $request->discount_amount;
            $add_coupon->activation_time = $request->activation_time;
            $add_coupon->deactivation_time = $request->deactivation_time;

            if ($add_coupon->save()) {
                echo "<script>alert('generated referral code added to the database!');</script>";

                return redirect()->route('a-offers');
            }
        }
    }

    // admin display

    public function showProduct()
    {
        $all_products = Book::all();
        return view('admin/product', compact('all_products'));
    }

    public function showCustomer()
    {
        $all_customer = Customer::all();
        return view('admin/customer', compact('all_customer'));
    }

    public function showCoupon()
    {
        $all_coupon = Coupon::all();
        return view('admin/offers', compact('all_coupon'));
    }

    public function showUserCart($id)
    {
        $user_cart = Cart::where('customer_id', $id)->get();

        return view('admin/customer_cart', compact('user_cart'));
    }

    public function showOrders()
    {
        $confirmedOrders = order::where('order_status', 'confirmed')->orWhere('order_status', 'delivered')->get();
        return view('admin/orders', compact('confirmedOrders'));
    }

    public function admin_index()
    {
        $orders = order::where('order_status', 'pending')->get();
        return view('admin/index', compact('orders'));
    }


    // admin remove

    public function removeUser($id)
    {
        $user = Customer::find($id);
        $user->delete();

        $all_customer = Customer::all();
        return view('admin/customer', compact('all_customer'));
    }

    public function removeBook($id)
    {
        $book = Book::find($id);
        $book->delete();

        $all_products = Book::all();
        return view('admin/product', compact('all_products'));
    }

    public function confirmOrders($id)
    {
        $order_info = order::find($id);

        $order_info->order_status = "confirmed";
        $order_info->save();

        $book = Book::find($order_info->book_id);
        if ($book) {
            $book->stock = $book->stock - 1;
        }


        $confirmedOrders = order::where('order_status', 'confirmed')->get();
        return view('admin/orders', compact('confirmedOrders'));
    }


    public function cancel_order($id)
    {
        $order = Order::find($id);
        $order->delete();

        $orders = order::where('order_status', 'pending')->get();

        return view('admin/index', compact('orders'));
    }

    public function approve_review($id)
    {
        $reviews = review::find($id);

        if ($reviews) {
            $reviews->Approval = "yes";
            $reviews->save();
        }

        $review = Review::where('product_id', $reviews->product_id)->get();

        return view('admin/product-review', compact('review'));
    }


    // user display 

    public function showBooks()
    {
        $all_books = Book::all();
        return view('books', compact('all_books'));
    }

    public function showSingle($id)
    {
        $single = Book::find($id);

        $reviews = review::where("product_id", $id)->where('Approval', 'yes')->get();

        return view('single', compact('single', 'reviews'));
        // return redirect()->route('click', ['id' => $single->id]);

    }

    public function showWishlist()
    {
        // $user_id = 5;

        $email = session('customer_email');

        $user = Customer::where('email', $email)->first();
        if ($user) {
            $user_id = $user->id;
        }

        $all_wishlist = Wishlist::where('customer_id', $user_id)->get();

        $books = Book::whereIn('id', $all_wishlist->pluck('product_id'))->get();

        return view('wishlist', compact('books'));
    }

    public function showCart()
    {
        $email = session('customer_email');

        $user = Customer::where('email', $email)->first();
        if ($user) {
            $customer_id = $user->id;
        }

        $cart_items = Cart::where('customer_id', $customer_id)->get();

        // $total = Cart::

        return view('cart', compact('cart_items'));
    }

    public function show_Orders()
    {
        $user = Customer::where('email', session('customer_email'))->first(); // Use first() to fetch a single record

        if ($user) {
            $name = $user->firstname;

            $orders = Order::where('customer_name', $name)->get();

            return view('orders', compact('orders'));
        } else {
            return redirect()->back()->with('error', 'Customer not found');
        }
    }

    public function showAds()
    {

        $user = Customer::where('email', session('customer_email'))->first();

        $user_id = $user->id;

        $my_books = Book::where('seller_id', $user_id)->get();

        return view('ads', compact('my_books'));
    }

    // remove from user

    public function remove_cart($book_id)
    {
        $user = Customer::where('email', session('customer_email'))->first();
        if ($user) {
            $customer_id = $user->id;
        }

        // Find the cart item with both customer_id and book_id
        $cart_item = Cart::where('customer_id', $customer_id)
            ->where('book_id', $book_id)
            ->first();

        // Check if the cart item exists before attempting to delete
        if ($cart_item) {
            $cart_item->delete();
        }

        $cart_items = Cart::where('customer_id', $customer_id)->get();

        return view('cart', compact('cart_items'));

    }


    public function remove_wishlist($id)
    {
        $wishlist_item = wishlist::find($id);
        $wishlist_item->delete();

        $email = session('customer_email');

        $user = Customer::where('email', $email)->first();
        if ($user) {
            $user_id = $user->id;
        }

        $all_wishlist = Wishlist::where('customer_id', $user_id)->get();

        $books = Book::whereIn('id', $all_wishlist->pluck('product_id'))->get();

        return view('wishlist', compact('books'));

    }


    // add to wishlist

    public function add_wishlist($id)
    {
        // echo $id;

        $user = Customer::where('email', session('customer_email'))->first();

        if ($user) {
            $user_id = $user->id;
        } else {
            return redirect()->back();
        }

        $add_to_wishlist = new wishlist();


        $add_to_wishlist->product_id = $id;
        $add_to_wishlist->customer_id = $user_id;

        if ($add_to_wishlist->save()) {
            $all_books = Book::find($id);
            return view('single', compact('all_books'));
        }
    }

    public function add_cart($book_id)
    {

        $user = Customer::where('email', session('customer_email'))->first();
        if ($user) {
            $customer_id = $user->id;
        } else {
            echo "<script>alert('user not found ! ');</script>";
            return redirect()->back();
        }

        $all_books = Book::find($book_id);

        $add_to_cart = new Cart();
        $add_to_cart->book_id = $book_id;
        $add_to_cart->book_name = $all_books->book_title;
        $add_to_cart->book_image = $all_books->book_image;
        $add_to_cart->seller_name = $all_books->seller_name;
        $add_to_cart->book_price = $all_books->price;
        $add_to_cart->customer_name = $user->firstname;
        $add_to_cart->customer_id = $customer_id;

        if ($add_to_cart->save()) {
            echo "<script>alert('Product has been added to cart!');</script>";

            $cart_items = Cart::where('customer_id', $customer_id)->get();

            return view('cart', compact('cart_items'));
        } else {
            echo "<script>alert('Error adding product to cart!');</script>";
            return redirect()->back();
        }
    }

    // quest - scroller

    public function add_image(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the rules based on your requirements
        ]);

        if ($request->hasFile('img')) {
            $file = $request->file('img');

            $destinationPath = 'upload'; // This will store the image in public/upload

            $fileName = time() . '_' . $file->getClientOriginalName();

            $file->move(public_path($destinationPath), $fileName);

            $imagePath = $destinationPath . '/' . $fileName;

            $user = new carousel_images();
            $user->scroller_image = $imagePath;
            $user->save();

            return redirect()->back()->with('success', 'Image uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'Please upload a valid image.');
        }
    }










    // instamojo


    public function instamojo(Request $request)
    {
        $api_key = env('INSTAMOJO_API_KEY');
        $auth_token = env('INSTAMOJO_AUTH_TOKEN');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "X-Api-Key:$api_key",
            "X-Auth-Token:$auth_token"
        ]);

        // Payment payload
        $payload = [
            'purpose' => 'Book Purchase',
            'amount' => $request->amount,
            'phone' => $request->mobile_number,
            'buyer_name' => $request->firstname,
            'redirect_url' => route('callback'),
            'send_email' => true,
            'webhook' => 'http://www.example.com/webhook/',
            'send_sms' => true,
            'email' => $request->email,
            'allow_repeated_payments' => false
        ];

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));

        $response = curl_exec($ch);

        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);
            return response()->json(['error' => "cURL Error: $error"], 500);
        }

        curl_close($ch);

        $responseData = json_decode($response);

        // print_r($responseData);

        if (isset($responseData->success) && $responseData->success == true) {
            return redirect($responseData->payment_request->longurl);
        } else {
            Log::error('Instamojo Payment Request Failed:', (array) $responseData);
            $errorMessage = $responseData->message ?? 'Payment request failed. Please try again.';
            return redirect()->route('cancel')->with('error', $errorMessage);
        }
    }


    public function callback(Request $request)
    {
        dd($request->all());

        $api_key = env('INSTAMOJO_API_KEY');
        $auth_token = env('INSTAMOJO_AUTH_TOKEN');

        // Check if payment was successful
        if ($request->get('payment_status') === 'Credit') {
            // Handle successful payment
            return redirect()->route('success')->with('message', 'Payment successful!');
        } else {
            return redirect()->route('cancel')->with('error', 'Payment failed or canceled.');
        }
    }


    public function success()
    {
        return "payment successfull";
    }

    public function cancel()
    {
        return "payment cancelled";
    }








    // chatting

    // public function showChats()
    // {

    //     return view('chats');
    // }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'message' => 'required_without:attachment|string',
            'attachment' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'sender_id' => 'required|integer',
            'receiver_id' => 'required|integer'
        ]);

        $attachmentPath = null;

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');

            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('attachments'), $fileName);

            // Save the relative path for web access
            $attachmentPath = 'attachments/' . $fileName;
        }

        // Create and save the message
        $messages = new Message();
        $messages->sender_id = $request->input('sender_id');
        $messages->receiver_id = $request->input('receiver_id');
        $messages->message = $request->input('message');
        $messages->attachment = $attachmentPath;
        $messages->save();


        return view('chats', compact('messages'));
    }




    // new chats

    // public function showChats()
    // {
    //     $user = Customer::where('email', session('customer_email'))->first();
    //     $my_user_id = $user->id;

    //     // Get all chat partners where the user is either sender or receiver
    //     $chat_partners = chat_partner::where('sender_id', $my_user_id)
    //         ->orWhere('receiver_id', $my_user_id)
    //         ->get();

    //     // Map chat partners to include the "other" person's details
    //     $partners = $chat_partners->map(function ($chat) use ($my_user_id) {
    //         $other_user_id = ($chat->sender_id === $my_user_id) ? $chat->receiver_id : $chat->sender_id;
    //         $other_user = Customer::find($other_user_id); // Fetch the other user's details
    //         return [
    //             'chat_id' => $chat->id,
    //             'other_user' => $other_user
    //         ];
    //     });

    //     return view('chats', compact('partners'));
    // }

    // public function message_with_person()
    // {
    //     return view('message_with_person');
    // }

    // public function add_chat_partners($seller_id)
    // {
    //     $receiver = $seller_id;

    //     $user = Customer::where('email', session('customer_email'))->first();
    //     $sender = $user->id;

    //     $existing_chat_partner = chat_partner::where('sender_id', $sender)
    //         ->where('receiver_id', $receiver)
    //         ->first();

    //     if (!$existing_chat_partner) {
    //         $chat_partners = new chat_partner();
    //         $chat_partners->sender_id = $sender;
    //         $chat_partners->receiver_id = $receiver;

    //         $chat_partners->save();
    //     }

    //     return redirect()->route('message_with_person');
    // }



    // 



public function showChats()
    {
        $user = Customer::where('email', session('customer_email'))->first();
        $my_user_id = $user->id;

        $chat_partners = ChatPartner::where('sender_id', $my_user_id)
            ->orWhere('receiver_id', $my_user_id)
            ->with(['sender', 'receiver'])
            ->get();

        $partners = $chat_partners->map(function ($chat) use ($my_user_id) {
            $other_user = $chat->sender_id === $my_user_id ? $chat->receiver : $chat->sender;
            return [
                'chat_id' => $chat->id,
                'other_user' => $other_user,
            ];
        });

        return view('chats', compact('partners'));
    }

    public function messageWithPerson($partner_id)
    {
        $user = Customer::where('email', session('customer_email'))->first();
        $my_user_id = $user->id;

        $messages = ChatMessage::where(function ($query) use ($my_user_id, $partner_id) {
            $query->where('sender_id', $my_user_id)->where('receiver_id', $partner_id);
        })->orWhere(function ($query) use ($my_user_id, $partner_id) {
            $query->where('sender_id', $partner_id)->where('receiver_id', $my_user_id);
        })->get();

        return view('message_with_person', compact('messages', 'partner_id'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'nullable|string',
            'attachment' => 'nullable|file|mimes:jpg,png',
        ]);

        $user = Customer::where('email', session('customer_email'))->first();

        $chatMessage = new ChatMessage();
        $chatMessage->sender_id = $user->id;
        $chatMessage->receiver_id = $request->partner_id;
        $chatMessage->message = $request->message;

        if ($request->hasFile('attachment')) {
            $filePath = $request->file('attachment')->store('uploads');
            $chatMessage->attachment = $filePath;
        }

        $chatMessage->save();

        $messages = ChatMessage::where('sender_id', $user->id)
            ->orWhere('receiver_id', $user->id)
            ->get();

        $messages_html = view('partials.messages', compact('messages'))->render();

        return response()->json(['messages_html' => $messages_html]);
    }

    public function addChatPartners($seller_id)
    {
        $user = Customer::where('email', session('customer_email'))->first();

        ChatPartner::firstOrCreate([
            'sender_id' => $user->id,
            'receiver_id' => $seller_id,
        ]);

        return redirect()->route('message_with_person', ['partner_id' => $seller_id]);
    }
}
