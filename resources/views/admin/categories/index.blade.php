@extends('master')

@section('title')
    {{$title}}
@stop

@section('style')

@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Categories</h3>
                    <button class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-category"><i
                            class="fab fa-buffer"></i> {{__('default.add_new_category')}}
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <div class="main-categories">
                                        <strong>{{ $category->category_name }} <span
                                                class="badge badge-danger right">{{ $category->ads->count() }}</span></strong>
                                        <span class="float-right ml-5">
                                            <a href="javascript:void(0);" class="btn btn-info btn-sm edit"
                                               data-id="{{$category->id}}"><i class="fas fa-pen"></i> </a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-sm delete-category"
                                               data-id="{{ $category->id }}" data-name="{{ $category->category_name }}"><i
                                                    class="fa fa-trash"></i> </a>
                                            </span>
                                        <div class="sub-categories">
                                            @if($category->sub_categories->count() > 0)
                                                @foreach($category->sub_categories as $sub_cat)
                                                    <div class="">
                                                        <hr style="margin: 10px 0"/>
                                                        -- {{ $sub_cat->category_name }} <span
                                                            class="badge badge-danger right">{{ $sub_cat->ads->count() }}</span>
                                                        <span class="float-right ml-5">
                                                        <a href="javascript:void(0);" data-id="{{$sub_cat->id}}"
                                                           class="btn btn-info btn-sm edit"><i
                                                                class="fas fa-pen"></i> </a>
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-danger btn-sm delete-category"
                                                           data-id="{{ $sub_cat->id }}"
                                                           data-name="{{ $sub_cat->category_name }}"><i
                                                                class="fa fa-trash"></i> </a>
                                                    </span>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.modals.modal-create-category')

    <div class="modal fade" id="editCategory" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('updateCategory')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" class="id">
                    <div class="modal-header bg-dark">
                        <h4 class="modal-title">{{__('default.edit_category')}}</h4>
                        <button type="button" class="close" style="color:white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{__('default.select_a_category')}}.</label>
                                    <select class="form-control select2 parent-category" name="parent_category"
                                            style="width: 100%;">
                                        <option value="0">{{__('default.main_category')}}</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('parent_category'))
                                        <span class="error">{{ $errors->first('parent_category') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>{{__('default.category_name')}}</label>
                                    <input type="text"
                                           class="form-control category-name {{$errors->has('category_name') ? 'is-invalid':''}}"
                                           name="category_name"
                                           placeholder="Category Name" required>

                                    @if ($errors->has('category_name'))
                                        <span class="error">{{ $errors->first('category_name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>{{__('default.select_brand')}}</label>
                                    <select class="form-control select2 select2-icon  brand-id" multiple
                                            name="brand_id[]">
                                        <option value="">{{__('default.select_brand')}}</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}"
                                                    class="brand-id-{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>{{__('default.select_an_icon')}}</label>
                                    <select class="form-control select2 select2-icon fa-icon" name="fa_icon">
                                        @foreach(get_fa_icons() as $icon => $val)
                                            <option value="{{$icon}}" data-icon="{{$icon}}">{{$icon}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('fa_icon'))
                                        <span class="error">{{ $errors->first('fa_icon') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>{{__('default.description')}}</label>
                                    <textarea name="description" id="description" class="form-control description"
                                              rows="6">{{ old('description') }}</textarea>

                                    @if ($errors->has('description'))
                                        <span class="error"><i class="fa fa-info"> </i> {{ $errors->first('description') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="image-preview"></div>
                                </div>

                                <div class="form-group">
                                    <label>{{__('default.upload_category_image')}} :</label>
                                    <input type="file" class="" name="media_name" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger"><i
                                class="fa fa-save"></i> {{__('default.save_category')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/category.js')}}"></script>
@stop
