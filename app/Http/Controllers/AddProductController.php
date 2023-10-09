<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;
use Illuminate\Support\Facades\DB;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("products/addproduct");
    }
    public function addform(Request $request)
    {
        $validatedData = $request->validate(
            [
                "product_title" => "required",
                "product_content" => "required",
                "product_price" => "required",
                "product_pic" => "nullable"
            ]
        );
        // return $validatedData;

        $newProduct = DB::table("products")
            ->insert($validatedData);

        if ($newProduct) {
            return back()->with("status", "Saved Successfully");
        }
    }
}
