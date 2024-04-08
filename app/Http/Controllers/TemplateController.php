<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\Product;
use App\Models\Category;

class TemplateController extends Controller
{
    
    function home()
    {
        $titlePage = "Home";
        $cate = Category::all();
        return view("user.home",['titlePage'=> $titlePage,'cate' => $cate]);
    }
    function cart()
    {
        $titlePage = "Cart";
        return view("user.cart", ['titlePage'=> $titlePage]);
    }
    function checkout()
    {
        $titlePage = "Checkout";
        return view("user.checkout", ['titlePage'=> $titlePage]);
    }
    function contact()
    {
        $titlePage = "Contact";
        return view("user.contact", ['titlePage'=> $titlePage]);
    }
    function detail()
    {
        $titlePage = "Detail";
        return view("user.detail", ['titlePage'=> $titlePage]);
    }
    function shop()
    {
        $titlePage = "Shop";
        $products = Product::all();
        $pagination = Product::paginate(4);
       

        return view("user.shop", 
        [
        'titlePage'=> $titlePage, 
        'products'=> $products,
         ],
        compact('pagination')
        );
    }

    function login()
    {
        $titlePage = "Login";
        return view("admin.login", ['titlePage'=> $titlePage]);
    }

    function signin()
    {
        $titlePage = "Register";
        return view("admin.register", ['titlePage'=> $titlePage]);
    }

    function notfound()
    {
        $titlePage = "404 Error";
        return view("admin.404", ['titlePage'=> $titlePage]);
    }
}
