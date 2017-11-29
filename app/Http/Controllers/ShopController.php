<?php

namespace Shop\Http\Controllers;

use Shop\Category;
use Shop\Http\Requests\LoginRequest;
use Shop\Http\Requests\ProfileRequest;
use Shop\Http\Requests\UserRequest;
use Shop\Product;
use Shop\User;
use Auth;
use View;
use DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => ['getLogin', 'getRegister']]);
        $this->middleware('admin', ['only' => 'getProfile']);
    }

    public function index()
    {
        $newProducts = Product::orderBy('id', 'DESC')->paginate(8);
        $promotionProducts = Product::where('discount', '<>', 0)->orderBy('id', 'DESC')->paginate(8);
        return view('front-end.pages.index')
            ->with(['newProducts' => $newProducts, 'promotionProducts' => $promotionProducts]);
    }

    //  Register Custommer
    public function getRegister()
    {
        return view('front-end.pages.register');
    }

    public function postRegister(UserRequest $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->fullname = $request->name;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->role = '2';
        $user->status = '1';

        $user->save();

        $auth = array(
            'email' => $request->email,
            'password' => $request->password
        );

        if (Auth::attempt($auth)) {
            return redirect()->route('index');
        }

//        return redirect()->route('getLogin')
//            ->with(['message' => 'Đăng ký thành công! Vui lòng đăng nhập.', 'alert' => 'success']);
    }

    //  Login Custommer
    public function getLogin()
    {
        return view('front-end.pages.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $auth = array(
            'email' => $request->email,
            'password' => $request->password
        );

        if (Auth::attempt($auth)) {
            return redirect()->route('index');
        } else {
            return redirect()->route('getLogin')
                ->with(['message' => 'Email hoặc mật khẩu không đúng.', 'alert' => 'danger']);
        }
    }

    //  Logout Custommer
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    //  Profile
    public function getProfile()
    {
        return view('front-end.pages.profile');
    }

    public function postProfile(ProfileRequest $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->fullname = $request->name;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->role = '2';
        $user->status = '1';
        $user->save();

        return redirect()->route('getProfile')
            ->with(['message' => 'Chỉnh sửa thành công', 'alert' => 'success']);
    }


    public function error404()
    {
        return view('front-end.pages.404');
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

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $sidebars = Category::where('type', 0)->get();
        $products = Product::where('category_id', $category->id)->paginate(6);
        return view('front-end.pages.category')
            ->with(['category' => $category, 'sidebars' => $sidebars, 'products' => $products]);
    }

    public function product($slug)
    {
        $product = Product::whereSlug($slug)->first();
        $sameProducts = Product::where('category_id', $product->category_id)
            ->where('id', '<>', $product->id)->paginate(4);
        $newProducts = Product::orderBy('id', 'DESC')->paginate(4);
        $sql = 'SELECT  products.name,
                        products.price,
                        products.discount,
                        products.image,
                        SUM(order_details.quantity) AS quantity
                FROM products
                INNER JOIN order_details ON products.id = order_details.product_id
                INNER JOIN orders ON order_details.order_id = orders.id
                GROUP BY products.id
                ORDER BY order_details.quantity DESC
                LIMIT 4';
        $hotProducts = DB::select(DB::raw($sql));
        return view('front-end.pages.product')
            ->with(
                [
                    'product' => $product,
                    'sameProducts' => $sameProducts,
                    'newProducts' => $newProducts,
                    'hotProducts' => $hotProducts
                ]
            );
    }
    public function search(Request $req){
        $product = Product::where('name','like','%'.$req->key.'%')->orwhere('price',$req->key)->paginate(PAGE_SIZE_DEFAULT);
        return view('front-end.pages.search',compact('product'));
    }
}
