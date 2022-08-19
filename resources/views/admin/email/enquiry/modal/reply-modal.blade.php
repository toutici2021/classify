<div class="modal fade" id="enquiry-reply-modal" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <form action="{{route('send-enquiry-reply')}}" id="submit_enquiry-reply_email" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title">Répondre à: </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>To</label> <span class="required">*</span>
                        <input id="enquiry-reply-email-to" type="email" name="enquiryReplyTo" class="form-control"
                               placeholder="à">
                        <div id="error_enquiry-reply-email-to"></div>
                    </div>
                    <div class="form-group">
                        <label>Subject</label> <span class="required">*</span>
                        <input id="enquiry-reply-email-subject" type="text" name="enquiryReplySubject"
                               class="form-control"
                               placeholder="Sujet">
                        <div id="error_enquiry-reply-email-subject"></div>
                    </div>
                    <div class="form-group">
                        <label>Message</label> <span class="required">*</span>
                        <textarea name="enquiryReplyMessage" class="form-control message_content"
                                  id="enquiry-reply-email-message" cols="3" rows="3"
                                  placeholder="Message"></textarea>
                        <div id="error_enquiry-reply-email-message"></div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    <button type="Envoyez" id="" class="btn btn-danger">
                        <i class="fa fa-mail-bulk"></i> Réponse
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
