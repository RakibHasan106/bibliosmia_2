<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Cart;
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
    public function RemoveFromCart(request $req){
        Cart::where('id',$req->cart_id)->decrement('quantity');
        $quantity = Cart::where('id',$req->cart_id)->value('quantity');
        $price = Book::where('id',$req->book_id)->value('price');

        $total_price = $quantity * $price;

        $cart_item = Cart::where('id',$req->cart_id)->first();
        $cart_item->price = $total_price;
        $cart_item->save();

        return redirect()->route('cartpageview')->with('message','1 Book Deleted');
    }
}
