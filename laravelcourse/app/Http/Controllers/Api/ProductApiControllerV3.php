<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductApiControllerV3 extends Controller
{
    public function index(): JsonResponse
    {
        $products = new ProductCollection(Product::all());
        return response()->json($products, 200);
    }

    public function paginate(): JsonResponse
    {
        $products = new ProductCollection(Product::paginate(5));
        return response()->json($products, 200);
    }
    public function store(Request $request): JsonResponse
    {
        Product::validate($request);

        $creationData = $request->only(['name', 'price']);
        $product = Product::create($creationData);

        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product
        ], 201);
    }

}
