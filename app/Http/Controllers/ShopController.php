<?php

namespace Shop\Http\Controllers;

use Illuminate\Http\Request;
use Shop\Category;
use Shop\OrderDetail;
use Shop\Product;
use Symfony\Component\DependencyInjection\Tests\Compiler\C;

class ShopController extends Controller
{
    public function index()
    {
        $newProducts = Product::orderBy('id', 'decs')->paginate(8);
        $promotionProducts = Product::where('discount', '>', 0)->orderBy('id', 'decs')->paginate(8);
        return view('front-end.pages.index')->with(['newProducts' => $newProducts, 'promotionProducts' => $promotionProducts]);
    }

    public function error404()
    {
        return view('front-end.pages.404');
    }

    public function login()
    {
        return view('front-end.pages.login');
    }

    public function register()
    {
        return view('front-end.pages.register');
    }

    public function about()
    {
        return view('front-end.pages.about');
    }

    public function contact()
    {
        return view('front-end.pages.contact');
    }

    public function checkout()
    {
        return view('front-end.pages.checkout');
    }

    public function cart()
    {
        return view('front-end.pages.cart');
    }

    public function category()
    {
        return view('front-end.pages.category');
    }

    public function product($id)
    {
        $product = Product::find($id);
        $new = Product::orderBy('id', 'decs')->paginate(4);

        $categoryID = $product->category_id;
        $price = $product->price;

        $id = $product->id;

        $quantity = OrderDetail::all();
        $quantitys = OrderDetail::orderBy('quantity', 'max',$quantity)->orderBy('quantity','decs')->orderBy('id', 'decs')->paginate(4);
        $productNew = Product::where('category_id', $categoryID)->where('id', '<>', $id)->orderBy('id', 'decs')->orderBy('id', 'decs')->paginate(4);




        //$productNew=Product::where('category_id',);

        return view('front-end.pages.product')->with(['product' => $product, 'new' => $new, 'productNew' => $productNew,'quantitys'=>$quantitys]);

    }
    //    public function getMenuProduct(){
    //        $data =Product::where('user_id',1)->get();
    //
    //        return view('front-end.pages.menuproduct',compact('data'));
    //    }
    //    public function getloaisp($type){
    //        $loai_sp= Category::where("id_type",$type);
    //    }
}
