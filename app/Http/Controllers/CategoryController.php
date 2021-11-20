<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getCategory = Category::all();
        return view('backend.category.index', compact('getCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newItem = New Category();
        return view('backend.category.create', compact('newItem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required',
            ]);

            $data = $request->all();
            $filePath = $this->StoreFile($request->file('photo'), 'upload/category');
            if ($filePath) {
                $data['photo'] = $filePath;
            }else{
                $data['photo'] ='';
            }
            $data['uuid'] = Str::uuid();
            $storeCategory = Category::create($data);

            if($storeCategory){
                return redirect()->route('category.index')->with('Category has been success');
            }else{
                return redirect()->route('category.index')->with('Category has been success');
            }

        }catch (\Exception $ex){
            report($ex);
            Log::error($ex->getMessage());
            return redirect()->back()->with("fail");
        }
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
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $newItem = Category::find($category->id);
        return view('backend.category.edit', compact('newItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $request->validate([
                'name' => 'required',
            ]);
            $data = $request->all();
            $findCategory = Category::findOrFail($id);
            $filePath = $this->UpdateFile($request->file('photo'), $findCategory->photo, 'upload/category');
            if ($filePath) {
                $data['photo'] = $filePath;
            }else{
                $data['photo'] ='';
            }

            $updateCategory = $findCategory->update($data);
            if($updateCategory){
                return redirect()->route('category.index')->with('Category has been success');
            }else{
                return redirect()->route('category.index')->with('Category has been success');
            }

        }catch (\Exception $ex){
            report($ex);
            Log::error($ex->getMessage());
            return redirect()->back()->with("fail");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $newItem = Category::find($category->id);
        if($newItem){
            $this->DeleteFile($newItem->photo);
            $newItem->delete();
            return redirect()->route('category.index')->with('Category has been deleted');
        }

    }
}
