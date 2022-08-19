<?php

namespace App\Http\Controllers\admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Str;
use Storage;
use Image;
use File;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'activeMenu' => 'categories',
            'title' => 'Categories',
            'categories' => Category::where('category_id', 0)->get(),
            'brands' => Brand::orderBy('brand_name', 'ASC')->get()
        ];

        return view('admin.categories.index', $data);

    }


    public function create()
    {
    }

    public function store(CategoryRequest $request)
    {

        $slug = Str::slug($request->category_name);
        $duplicate_slug = Category::where('category_slug', $slug)->count();
        if ($duplicate_slug > 0) {
            return back()->with('error', 'Category already exists in database');
        }

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_slug = $slug;
        $category->category_id = $request->parent_category;
        $category->fa_icon = $request->fa_icon;
        $category->description = $request->description;
        if ($request->media_name)
        {
            $category->media_name = $this->manageImage($request->media_name);
        }
        $category->save();

        if ($request->brand_id)
        {
            $category->brands()->sync($request->brand_id);
        }

        $notification = array(
            'message' => 'Category has been created',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }


    public function edit($id)
    {
        return Category::with('brands')->find($id);
    }


    public function update(CategoryRequest $request)
    {
        if (Category::where('category_slug', Str::slug($request->category_name))->where('id', '!=', $request->id)->count() > 0) {
            return back()->with('error', 'Category already exists in database');
        }

        $category = Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_slug = Str::slug($request->category_name);
        $category->category_id = $request->parent_category;
        $category->fa_icon = $request->fa_icon;
        $category->description = $request->description;
        if ($request->media_name)
        {
            File::delete($category->media_name);
            $category->media_name = $this->manageImage($request->media_name);
        }
        $category->save();

        if ($request->brand_id)
        {
            $category->brands()->sync($request->brand_id);
        }

        $notification = array(
            'message' => 'Category has been updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }


    /**
     * @param Request $request
     * @return JsonResponse
     */

    public function delete($id)
    {
        $category= Category::whereId($id)->first();
        //Remove the file from storage
        if ($category->media_name)
        {
            File::delete($category->media_name);
        }

        $delete = Category::where('id', $id)->delete();
        if ($delete) {
            return response()->json(responseMessage(1, 'error', "Category has been deleted"));
        }
        return response()->json(responseMessage(0, 'error', "Unable to delete category"));
    }


    private function manageImage($image)
    {
        $media_name = $image;
        $imageName = $media_name->getClientOriginalName();
        $fileName = time() . '-' . $imageName;
        $imageUrl = 'public/uploads/categories/'.$fileName;
        Image::make($media_name)->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($imageUrl);
        return $imageUrl;
    }


}
