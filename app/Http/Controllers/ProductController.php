<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct() {
        $products = Product::all();
        return view('products.product', ['products' => $products]);
    }

    
    public function editProduct(Product $product) {

        return view('products.edit', compact('product')); // Извеждаме форма за редактиране
    }

    public function updateProduct(Request $request, Product $product) {

        
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) 
        {

            $imagePath = $request->file('image')->store('products', 'public'); // Съхранява в storage/app/public/products
            $data['image'] = '/storage/' . $imagePath; // Добавя пътя към публичната директория
        }

        $product->update($data); // Обновяваме данните
        return redirect()->route('products.index')->with('success', 'Продуктът беше обновен успешно.');
    }

    public function destroyProduct(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Продуктът беше изтрит успешно.');
    }

}
