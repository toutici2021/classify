<div class="modal fade" id="test-email-configuration-modal" data-backdrop="static">
    <div class="modal-dialog">
        <form action="{{route('sendTestMail')}}" id="submit_test_email" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title">Tester la configuration de la messagerie</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>A</label> <span class="required">*</span>
                        <input id="test-email-to" type="email" name="to" class="form-control" placeholder="To">
                        <div id="error_test-email-to"></div>
                    </div>
                    <div class="form-group">
                        <label>Subject</label> <span class="required">*</span>
                        <input id="test-email-subject" type="text" name="subject" class="form-control"
                               placeholder="Subject">
                        <div id="error_test-email-subject"></div>
                    </div>
                    <div class="form-group">
                        <label>Message</label> <span class="required">*</span>
                        <textarea name="message" class="form-control" id="test-email-message" cols="3" rows="3"
                                  placeholder="Message"></textarea>
                        <div id="error_test-email-message"></div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="" class="btn btn-danger">
                        <i class="fa fa-mail-bulk"></i> Envoyer
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
