<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;
use Illuminate\Support\Facades\DB;

class UpdateProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $product = DB::table("products")->find($id);

        return view("products/updateproduct", compact("product"));
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

        $updatedProduct = DB::table("products")
            ->insert($validatedData);

        if ($updatedProduct) {
            return back()->with("status", "Kayıt Güncellendi");
        }
    }
}
