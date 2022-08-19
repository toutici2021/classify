<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\EditSliderRequest;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Str;
use Image;
use File;

class SliderController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home Page Sliders',
            'activeMenu' => 'sliders',
            'sliders' => Slider::orderBy('id', 'DESC')->get()
        ];


        return view('admin.slider.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create New Slider',
            'activeMenu' => 'sliders',
        ];

        return view('admin.slider.create', $data);
    }

    public function store(SliderRequest $request): \Illuminate\Http\RedirectResponse
    {

        $slider = new Slider();
        $slider->caption = $request->caption;
        $slider->description = $request->description;
        if ($request->media_name)
        {
            $slider->media_name = $this->manageImage($request->media_name);
        }

        $slider->save();

        $notification = array(
            'message' => 'New slider image added',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit Slider',
            'activeMenu' => 'sliders',
            'slider' => Slider::find($id)
        ];

        return view('admin.slider.edit', $data);
    }

    public function update(EditSliderRequest $request, $id)
    {
        $slider = Slider::find($id);
        $slider->caption = $request->caption;
        $slider->description = $request->description;
        if ($request->media_name)
        {
            File::delete($slider->media_name);
            $slider->media_name = $this->manageImage($request->media_name);
        }

        $slider->save();

        $notification = array(
            'message' => 'Slider has been updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        $slider= Slider::whereId($id)->first();
        //Remove the file from storage
        if ($slider->media_name)
        {
            File::delete($slider->media_name);
        }

        $delete = Slider::where('id', $id)->delete();
        if ($delete) {
            return response()->json(responseMessage(1, 'error', "Slider has been deleted"));
        }
        return response()->json(responseMessage(0, 'error', "Unable to delete slider"));
    }

    private function manageImage($image)
    {
        $media_name = $image;
        $imageName = $media_name->getClientOriginalName();
        $fileName = time() . '-' . $imageName;
        $imageUrl = 'public/uploads/slider/'.$fileName;
        Image::make($media_name)->resize(1920, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($imageUrl);
        return $imageUrl;
    }

}
