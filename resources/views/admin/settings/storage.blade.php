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
                    <h3 class="card-title">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('save_settings')}}" class="form-horizontal" enctype="multipart/form-data"
                          method="post"> @csrf
                        <div class="form-group {{ $errors->has('default_storage')? 'has-error':'' }}">
                            <label for="default_storage" class="col-sm-4 control-label">Choisissez votre valeur par défaut
                                Stockage</label>
                            <hr>
                            <div class="col-sm-8">
                                <label>
                                    <input type="radio" name="default_storage"
                                           value="public" {{ get_option('default_storage') == 'public'? 'checked' :'' }} />
                                           Local Server
                                    <small class="text-danger custom-font-bold"> (Files will be save into your local server)</small>
                                </label> <br/>
                                <label>
                                    <input type="radio" name="default_storage"
                                           value="s3" {{ get_option('default_storage') == 's3'? 'checked' :'' }} />
                                    Amazon
                                    S3
                                    <small class="text-danger custom-font-bold"> (Files will be save into Amazon S3) </small>
                                </label>

                            </div>
                        </div>


                        <div class="amazon_s3_settings_wrap"
                             style="display: {{ get_option('default_storage') == 's3' ? 'block':'none' }};">

                            <hr/>
                            <div class="form-group">
                                <label for="amazon_key"
                                       class="col-sm-4 control-label">Amazon Key</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="amazon_key"
                                           value="{{ get_option('amazon_key') }}" name="amazon_key"
                                           placeholder="Amazon Key">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="amazon_secret"
                                       class="col-sm-4 control-label">Amazon Secret</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="amazon_secret"
                                           value="{{ get_option('amazon_secret') }}" name="amazon_secret"
                                           placeholder="Amazon Secret">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="amazon_region"
                                       class="col-sm-4 control-label">Amazon Region</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="amazon_region"
                                           value="{{ get_option('amazon_region') }}" name="amazon_region"
                                           placeholder="Amazon Region">
                                    <a href="http://docs.aws.amazon.com/general/latest/gr/rande.html"
                                       target="_blank">Amazon Region Help</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="bucket" class="col-sm-4 control-label">Bucket</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="bucket"
                                           value="{{ get_option('bucket') }}" name="bucket"
                                           placeholder="Bucket">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" id="settings_save_btn"
                                        class="btn btn-danger"><i class="fa fa-save"></i> Enregistrer les paramètres
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script>
        $(document).ready(function () {

            $('input[type="checkbox"], input[type="radio"]').click(function () {
                const input_name = $(this).attr('name');
                let input_value = 0;
                if ($(this).prop('checked')) {
                    input_value = $(this).val();
                }
                $.ajax({
                    url: '{{ route('save_settings') }}',
                    type: "POST",
                    data: {[input_name]: input_value, '_token': '{{ csrf_token() }}'},
                });
            });


            $('input[name="default_storage"]').click(function () {
                const default_storage = $(this).val();

                if (default_storage === 's3') {
                    $('.amazon_s3_settings_wrap').slideDown('slow');
                } else {
                    $('.amazon_s3_settings_wrap').slideUp();
                }
            });

            /**
             * Send settings option value to server
             */
            $('#settings_save_btn').click(function (e) {
                e.preventDefault();

                const this_btn = $(this);
                this_btn.attr('disabled', 'disabled');
                const form_data = this_btn.closest('form').serialize();
                $.ajax({
                    url: '{{ route('save_settings') }}',
                    type: "POST",
                    data: form_data,
                    success: function (data) {
                        if (data.success === 1) {
                            this_btn.removeAttr('disabled');
                            toastr["success"](data.message);
                        }
                    }
                });
            });

        });
    </script>

@stop
