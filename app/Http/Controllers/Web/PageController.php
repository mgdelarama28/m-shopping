<?php

namespace App\Http\Controllers\Web;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function cart()
    {
        $categories = Category::all();

        return view('web.pages.cart', [
            'categories' => $categories,
        ]);
    }

    public function product()
    {
        $categories = Category::all();

        return view('web.pages.product', [
            'categories' => $categories,
        ]);
    }

    public function categoryProducts()
    {
        $categories = Category::all();

        return view('web.pages.category_products', [
            'categories' => $categories,
        ]);
    }
}
