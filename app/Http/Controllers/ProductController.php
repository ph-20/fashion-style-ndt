<?php

namespace Shop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Shop\Http\Requests\ProductRequest;
use Shop\Product;
use Shop\Category;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('back-end.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('type', '<>', 0)->get();
        return view('back-end.products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        if ($request->hasFile('image')) {
            $fileName = $request->image->store('public/products');
            $product->image = Storage::url($fileName);
        }
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->type = $request->type;
        $product->description = $request->description;
        $product->user_id = Auth::user()->id;
        $product->category_id = $request->categoryID;
        $product->save();

        return redirect()->route('products.create')
            ->with(['message' => 'Thêm mới thành công.', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::where('type', '<>', 0)->get();
        return view('back-end.products.edit')
            ->with(['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        if ($request->hasFile('image')) {
            $fileName = $request->image->store('public/products');
            $product->image = Storage::url($fileName);
        }
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->type = $request->type;
        $product->description = $request->description;
        $product->user_id = Auth::user()->id;
        $product->category_id = $request->categoryID;
        $product->save();

        return redirect()->route('products.edit', $product->id)
            ->with(['message' => 'Chỉnh sửa thành công.', 'alert' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back()
            ->with(['message' => 'Xóa thành công.', 'alert' => 'success']);
    }
}
