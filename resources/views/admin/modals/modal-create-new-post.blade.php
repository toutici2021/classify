<div class="modal fade" id="modal-post" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <form action="{{route('storePage')}}" id="submit_test_email" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title">{{__('default.create_new_page')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>{{__('default.page_title')}}</label>
                        <input id="test-email-to" type="text" name="title" class="form-control"
                               placeholder="{{__('default.page_title')}}">
                        <div id="error_title"></div>
                    </div>
                    <div class="form-group">
                        <label>{{__('default.page_content')}}</label>
                        <textarea class="form-control post_content" name="post_content" id="" cols="30"
                                  rows="10"></textarea>
                        <div id="error_post_content"></div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="show_in_header_menu" class="checkbox-inline">
                                <input type="checkbox" value="1" id="show_in_header_menu" name="show_in_header_menu">
                                {{__('default.show_in_header_menu')}}
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="show_in_footer_menu" class="checkbox-inline">
                                <input type="checkbox" value="1" id="show_in_footer_menu" name="show_in_footer_menu">
                                {{__('default.show_in_footer_menu')}}
                            </label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('default.cancel')}}</button>
                    <button type="submit" id="" class="btn btn-danger">
                        <i class="fa fa-save"></i> {{__('default.save')}}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
