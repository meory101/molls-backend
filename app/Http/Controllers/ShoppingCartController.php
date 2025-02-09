<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ShoppingCart;
use App\Models\Product;
use Auth;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $cart = ShoppingCart::where('UserID', Auth::id())->first();
        return view('cart.index', compact('cart'));
    }

    public function addProduct(Request $request, Product $product)
    {
        $cart = ShoppingCart::firstOrCreate(['UserID' => Auth::id()]);
        $cart->addProduct($product->id, $request->input('quantity', 1)); // استخدم القيمة الافتراضية للكمية إذا لم يتم تقديمها
        return redirect()->route('cart.index')->with('success', 'تمت إضافة المنتج إلى السلة!');
    }

    public function removeProduct(Product $product)
    {
        $cart = ShoppingCart::where('UserID', Auth::id())->first();
        if ($cart) {
            $cart->removeProduct($product->id);
        }
        return redirect()->route('cart.index')->with('success', 'تمت إزالة المنتج من السلة!');
    }
}
