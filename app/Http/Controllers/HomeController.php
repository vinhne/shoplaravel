<?php namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.home');
	}
    public  function  cart(){
        // Basic form
        Cart::add('293ad', 'Product 1', 1, 9.99, array('size' => 'large'));

// Array form
        Cart::add(array('id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'options' => array('size' => 'large')));

// Batch method
        Cart::add(array(
            array('id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 10.00),
            array('id' => '4832k', 'name' => 'Product 2', 'qty' => 1, 'price' => 10.00, 'options' => array('size' => 'large'))
        ));


        return view('cart', array('cart'=> Cart::content()));
    }

}
