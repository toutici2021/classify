<?php

namespace App\Http\Controllers\admin;

use App\City;
use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\StateRequest;
use App\State;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Exception;

class LocationController extends Controller
{


    private $searchValue;


    public function countries()
    {
        $data = [
            'title' => 'Countries',
            'activeMenu' => 'countries',
            'countries' => Country::all(),
        ];

        return view('admin.locations.countries', $data);
    }

    public function states()
    {
        $data = [
            'title' => 'States',
            'activeMenu' => 'states',
            'countries' => Country::all(),
            'states' => State::all(),
        ];

        return view('admin.locations.states', $data);
    }


    public function getStateData(Request $request)
    {

        $states = State::with('country')
            ->select('states.*')
            ->whereHas('country', function ($q) use ($request) {
                if ($request->has('countries') && $request->get('countries') != null) {
                    $countries = array_filter($request->countries);
                    if (count($countries) > 0) {
                        $q->whereIn('countries.country_name', $request->get('countries'));
                    }
                }

            });

        return Datatables::of($states)
            ->addColumn('state_name', function ($model) {
                return $model->state_name;
            })
            ->addColumn('country_name', function ($model) {
                return $model->country->country_name;
            })
            ->addColumn('actions', function ($model) {
                return '<td>
                                 <a href="javascript:void(0);" class="btn btn-sm edit btn-info" data-id="' . $model->id . '" ><i class="fas fa-pen"></i> Edit</a>
                                 <a href="javascript:void(0);" class="btn btn-sm btn-danger delete-state" data-id="' . $model->id . '" data-name="' . $model->state_name . '"><i class="far fa-trash-alt"></i> Delete</a>
                           </td>';
            })
            ->rawColumns(['state_name', 'country_name', 'actions'])
            ->filterColumn('state_name', function ($query, $keyword) {
                $sql = "state_name like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->filterColumn('country_name', function ($query, $keyword) {
                $sql = "country_name like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->make(true);
    }


    public function cities()
    {
        $data = [
            'title' => 'Cities',
            'activeMenu' => 'cities',
            'countries' => Country::all(),
        ];
        return view('admin.locations.cities', $data);
    }


    public function getCityData(Request $request)
    {

        $cities = City::join('states', 'cities.state_id', 'states.id')
            ->join('countries', 'states.country_id', 'countries.id')
            ->select('cities.*', 'states.state_name', 'countries.country_name');

        return Datatables::of($cities)
            ->addColumn('actions', function ($model) {
                return '<td class="text-center">
                                 <a href="javascript:void(0);" class="btn btn-sm edit btn-info" data-id="' . $model->id . '" ><i class="fas fa-pen"></i> Edit</a>
                                 <a href="javascript:void(0);" class="btn btn-sm btn-danger delete-city" data-id="' . $model->id . '" data-name="' . $model->state_name . '"><i class="far fa-trash-alt"></i> Delete</a>
                           </td>';
            })
            ->rawColumns(['actions'])

            ->filterColumn('city_name', function ($query, $keyword) {
                $sql = "city_name like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->filterColumn('state_name', function ($query, $keyword) {
                $sql = "state_name like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->filterColumn('country_name', function ($query, $keyword) {
                $sql = "country_name like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->make(true);
    }


    /**
     * @param StateRequest $request
     * @return RedirectResponse
     */

    public function storeState(StateRequest $request)
    {
        $duplicateState = State::whereStateName($request->state_name)->count();
        if ($duplicateState > 0) {
            return back()->with(responseMessage(0, 'error', "State already exists in database"));
        }

        State::create([
            'state_name' => $request->state_name,
            'country_id' => $request->country_id
        ]);
        return back()->with(responseMessage(0, 'success', "State has been created"));
    }

    public function editState($id)
    {
       return State::find($id);
    }

    public function updateState(StateRequest $request)
    {
        if (State::whereStateName($request->state_name)->where('id', '!=', $request->id)->count() > 0) {
            return back()->with(responseMessage(0, 'error', "State already exists in database"));
        }
        $state = State::find($request->id);
        $state->country_id = $request->country_id;
        $state->state_name = $request->state_name;
        $state->save();
        return back()->with(responseMessage(0, 'success', "State has been updated"));
    }


    /**
     * @param Request $request
     * @return JsonResponse
     */

    public function destroyState(Request $request)
    {
        $id = $request->id;
        $delete = State::whereId($id)->delete();
        if ($delete) {
            return response()->json(responseMessage(1, 'error', "State has been deleted"));
        }
        return response()->json(responseMessage(0, 'error', "Unable to delete state"));
    }


    public function getStateForCity($country_id)
    {
        return State::where('country_id', $country_id)->orderBy('state_name', 'asc')->get();
    }

    public function storeCity(Request $request)
    {

        City::create([
            'state_id' => $request->state_id,
            'city_name' => $request->city_name
        ]);
        return back()->with(responseMessage(0, 'success', "State has been created"));
    }

    public function editCity($id)
    {
        $city = City::find($id);
        $country_id = $city->state->country_id;
        $states = State::where('country_id', $city->state->country_id)->get();
        return array('city' => $city, 'country_id' => $country_id, 'states' => $states);
    }

    public function updateCity(Request $request)
    {
        if (City::whereCityName($request->city_name)->where('id', '!=', $request->id)->count() > 0) {
            return back()->with(responseMessage(0, 'error', "City already exists in database"));
        }
        $city = City::find($request->id);
        $city->state_id = $request->state_id;
        $city->city_name = $request->city_name;
        $city->save();
        return back()->with(responseMessage(0, 'success', "City has been updated"));
    }


    public function deleteCity($id)
    {
        $delete = City::whereId($id)->delete();
        if ($delete) {
            return response()->json(responseMessage(1, 'error', "City has been deleted"));
        }
        return response()->json(responseMessage(0, 'error', "Unable to delete city"));
    }


}
