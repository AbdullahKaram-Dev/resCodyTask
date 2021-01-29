<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
       $categories = Categories::with('children:parent_id,category_name','parent:id,category_name')->get();
       return $categories;
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Categories $categories)
    {
        //
    }


    public function edit(Categories $categories)
    {
        //
    }


    public function update(Request $request, Categories $categories)
    {
        //
    }

    public function destroy(Categories $categories)
    {
        //
    }
}
