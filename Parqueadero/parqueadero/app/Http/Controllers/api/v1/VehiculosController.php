<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Vehiculos;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\ProductStoreRequest;
use App\Http\Requests\api\v1\ProductUpdateRequest;


class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Vehiculos::orderBy('name', 'asc')->get();
        return response()->json(['data' => $products], 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        $product = Vehiculos::create($request->all());
        return response()->json(['data' => $product], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculos $product)
    {
        return response()->json(['data' => $product], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest  $request, Vehiculos $product)
    {
        $product->update($request->all());
        return response()->json(['data' => $product], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculos $product)
    {
        $product->delete();
         return response(null, 204);

    }
}
