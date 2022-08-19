@extends('frontend.web-master')
@section('content')
    <main class="main-body">
        <section class="my-4 my-lg-5">
            <!--============== Banner ===================-->
            <div class="container py-4">

                <div class="error-404 text-center">
                    <div class="error-code">404 <i class="fa fa-warning"></i></div>
                    <h2 class="mb-4">Oups 404! Cette page est introuvable.</h2>

                    <p class="text-muted error-desc">
                        Désolé, mais la page que vous recherchez est introuvable ou n'existe pas. Essayez d'actualiser <br> la page ou cliquez sur le bouton ci-dessous pour revenir à la page d'accueil.
                    </p>
                    <div class="mt-4">
                        <a href="{{route('rootPath')}}" class="btn btn-brand-primary"><span class="fa fa-home"></span> Retour à l'accueil</a>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection

@section('css')
<style>
    error-404 {
        margin: 0 auto;
        text-align: center;
    }
    .error-404 .error-code {
        color: var(--brand-primary);
        font-size: 64px;
        line-height: 100px;
        font-weight: bold;
    }
</style>
@endsection
