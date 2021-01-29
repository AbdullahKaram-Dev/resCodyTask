<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class ApiCategoriesController extends Controller
{
    public function index()
    {
        try {

            $categories = Categories::with('children:parent_id,category_name','parent:id,category_name')->get();
            return api_response(200,'successfully get data',$categories);

        } catch (\RuntimeException $exception){

            return api_response(500,$exception->getMessage());
        }

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
