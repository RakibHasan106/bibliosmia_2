<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class clientController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function LogIn()
    {
        return view('user.login');
    }
    public function SignUp()
    {
        return view('user.signup');
    }
    public function AboutUs()
    {
        return view('user.aboutus');
    }
    public function CategoryDisplay($id)
    {
        $category = Category::findOrFail($id);
        $books = Book::where('book_category_id', $id)->latest()->get();
        return view('user.selectedcategorybooks', compact('category', 'books'));
    }
    public function PublisherDisplay($id)
    {
        $publisher = Publisher::findOrFail($id);
        $books = Book::where('book_publisher_id', $id)->latest()->get();
        return view('user.selectedpublisherbooks', compact('publisher', 'books'));
    }
    public function AuthorDisplay($id)
    {
        $author = Author::findOrFail($id);
        $books = Book::where('author_id', $id)->latest()->get();
        return view('user.selectedauthorbooks', compact('author', 'books'));
    }

    public function BookPageDisplay($id)
    {
        $book = Book::findOrFail($id);

        $category = Category::findOrFail($book->book_category_id);
        $author = Author::findOrFail($book->author_id);
        $publisher = Publisher::findOrFail($book->book_publisher_id);

        return view('user.bookpage', compact('category', 'author', 'publisher', 'book'));
    }
    public function AddtoCart(request $req)
    {
        $cart_item = Cart::where('user_id', Auth::id())
            ->where('book_id', $req->book_id)->first();


        if ($cart_item === null) {
            $price = ($req->quantity) * ($req->price);

            Cart::insert([
                'book_id' => $req->book_id,
                'user_id' => Auth::id(),
                'quantity' => $req->quantity,
                'price' => $price,
            ]);
        } else {
            $quantity = ($cart_item->quantity) + $req->quantity;
            $price = ($quantity) * ($req->price);

            $cart_item->quantity = $quantity;
            $cart_item->price = $price;
            $cart_item->save();
        }

        return redirect()->route('cartpageview')->with('message', 'Book Added to the Cart Successfully!');
    }
    public function CartPageView()
    {
        $cart_items = Cart::where('user_id', Auth::id())->get();
        return view('user.cart', compact('cart_items'));
    }
    public function RemoveFromCart(request $req)
    {
        Cart::where('id', $req->cart_id)->decrement('quantity');
        $quantity = Cart::where('id', $req->cart_id)->value('quantity');
        $price = Book::where('id', $req->book_id)->value('price');
        $cart_item = Cart::where('id', $req->cart_id)->first();

        if ($quantity === 0) {
            $cart_item->delete();
        } else {
            $total_price = $quantity * $price;


            $cart_item->price = $total_price;
            $cart_item->save();
        }

        return redirect()->route('cartpageview')->with('message', '1 Book Deleted');
    }

    public function ShippingInfo(){
        return view('user.shippingpage');
    }

    public function ConfirmCheckout(request $req){
        $phone_number = $req->phone_number;
        $full_address = $req->full_address;
        $postal_code = $req->postal_code;
        return view('user.confirmcheckout',compact('phone_number','full_address','postal_code'));
    }

    public function ConfirmOrder(request $req){
        $cart_items = Cart::where('user_id',Auth::id())->get();
        $user_id = Auth::id();
        $user_name = Auth::user()->name;

        foreach($cart_items as $cart_item){
            Order::insert([
                'user_id' => $user_id,
                'user_name' => $user_name,
                'phone_number' => $req->phone_number,
                'shipping_address' => $req->full_address,
                'book_id' => $cart_item->book_id,
                'postal_code' => $req->postal_code,
                'quantity' => $cart_item->quantity ,
                'total_price' => $cart_item->price,
                'status' => 'pending',
            ]);
        }
        Cart::where('user_id',$user_id)->delete();
        
        return redirect()->route('cartpageview')->with('message','Order Placed Successfully!');
    }

    public function UserAccount(){
        $userid = Auth::id();
        $orders = Order::where('user_id',$userid)->latest()->get();
        $user_info = User::where('id',$userid)->first();
        return view('user.useraccount',compact('orders','user_info'));
    }

    public function Search(request $req){
        $key = $req->search_key;
        $results = Book::where('book_name', 'like', '%' . $key . '%')->get();
        $authornameslikekey = Author::where('author_name', 'like' ,'%'. $key . '%')->get();
        
        foreach($authornameslikekey as $authornamelikekey){
            $books = Book::where('author_name',$authornamelikekey->author_name)->get();
            foreach($books as $book){
                if(!($results->contains($book))){
                    $results = $results->concat($book);
                }
            }  
        }

        $count = $results->count();

        return view('user.searchresults', compact('results','key','count'));
    }


    public function ShowAllCategories(){
        $categories = Category::all();
        return view('user.allcategories',compact('categories'));
    }

    public function ShowAllAuthors(){
        $authors = Author::all();
        return view('user.allauthors',compact('authors'));
    }

    public function ShowAllPublishers(){
        $publishers = Publisher::all();
        return view('user.allpublishers',compact('publishers'));
    }

    public function TagWiseDisplay($tag){
        $books = Book::where('book_tag',$tag)->get();
        return view('user.selectedtagbooks',compact('books','tag'));
    }
}
