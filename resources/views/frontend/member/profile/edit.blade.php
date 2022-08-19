@extends('frontend.member-master')
@section('content')
    <main class="main-body">
        <div class="container custom-container my-3 my-lg-4">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="panel-aside user-panel-aside">
                        <div class="aside-content">
                            <!--============= Aside ============-->
                            @include('frontend.member.common.sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="panel-body user-panel-body">
                        <div class="body-content">

                            <div class="user-theme-block p-xl-5">

                                <h3 class="mb-4 border-bottom pb-2"><i class="fa fa-user-o mr-2"></i> Mettre à jour le profile</h3>

                                <form  action="{{route('memberUpdateProfile')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="post-form">

                                        <div class="form-group mb-0 row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Prénoms</label>
                                                    <input type="text"  name="first_name" value="{{auth::user()->first_name}}" placeholder="Prénoms" class="form-control">
                                                    @if ($errors->has('first_name'))
                                                        <span class="error"><i>{{ $errors->first('first_name') }}</i></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Nom</label>
                                                    <input type="text" name="last_name" value="{{auth::user()->last_name}}" placeholder="Nom" class="form-control">
                                                    @if ($errors->has('last_name'))
                                                        <span
                                                            class="error"><i>{{ $errors->first('last_name') }}</i></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Email </label>
                                                    <input type="email" name="email" value="{{auth::user()->email}}" placeholder="Email" class="form-control">
                                                    @if ($errors->has('email'))
                                                        <span class="error"><i>{{ $errors->first('email') }}</i></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Adresse</label>
                                                    <input type="text"  name="address" value="{{auth::user()->address}}"placeholder="adresse" class="form-control">
                                                    @if ($errors->has('address'))
                                                        <span  class="error"><i>{{ $errors->first('address') }}</i></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Téléphone</label>
                                                    <input type="text" name="phone" value="{{auth::user()->phone}}"  placeholder="Téléphone" class="form-control">
                                                    @if ($errors->has('phone'))
                                                        <span class="error"><i>{{ $errors->first('phone') }}</i></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="post-form-label">Description</label>
                                                    <textarea cols="30" rows="10" name="description" placeholder="Description" class="form-control">{{auth::user()->description}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-4 col-xl-3">
                                                <div class="form-group">
                                                    <div class="box-ratio box-ratio-4by3 w-150px">
                                                        <div class="attach-file-preview">
                                                            <input type="file" name="photo" accept="image/*" onchange="previewFile(this)" id="changeProfile" class="img-uploader-input">
                                                            <img src="{{asset(auth::user()->photo)}}" alt="Upload Logo" class="img-fit-center text-center text-strong text-info">
                                                            <label for="changeProfile"></label>
                                                            <span class="preview-overlay-text px-2 py-1">Changer Photo</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right mt-4">
                                            <button type="submit" class="btn btn-brand-tertiary"><i class="fa fa-save"></i> Enregistrer & Mettre à jour</button>
                                        </div>
                                    </div>
                                </form>


                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>



    </main>
@endsection
@section('css')


@endsection
@section('js')
    <script>
        // ============ Preview Logo ================
        function previewFile(input) {
            var preview = input.nextElementSibling;
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            };
            if (file) {
                reader.readAsDataURL(file);

            } else {
                preview.src = "";
            }
        }

    </script>
@endsection
