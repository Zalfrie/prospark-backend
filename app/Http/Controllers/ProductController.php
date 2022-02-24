<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
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
