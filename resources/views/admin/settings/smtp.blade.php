
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
                    <div>
                        <h3 class="page-title">Configuration de la messagerie</h3>
                        <p class="page-sub-title text-danger custom-font-bold">
                            Configuration SMTP globale pour le système
                        </p>
                    </div>
                    <form method="post" id="save-mail-configuration" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Pilote de messagerie</label>
                                    <input type="text" name="mail_driver" id="mail_driver" class="form-control"
                                           value="{{$_ENV['MAIL_DRIVER']}}"
                                           placeholder="Pilote de messagerie">
                                    <div id="error_company_name"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Hôte de messagerie <span class="required">*</span></label>
                                    <input type="text" name="smtp_mail_host" id="smtp_mail_host" class="form-control"
                                           value="{{$_ENV['MAIL_HOST']}}"
                                           placeholder="Hôte">
                                    <div id="error_smtp_mail_host"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nom d'utilisateur de messagerie <span class="required">*</span></label>
                                    <input type="text" name="smtp_mail_username" class="form-control"
                                           value="{{$_ENV['MAIL_USERNAME']}}"
                                           id="smtp_mail_username"
                                           placeholder="Nom d'utilisateur de messagerie">
                                    <div id="error_smtp_mail_username"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mot de passe de messagerie <span class="required">*</span></label>
                                    <input name="smtp_mail_password" type="text" class="form-control"
                                           value="{{$_ENV['MAIL_PASSWORD']}}"
                                           id="smtp_mail_password"
                                           placeholder="Mot de passe">
                                    <div id="error_smtp_mail_password"></div>
                                    <small class="text-danger custom-font-bold">Si vous utilisez gmail pour envoyer
                                        e-mails, il est nécessaire de
                                        générer un mot de passe d'application. <a
                                            href="https://support.google.com/accounts/answer/185833?hl=en"
                                            target="_blank">Cliquez ici</a> pour plus de détails.</small>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Port de messagerie <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="smtp_mail_port" id="smtp_mail_port"
                                           value="{{$_ENV['MAIL_PORT']}}"
                                           placeholder="Mail Port">
                                    <div id="error_smtp_mail_port"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Cryptage du courrier <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="smtp_mail_encryption"
                                           value="{{$_ENV['MAIL_ENCRYPTION']}}"
                                           id="smtp_mail_encryption"
                                           placeholder="Cryptage du courrier">
                                    <div id="error_smtp_mail_encryption"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>De l'adresse e-mail <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="smtp_from_mail"
                                           value="{{$_ENV['MAIL_FROM_ADDRESS']}}"
                                           id="smtp_from_mail"
                                           placeholder="From Address">
                                    <small class="text-danger custom-font-bold">Cette adresse e-mail sera utilisée pour
                                        finalité administrative. Comme DE l'e-mail</small>
                                    <div id="error_smtp_from_mail"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>De l'adresse e-mail <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="smtp_from_name"
                                           value="{{$_ENV['MAIL_FROM_NAME']}}"
                                           id="smtp_from_name"
                                           placeholder="De l'adresse e-mail">
                                    <div id="error_smtp_from_name"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" id="settings_save_btn" class="btn btn-danger float-left"><i
                                        class="fa fa-save"></i>
                                    Enregistrer
                                </button>
                                <button type="button" class="btn btn-danger float-right"
                                        data-target="#test-email-configuration-modal" data-toggle="modal">
                                    <i class="fa fa-mail-bulk"></i> Tester la configuration des e-mails
                                </button>
                            </div>
                        </div>
                    </form>
                    @include('admin.modals.modal-test-email-configuration')


                </div>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/smtp-setting.js')}}"></script>
@stop
