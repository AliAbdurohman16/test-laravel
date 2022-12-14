<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            "success" => true,
            "message" => "Category List",
            "data" => Category::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'is_publish' => 'required',
        ]);

        $category = Category::create($request->all());

        if ($category) {
            \Mail::raw('Add Category', function ($message) {
                $message->from('aliabdurohman16@gmail.com', 'Ali Abdurohman');
                $message->to('user@gmail.com', 'User');
                $message->subject('Add Category Successfully');
            });
            $request->session()->flash('status', 'Add Category Successfully');
            return redirect('/');
        }
        // response()->json([
        //     "success" => true,
        //     "message" => "Category created successfully",
        //     "data" => $category
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            "success" => true,
            "message" => "Category retrieved successfully",
            "data" => Category::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required',
            'is_publish' => 'required',
        ]);

        $category->update($request->all());

        return redirect('/');
        return response()->json([
            "success" => true,
            "message" => "Category updated successfully",
            "data" => $category
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $delete = $category->delete();

        \Mail::raw('Delete Category', function ($message) {
            $message->from('aliabdurohman16@gmail.com', 'Ali Abdurohman');
            $message->to('user@gmail.com', 'User');
            $message->subject('Delete Category Successfully');
        });
        
        return redirect('/');
        return response()->json([
            "success" => true,
            "message" => "Category deleted successfully",
            "data" => $category
        ]);
    }
}
