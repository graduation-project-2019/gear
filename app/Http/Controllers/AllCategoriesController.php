<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllCategoriesController extends Controller
{
    //
     public function index()
    {
    	return view('Categories.availableCategories');
    }
}
