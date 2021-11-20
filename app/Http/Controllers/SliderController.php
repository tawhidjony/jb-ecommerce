<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newItem = new Slider();
        return view('backend.slider.create', compact('newItem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->all();
        $filePath = $this->StoreFile($request->file('photo'), 'upload/slider');
        if ($filePath) {
            $data['photo'] = $filePath;
        }else{
            $data['photo'] ='';
        }
        $data['uuid'] = Str::uuid();
        $slider = Slider::create($data);

        if ($slider) {
            return redirect()->route('slider.index')->with('success', 'Slider Created Successfully');
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
        $newItem = Slider::find($id);
        return view('backend.slider.edit', compact('newItem'));
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
        try {

            $request->validate([
                'name' => 'required',
            ]);
            $data = $request->all();
            $findSlider = Slider::findOrFail($id);
            $filePath = $this->UpdateFile($request->file('photo'), $findSlider->photo, 'upload/slider');
            if ($filePath) {
                $data['photo'] = $filePath;
            }else{
                $data['photo'] ='';
            }
            $updateSlider = $findSlider->update($data);
            if($updateSlider){
                return redirect()->route('slider.index')->with('Slider has been success');
            }else{
                return redirect()->route('slider.index')->with('Slider has been success');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newItem = Slider::find($id);
        if($newItem){
            $this->DeleteFile($newItem->photo);
            $newItem->delete();
            return redirect()->route('slider.index')->with('Slider has been deleted');
        }
    }
}
