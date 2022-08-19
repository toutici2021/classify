<div class="modal fade" id="modal-category" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{route('storeCategory')}}" method="post" enctype="multipart/form-data">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title">Ajouter une nouvelle catégorie</h4>
                    <button type="button" class="close" style="color:white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('default.select_a_category')}}.</label>
                                <select class="form-control select2" name="parent_category" style="width: 100%;">
                                    <option value="0" selected>{{__('default.main_category')}}</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('parent_category'))
                                    <span class="error">{{ $errors->first('parent_category') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Nom de catégorie</label>
                                <input type="text"
                                       class="form-control {{$errors->has('category_name') ? 'is-invalid':''}}"
                                       name="category_name"
                                       placeholder="{{__('default.category_name')}}" required>

                                @if ($errors->has('category_name'))
                                    <span class="error">{{ $errors->first('category_name') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Sélectionner la marque</label>
                                <select class="form-control select2 select2-icon fa-icon" name="brand_id[]" multiple>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>{{__('default.select_an_icon')}}</label>
                                <select class="form-control select2-icon" data-live-search="true" name="fa_icon"
                                        data-style="btn-default">
                                    @foreach(get_fa_icons() as $icon => $val)
                                        <option value="{{$icon}}" data-icon="{{$icon}}">{{$icon}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('fa_icon'))
                                    <span class="error">{{ $errors->first('fa_icon') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="description" class="form-control"
                                          rows="6">{{ old('description') }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="error"><i class="fa fa-info"> </i> {{ $errors->first('description') }}</span>
                                @endif

                            </div>
                            <div class="form-group">
                                <label>{{__('default.upload_category_image')}}:</label>
                                <input type="file" class="" name="media_name" accept="image/*">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('default.close')}}</button>
                    <button type="submit" class="btn btn-danger"><i
                            class="fa fa-save"></i> {{__('default.save_category')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>


