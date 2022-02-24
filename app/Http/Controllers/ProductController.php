<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * @OA\Get(
     *      path="/product",
     *      operationId="getProductList",
     *      tags={"Product"},
     *      summary="Get list of product",
     *      description="Returns list of products",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function index(Request $request)
    {
        $data = Product::query();
        if($request->has('q')){
            $data = $data->where('name', 'like', '%'.$request->q.'%');
        }

        /**
         * Return with
         */
        return $data->paginate(10);
    }
}
