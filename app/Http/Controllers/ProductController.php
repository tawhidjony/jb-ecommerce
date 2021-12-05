<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newItem = new Product();
        $categories = Category::all();
        return view('backend.product.create', compact('newItem', 'categories'));
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
        $data['uuid'] = Str::uuid();
        $filePath = $this->StoreFile($request->file('thumbnail'), 'upload/products/thumbnail');
        if ($filePath) {
            $data['thumbnail'] = $filePath;
        }else{
            $data['thumbnail'] ='';
        }

        $productImg = [];
        if($request->hasFile('product_img')){
            foreach ($request->file('product_img') as $file){
                $filePath = $this->StoreFile($file, 'upload/products/product_img');
                if ($filePath) {
                    $productImg[] = $filePath;
                }
            }
        }

        $pro_img = $productImg;
        $productStore = New Product();
        $productStore->uuid         = Str::uuid();
        $productStore->name         = $data['name'];
        $productStore->category_id  = $data['category_id'];
        $productStore->price        = $data['price'];
        $productStore->qty          = $data['qty'];
        $productStore->variation    = $data['variation'];
        $productStore->description  = $data['description'];
        $productStore->thumbnail    = $data['thumbnail'];
        $productStore->product_img  = $pro_img;
        $productStore->save();

        if ($productStore) {
            return redirect()->route('product.index')->with('Product Created Successfully');
        }else{
            return redirect()->route('product.index')->with('Product Created Failed');
        }
      } catch (\Throwable $th) {
          throw $th;
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
