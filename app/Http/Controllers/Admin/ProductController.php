<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //$productlist=Product:all();  model ile
        $productlist = DB::select('select * from products');
        return view('admin.product',['productlist'=>$productlist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datalist= Category::all();
        return view('admin.product_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data=new Product();
        $data->category_id= $request->input('category_id');
        $data->title= $request->input('title');
        $data->description=$request->input('description');
        $data->user_id=Auth::Id();
        $data->price=$request->input('price');
        $data->quantity=$request->input('quantity');
        $data->minquantity=$request->input('minquantity');
        $data->detail=$request->input('detail');
        $data->tax=(int)$request->input('tax');
        $data->slug=$request->input('slug');
        $data->slug=$request->input('status');
        $data->save();
        return redirect()->route('admin_products');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $product = Product::find($id);

        $categorylist = Category::all();
        return view ('admin.product_edit',['ct'=>$product,'cl'=>$categorylist]);
        //echo "edit cate";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $data=Product::find($id);
        $data->category_id= $request->input('category_id');
        $data->title= $request->input('title');
        $data->description=$request->input('description');
        $data->user_id=Auth::Id();
        $data->price=$request->input('price');
        $data->quantity=$request->input('quantity');
        $data->minquantity=$request->input('minquantity');
        $data->detail=$request->input('detail');
        $data->tax=(int)$request->input('tax');
        $data->slug=$request->input('slug');
        $data->slug=$request->input('status');
        $data->save();
        return redirect()->route('admin_products');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product,$id)
    {
        DB::table('products')->where('id','=',$id)->delete();
        //$pr=Product::find($id);
        //$pr->delete();
        return redirect()->route('admin_products');

    }
}
