<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ShopController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('category_id');
        $gender = $request->input('gender');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        $query = Product::query();

        if ($gender) {
            $query->where('gender', $gender);
        }

        if ($category) {
            $query->where('category_id', $category);
        }

        if ($minPrice) {
            $query->where('price', '>=', $minPrice);
        }

        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        }

        $products = $query->get();

        $categories = Category::all();
        return view('shop', compact('products', 'categories'));
    }


    public function cart(Request $request)
    {
        $user_id = Auth::id();
        $orders = Order::where('user_id', $user_id)->get();
        $total_price = Order::where('user_id', $user_id)->sum('total_price');

        foreach ($orders as $order) {
            $product = Product::find($order->order_id);


            $order->product_name = $product->name;
            $order->product_price = $product->price;
            $order->product_gender = $product->gender;
            $order->product_description = $product->description;
            $order->total_price_in_cart = $total_price;
        }

        return view('cart', ['orders' => $orders]);
    }

    public function addtocart(Request $request)
    {

        $validatedData = $request->validate([
            'size' => 'required',
            'quantity' => 'required|numeric|min:1',
            'user_id' => 'required|numeric',
            'product_id' => 'required|numeric',
        ]);
        $product = Product::find($request->product_id);

        $order = new Order;
        $order->user_id = $validatedData['user_id'];
        // $order->id = $validatedData['product_id'];
        $order->quantity = $validatedData['quantity'];
        $order->order_id = $validatedData['product_id'];
        $order->size = $validatedData['size'];
        $order->total_price = $product->price * $request->quantity;
        $order->save();

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();

        // Redirect to the cart view
        return redirect()->route('cart');
    }

    public function getOrderCount()
{
    $orderCount = Order::where('user_id', auth()->user()->id)->sum('quantity');
return $orderCount;

}

}
