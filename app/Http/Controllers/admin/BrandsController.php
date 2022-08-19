<?php

namespace App\Http\Controllers\admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Str;
use Exception;
use Yajra\DataTables\DataTables;

class BrandsController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function index()
    {

        $data = [
            'activeMenu' => 'brands',
            'title' => 'Brands',
            'brands' => Brand::all(),
        ];

        return view('admin.brands.index', $data);
    }


    public function getBrandsData(Request $request)
    {

        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = Brand::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Brand::select('count(*) as allcount')->where('brand_name', 'like', '%' . $searchValue . '%')->count();

        // Fetch records
        $records = Brand::orderBy($columnName, $columnSortOrder)
            ->where('brands.brand_name', 'like', '%' . $searchValue . '%')
            ->select('brands.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $id = $record->id;
            $brand_name = $record->brand_name;
            $data_arr[] = array(
                "id" => $id,
                "brand_name" => $brand_name,
                "product_count" => $record->ads->count(),
                'actions' => '<td>
                                 <a href="javascript:void(0);" class="btn btn-sm edit btn-info" data-id="' . $record->id . '"><i class="fas fa-pen"></i> Edit</a>
                                 <a href="javascript:void(0);" class="btn btn-sm btn-danger delete-brand" data-id="' . $record->id . '" data-name="' . $record->brand_name . '"><i class="far fa-trash-alt"></i> Delete</a>
                           </td>'
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }


    /**
     * @param BrandRequest $request
     * @return RedirectResponse
     */

    public function store(BrandRequest $request)
    {

        $brand_slug = Str::slug($request->brand_name);
        $duplicate_slug = Brand::where('brand_slug', $brand_slug)->count();
        if ($duplicate_slug > 0) {
            return back()->with(responseMessage(0, 'error', "Brand already exists in database"));
        }

        Brand::create([
            'brand_name' => $request->brand_name,
            'brand_slug' => $brand_slug
        ]);
        return redirect()->route('brands')->with(responseMessage(1, 'success', "New brand has been added"));


    }



    public function edit($id)
    {
        return Brand::find($id);
    }

    public function update(BrandRequest $request)
    {
        if (Brand::where('brand_slug', Str::slug($request->brand_name))->where('id', '!=', $request->id)->count() > 0) {
            return back()->with(responseMessage(0, 'error', "Brand already exists in database"));
        }

        $brand = Brand::find($request->id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = Str::slug($request->brand_name);
        $brand->save();
        return redirect()->route('brands')->with(responseMessage(1, 'success', "Brand has been updated"));
    }

    public function delete($id)
    {
        $delete = Brand::whereId($id)->delete();
        if ($delete) {
            return response()->json(responseMessage(1, 'error', "Brand has been deleted"));
        }
        return response()->json(responseMessage(0, 'error', "Unable to delete category"));
    }
}
