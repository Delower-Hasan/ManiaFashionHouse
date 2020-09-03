<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Model\Backend\Product;

Route::get('/', function () {
    $products = Product::all();
    return view('welcome',compact('products'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// **************************Backend***********************

// ******Admin******
    Route::prefix('admin')->group(function(){
    Route::group(['namespace' => 'Admin\Auth'], function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'LoginController@login')->name('admin.login');
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'RegisterController@register')->name('admin.register');
    Route::get('/forget-password', 'ForgotPasswordController@showLinkRequestForm')->name('admin.forget-password');
    });
    Route::get('/dashboard', 'Backend\AdminController@index')->name('admin.dashboard');
    });

// *****Catagory Start*******

    Route::group(['namespace' => 'Backend','prefix'=>'catagory'], function () {
    Route::get('/','CatagoryController@index')->name('catagory.index');
    Route::get('/create','CatagoryController@create')->name('catagory.create');
    Route::post('/post','CatagoryController@post')->name('catagory.post');
    Route::get('/edit/{id}','CatagoryController@edit')->name('catagory.edit');
    Route::post('/update/{id}','CatagoryController@update')->name('catagory.update');
    Route::get('/delete/{id}','CatagoryController@destroy')->name('catagory.delete');
    });
// *****Catagory Ends*******

// *****subcatagory Start*******
    Route::group(['namespace' => 'Backend','prefix'=>'subcatagory'], function () {
    Route::get('/','SubcatagoryController@index')->name('subcatagory.index');
    Route::get('/create','SubcatagoryController@create')->name('subcatagory.create');
    Route::post('/store','SubcatagoryController@store')->name('subcatagory.store');
    Route::get('/edit/{id}','SubcatagoryController@edit')->name('subcatagory.edit');
    Route::post('/update/{id}','SubcatagoryController@update')->name('subcatagory.update');
    Route::get('/delete/{id}','SubcatagoryController@destroy')->name('subcatagory.delete');
    });
// *****subcatagory Ends*******

// *****products Start*******
    Route::group(['namespace' => 'Backend','prefix'=>'product'], function () {
    Route::get('/','ProductController@index')->name('product.index');
    Route::get('/create','ProductController@create')->name('product.create');
    Route::post('/store','ProductController@store')->name('product.store');
    Route::get('/edit/{id}','ProductController@edit')->name('product.edit');
    Route::post('/update/{id}','ProductController@update')->name('product.update');
    Route::get('/delete/{id}','ProductController@destroy')->name('product.delete');
    });
// *****products Ends*******

// *****Blog Start*******
    Route::group(['namespace' => 'Backend','prefix'=>'blog'], function () {
    Route::get('/','BlogController@index')->name('blog.index');
    Route::get('/create','BlogController@create')->name('blog.create');
    Route::post('/store','BlogController@store')->name('blog.store');
    Route::get('/edit/{id}','BlogController@edit')->name('blog.edit');
    Route::post('/update/{id}','BlogController@update')->name('blog.update');
    Route::get('/delete/{id}','BlogController@destroy')->name('blog.delete');
    // commnets
    Route::post('/comment/{id}','BlogController@StoreComment')->name('comment.store');
    });
// *****Blog Ends*******

// *****Cart Start*******
    Route::group(['namespace' => 'Frontend','prefix'=>'cart'], function () {
    Route::get('/','CartController@index')->name('cart.index');
    // Route::get('/create','CartController@create')->name('cart.create');
    Route::get('/store/{id}','CartController@store')->name('cart.store');
    // Route::get('/edit/{id}','CartController@edit')->name('cart.edit');
    Route::post('/update','CartController@update')->name('cart.update');
    Route::get('/delete/{id}','CartController@destroy')->name('cart.delete');

    });
// *****Cart Ends*******




// *****Checkout Start*******
    Route::group(['namespace' => 'Backend','prefix'=>'checkout'], function () {
    Route::get('/','CheckoutController@index')->name('checkout.index');
    // Route::get('/create','CheckoutController@create')->name('checkout.create');
    Route::post('/store','CheckoutController@store')->name('checkout.store');
    // Route::get('/edit/{id}','CheckoutController@edit')->name('checkout.edit');
    Route::post('/update','CheckoutController@update')->name('checkout.update');
    Route::get('/delete/{id}','CheckoutController@destroy')->name('checkout.delete');

    });
// *****Checkout Ends*******











// *****Wishlist Start*******
Route::group(['namespace' => 'Frontend','prefix'=>'wishlist'], function () {
    Route::get('/','WishListController@index')->name('wishlist.index');

    Route::get('/store/{id}','WishListController@store')->name('wishlist.store');

    Route::get('/wish-to-cart/{id}','WishListController@WishToCart')->name('wishlistToCart.update');
    Route::get('/delete/{id}','WishListController@destroy')->name('wishlist.delete');
    });
// *****Wishlist Ends*******

// *****Contacts Start*******
Route::group(['namespace' => 'Backend','prefix'=>'contact'], function () {
    Route::get('/','ContactController@index')->name('contact.index');
    Route::get('/create','ContactController@create')->name('contact.create');
    Route::post('/store','ContactController@store')->name('contact.store');
    Route::get('/edit/{id}','ContactController@edit')->name('contact.edit');
    Route::post('/update/{id}','ContactController@update')->name('contact.update');
    Route::get('/delete/{id}','ContactController@destroy')->name('contact.delete');
    Route::post('/message','ContactController@PostMessage')->name('contact.message');
    });
// *****Contacts Ends*******

// *****About Start*******
Route::group(['namespace' => 'Backend','prefix'=>'about'], function () {
    Route::get('/','AboutController@index')->name('about.index');
    Route::get('/create','AboutController@create')->name('about.create');
    Route::post('/store','AboutController@store')->name('about.store');
    Route::get('/edit/{id}','AboutController@edit')->name('about.edit');
    Route::post('/update/{id}','AboutController@update')->name('about.update');
    Route::get('/delete/{id}','AboutController@destroy')->name('about.delete');

    });
// *****About Ends*******

// *****FAQ Start*******
Route::group(['namespace' => 'Backend','prefix'=>'faq'], function () {
    Route::get('/','FaqController@index')->name('faq.index');
    Route::get('/create','FaqController@create')->name('faq.create');
    Route::post('/store','FaqController@store')->name('faq.store');
    Route::get('/edit/{id}','FaqController@edit')->name('faq.edit');
    Route::post('/update/{id}','FaqController@update')->name('faq.update');
    Route::get('/delete/{id}','FaqController@destroy')->name('faq.delete');
    });
// *****FAQ Ends*******

// *****FAQ Start*******
Route::group(['namespace' => 'Backend','prefix'=>'subscription'], function () {
    Route::get('/','SubscriptionController@index')->name('subscription.index');
    Route::get('/create','SubscriptionController@create')->name('subscription.create');
    Route::post('/store','SubscriptionController@store')->name('subscription.store');
    Route::get('/delete/{id}','SubscriptionController@destroy')->name('subscription.delete');
    Route::get('/email/{id}','SubscriptionController@SendingEmail')->name('sub.email');
    Route::post('/email-sent/{id}','SubscriptionController@EmailSent')->name('subscription.email.sent');
    Route::get('/email-all-sent','SubscriptionController@EmailSentAllSubscriber')->name('subscription.email.sent.all');
    });
// *****FAQ Ends*******
