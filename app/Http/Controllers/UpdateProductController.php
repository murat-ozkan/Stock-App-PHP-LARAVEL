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

    public function addform(Request $request, $id)
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
            ->where("id", $id)
            ->update($validatedData);

        if ($updatedProduct) {
            return back()->with("status", "Updated Successfully");
        }
    }
    public function deleteproduct(Request $request, $id)
    {
        DB::table("products")
            ->Delete($id);

        // 2. method
        // DB::table("products")
        // ->where("id", $id)
        // ->Delete($id);

        return back();
    }
}
