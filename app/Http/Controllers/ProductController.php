<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // دالة لعرض المنتجات والبحث
    public function index(Request $request)
    {
        $query = Product::query();

        // البحث باستخدام اسم المنتج
        if ($request->has('name') && $request->name) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        // البحث باستخدام العلامة التجارية
        if ($request->has('brand') && $request->brand) {
            $query->where('brand', 'like', '%' . $request->brand . '%');
        }

        // البحث باستخدام السعر
        if ($request->has('price_min') && $request->price_min) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->has('price_max') && $request->price_max) {
            $query->where('price', '<=', $request->price_max);
        }

        // جلب المنتجات المتوافقة مع معايير البحث
        $products = $query->paginate(10);

        // إرجاع العرض مع المنتجات
        return view('products.index', compact('products'));
    }
}
