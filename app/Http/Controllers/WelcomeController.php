<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\State;

class WelcomeController extends Controller {
    public function index() {
        $categoryCount = Category::count();
        $productCount = Product::count();
        $countryCount = Country::count();
        $stateCount = State::count();
        return view('welcome', compact(['categoryCount', 'productCount', 'countryCount', 'stateCount']));
    }
}
