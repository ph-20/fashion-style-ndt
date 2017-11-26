<?php

namespace Shop\Http\Controllers;

use Shop\Http\Requests\CategoryRequest;
use Shop\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('back-end.categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('type', 0)->get();
        return view('back-end.categories.create')->with('categories', $categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->type = $request->type;
        if ($request->type == 0) {
            $category->parent_id = 0;
        } else {
            $category->parent_id = $request->parent_id;
        }
        $category->save();

        return redirect()->route('categories.index')
            ->with(['message' => 'Thêm mới thành công', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $user = User::find($id);
//        return view('back-end.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $parentCategories = Category::where('type', 0)->where('id', '<>', $id)->get();
        $childCategory = Category::where('type', 1)->where('parent_id', $id)->get();
        return view('back-end.categories.edit')
            ->with('category', $category)
            ->with('parentCategories', $parentCategories)
            ->with('childCategory', $childCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        if (isset($request->type)) {
            $category->type = $request->type;
            if ($request->type == 0) {
                $category->parent_id = 0;
            } else {
                $category->parent_id = $request->parent_id;
            }
        }
        $category->save();
        return redirect()->route('categories.index')->with(['message' => 'Chỉnh sửa thành công!', 'alert' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $childCategory = Category::where('type', 1)->where('parent_id', $id)->get();
        $products = $category->products;
        if ($category->type == 0 && count($childCategory) > 0 || count($products) > 0) {
            return redirect()->route('categories.index')->with(['message' => 'Không thể xóa danh mục này!', 'alert' => 'danger']);
        }
        $category->delete();

        return redirect()->route('categories.index')->with(['message' => 'Xóa thành công.!', 'alert' => 'success']);
    }
}
