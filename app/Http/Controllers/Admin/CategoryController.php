<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Context;
use App\Models\Faq;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {




           $categorylist = DB::select('select * from categories');
           // print_r($categorylist); deneme
           //exit();

            return view('admin.category', ['categorylist' => $categorylist]);
            /*
            query ile
            $categorylist = DB::table('categories')->get();

            return view('admin.category', ['categorylist' => $categorylist]);
            */



    }

    /**
     * Show the form for creating a new resource.
     *
     * */



    public function add()
    {
        $categorylist = DB::table('categories')->get()->where('parent_id',0);
        return view('admin.category_add',['categorylist'=>$categorylist]);

    }
    public function create(Request $request)
    {
        //insert statement
        /*DB::table('users')->insert([
            ['email' => 'picard@example.com', 'votes' => 0],
            ['email' => 'janeway@example.com', 'votes' => 0],
        ]);*/
        DB::table('categories')->insert([
            'parent_id'=> $request->input('parent_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'keywords' => $request->input('keywords'),
            'status' => $request->input('status'),
            'image' =>$request->input('image'),
            'slug' => $request->input('slug')

        ]);
        return redirect()->route('admin_category');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {

        $categorise = Category::find($id);
        //$categorise= DB::table('categories')->get()->where('id',$id);
        //DB::table('categories')->where('id','=',$id)->get();
        $categorylist = DB::table('categories')->get()->where('parent_id',0);
        return view ('admin.category_edit',['ct'=>$categorise,'cl'=>$categorylist]);
        //echo "edit cate";
    }


    public function update(Request $request, Category $category,$id)
    {
        //**
        $categorise = new Category($id);

        $categorise->title =$request->input('title');
        $categorise->parent_id= $request->input('parent_id');
        $categorise->description = $request->input('description');
        $categorise->status = $request->input('satatus');
        $categorise->slug = $request->input('slug');
        $categorise->keywords=$request->input('keywords');
        $categorise->image=$request->input('image');

        $categorise->save();
        return redirect()->route('admin.category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Category $category,$id)
    {
        //
        DB::table('categories')->where('id','=',$id)->delete();
        return redirect()->route('admin_category');
    }

   }
