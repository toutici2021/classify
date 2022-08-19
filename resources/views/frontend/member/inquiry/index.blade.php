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
                        <div class="body-content nicescroll">
                            <div class="user-theme-block">
                                <div class="chatbox d-lg-flex">

                                    <!--============ Chat Aside ================-->
                                    <div class="chatbox-aside">
                                        <div class="chatbox-aside-header">
                                            <div class="chat-list-filter show">
                                                <div class="chat-filter-input-group">
                                                    <input type="text" class="form-control" id="chatContactFilter" placeholder="Chercher un message ">
                                                    <a href="#" class="chat-contact-filter-clear"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chatbox-aside-body">
                                            <div class="p-2 d-lg-none">
                                                <a href="#" class="btn btn-bizbangladesh-primary btn-block chat-contact-toggler">Plus de contact</a>
                                            </div>
                                            <div class="chatbox-contact" id="chatboxContact">
                                                <ul class="list-unstyled chatbox-contact-list">
                                                    @foreach($inquiries as $inquiryList)
                                                        <li class="chat-item {{$inquiryList->unseen_user == Auth::user()->id && $inquiryList->read_status == 'no' ? 'unread' : ''}} {{$inquiryList->id == $inquiry->id ? 'active' : '' }}  ">
                                                            <div class="d-flex">
                                                                <div class="mr-3">
                                                                    <div class="box-50">
                                                                        <img src="{{asset($inquiryList->userFrom->photo)}}" class="rounded-circle">
                                                                    </div>
                                                                </div>
                                                                <div class="w-100">
                                                                    <h6 class="mb-0 chat-title">{{$inquiryList->subject}}</h6>
                                                                    <time class="text-12 text-nowrap text-muted opacity-6">{{$inquiryList->userFrom->full_name}}  - {{$inquiryList->created_at->diffForhumans()}}</time>
                                                                </div>
                                                            </div>
                                                            <a href="{{route('memberInquiry', [$inquiryList->id])}}" class="chat-item-overlay"></a>
                                                        </li>
                                                    @endforeach
                                                </ul>

                                                {{$inquiries->links("pagination::bootstrap-4")}}

                                            </div>
                                        </div>
                                    </div>
                                    <!--============ End Chat Aside ================-->

                                    <!--============ Chat Main Footer ================-->
                                    <div class="chatbox-main">
                                        @if($inquiry)
                                            <div class="chatbox-main-header bg-white">
                                                <div class="d-md-flex">
                                                    <div class="mr-3 d-md-down-none">
                                                        <div class="box-60">
                                                            <img src="{{asset($inquiry->userFrom->photo)}}" class="img-fluid rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="text-strong">{{$inquiry->subject}}</h6>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <h6 class="text-muted text-15 mb-1"><i class="fa fa-user text-business-primary mr-1"></i> {{$inquiry->userFrom->full_name}}  - {{$inquiry->created_at->diffForhumans()}}</h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chatbox-main-body autoscroll-bottom">
                                                <div class="incomming">
                                                    <div class="msg-pro box-30 rounded-circle">
                                                        <img src="{{asset($inquiry->userFrom->photo)}}" class="img-fluid">
                                                    </div>
                                                    <div class="msg-content"> @php echo $inquiry->message; @endphp </div>
                                                </div>

                                                @foreach($inquiry->replies as $key => $reply)
                                                    <div class="{{auth::user()->id == $reply->user_from ? 'outgoing' : ''}} {{auth::user()->id == $reply->user_to ? 'incomming' : ''}}">
                                                        <div class="msg-pro box-30 rounded-circle">
                                                            <img src="{{asset($reply->userFrom->photo)}}" class="img-fluid">
                                                        </div>
                                                        <div class="msg-content">
                                                            {{$reply->message}}
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                            <!--============ Chat Main Footer ================-->
                                            <div class="chatbox-main-footer">
                                                <form  method="post" action="{{route('memberReplyStoreInquiry', [$inquiry->id])}}">
                                                    @csrf
                                                    <div class="new-chat bg-white p-3">
                                                        <div class="form-group">
                                                            <textarea name="message" placeholder="Reply message" required class="form-control form-control-sm no-focus" rows="3"></textarea>
                                                        </div>
                                                        <div class="text-right">
                                                            <button type="submit" class="btn btn-brand-secondary"> <i class="fa fa-send-o"></i> Send</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        @else
                                            <div class="user-theme-block">
                                            <div class="min-vh-75">
                                                <h3 class="text-center">Inquiry Not Found</h3>
                                            </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



    </main>
@endsection
@section('css')
<style>
    /*============== Chatbox ===============*/
    /*================== Chat Box ===============*/
    .chatbox-aside {
        border: 1px solid #eeeeee;
    }

    .chatbox-main {
        background-color: #f1f9f9;
        height: 85vh;
    }

    @media screen and (min-width: 992px) {
        .chatbox-aside {
            width: 100%;
            max-width: 260px;
            height: 85vh;
        }

        .chatbox-main {
            width: 100%;
            max-width: calc(100% - 260px);
        }
    }


    /*======= Chatbox aside head ========*/
    .chatbox-aside-header {
        border-bottom: 1px solid #eeeeee;
    }

    /*== Chatbox filter ========*/
    .chat-list-filter {
        position: relative;
        padding: .5rem 1rem;
        background-color: #f5f5f5;
    }

    .chat-filter-input-group {
        position: relative;
    }

    .chat-filter-input-group input{
        min-width: 60px;
        padding-left: 1rem;
        padding-right: 30px;
        color: #888888;
        font-weight: 500;
    }
    .chat-filter-input-group input:focus {
        box-shadow: none;
        border-color: var(--fruit-green);
    }

    .chat-filter-input-group .chat-contact-filter-clear {
        position: absolute;
        right: 4px;
        top: 50%;
        transform: translateY(-50%);
        color: #888888;
        padding: 4px 8px;
    }



    /*====== Chat Navigate ======*/
    .chat-navigate-menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .chat-navigate-menu .chat-navigate-item {
        margin-right: 1rem;
    }

    .chat-navigate-link {
        display: block;
        padding: .5rem 0;
        font-weight: 500;
        color: #aaaaaa;
        position: relative;
    }

    .chat-navigate-item.active .chat-navigate-link {
        color: var(--brand-primary);
        font-weight: 600;
    }

    .new-chat-count {
        display: inline-block;
        background-color: var(--brand-tertiary);
        color: #ffffff;
        font-size: 13px;
        font-weight: 400;
        position: absolute;
        padding: 0 3px;
        line-height: 100%;
        border-radius: 100%;
        top: 8px;
        right: -4px;
    }


    /*======== Chatbox-aside-body ==========*/
    .chatbox-aside-body {
        max-height: 100%;
        overflow: auto;
    }

    .chat-item {
        position: relative;
        padding: .75rem;
        border-bottom: 1px solid #f0f0f0;
    }

    .chat-item:last-child {
        border-bottom: none;
    }

    .chat-item-overlay {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
    }

    .chat-item.active {
        background-color: #F1F9F9;
    }

    .chat-title {
        font-size: 16px !important;
    }

    .chat-item.unread .chat-title {
        font-weight: 600;
    }

    .msg-unread-count {
        display: inline-block;
        padding: 2px 4px;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        background-color: var(--primary);
        opacity: .6;
        font-size: 12px;
        color: #ffffff;
        font-weight: 400;
    }

    /*===== Chat Contact List =====*/

    @media screen and (max-width: 991px) {
        .chatbox-contact {
            max-height: 300px;
            overflow: auto;
            display: none;
        }

        .chatbox-contact.show {
            display: block;
        }

    }




    /*======== Chatbox Main ===========*/
    .chatbox-main-header {
        padding: .5rem 1rem;
        border-bottom: 1px solid #eeeeee;
    }
    .chatbox-main-body {
        border-bottom: 1px solid #dddddd;
        overflow: auto;
        padding: 1rem;
    }

    .chatbox-main-footer {
        padding: 1rem;
    }


    /*=========== Msg Body ==============*/
    .outgoing, .incomming {
        margin-bottom: 1.5rem;
        position: relative;
        padding-top: .5rem;
    }

    .incomming {
        padding-left: 2.75rem;
    }

    .outgoing {
        text-align: right;
        padding-right: 2.75rem;
    }

    .incomming .msg-pro {
        position: absolute;
        top: 0;
        left: 0;
    }

    .outgoing .msg-pro {
        position: absolute;
        top: 0;
        right: 0;
    }
    .msg-pro {
        box-shadow: 0 1px 2px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    }
    .msg-content {
        width: auto;
        max-width: calc(100% - 1.5rem);
        position: relative;
        background-color: #ffffff;
        border-color: #ffffff;
        padding: .75rem;
        display: inline-block;
        text-align: left;
        box-shadow: 2px 2px 3px rgba(100,100,100, .2);
        -webkit-border-radius: 0 8px 8px 8px;
        border-radius: 0 8px 8px 8px;
    }
    .msg-content:after {
        content: '';
        position: absolute;
        border-top: 13px solid;
        border-color: inherit;
        border-left: 13px solid transparent;
        right: 100%;
        top: 0;
    }
    .outgoing .msg-content {
        background-color: #DCF8C6;
        border-color: #DCF8C6;
        box-shadow: -2px 2px 3px rgba(100,100,100, .2);
        -webkit-border-radius: 8px 0 8px 8px;
        border-radius: 8px 0 8px 8px;
    }
    .outgoing .msg-content:after {
        left: 100%;
        top: 0;
        transform: rotateY(-180deg);
    }

    .msg-content img {
        width: auto;
        max-width: 100%;
        height: auto;
    }

    @media screen and (min-width: 992px) {
        .msg-content img {
            width: auto;
            max-width: 360px;
            height: auto;
        }
    }


    /*=============== Attach File =============*/
    .attach-file{
        display: inline-block;
        width: auto;
        height: auto;
        cursor: pointer;
    }

    .attach-file .attach-file-input {
        height: 0;
        width: 0;
        overflow: hidden;
    }

    .attach-file input{
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        outline: none;
    }

    .attach-file label {
        margin: 0;
        cursor: pointer;
    }


    /*============ Biz Card ===============*/
    .biz-card{
        background-color: #fff;
        /*box-shadow: 0 1.5px 3px 0 rgba(0,0,0,0.16),0 1.5px 7px 0 rgba(0,0,0,0.12);*/
        border-radius: .25rem;
        border: 1px solid var(--default-border);
    }


    .theme-block {
        background-color: #ffffff;
        border: 1px solid var(--default-border);
        padding: 1rem;
    }

    @media screen and (min-width: 992px) {
        .theme-block {
            padding: 1.25rem;
        }
    }
</style>
@endsection
@section('js')
    <script>
        let windowWidth = $(window).width();
        if (windowWidth >= 992) {
            // ========== Auto Fit Height ============
            $('.chatbox-aside').each(function () {
                let headerHeight = parseFloat($(this).find('.chatbox-aside-header').outerHeight());
                $(this).find('.chatbox-aside-body').css({
                    'height': 'calc(100% - ' + headerHeight + 'px)',
                });
            });
        }

        // =========== Body Media Auto Fit =============
        $('.chatbox-main').each(function () {
            let headerHeight = parseFloat($(this).find('.chatbox-main-header').outerHeight());
            let footerHeight = parseFloat($(this).find('.chatbox-main-footer').outerHeight());

            let releaseHeight = parseFloat(headerHeight + footerHeight);

            $(this).find('.chatbox-main-body').css({
                'height': 'calc(100% - ' + releaseHeight + 'px)',
            });
        });


        // ======== Auto Scroll Bottom Function ================
        $.fn.autoscrollBottom = function () {
            let totalHeight = 0;
            $(this).children().each(function () {
                totalHeight = parseFloat(totalHeight + $(this).outerHeight(true));
            });
            $(this).scrollTop(totalHeight);
        };

        // ========= Call Auto Scroll bottom Function ===============
        $('.autoscroll-bottom').autoscrollBottom();
        $('.send-msg').on('click', function () {
            $('.autoscroll-bottom').autoscrollBottom();
        });


        // ============== Attach File ================
        $(".attach-file").find('input').on("change", function () {
            let fileName = $(this).val().split("\\").pop();
            $(this).parents('.attach-file').find("label").addClass("selected").find('span').html(fileName);
        });

        // ======================= Chat Box on responsive ================================
        if (windowWidth < 992) {
            $('.chat-contact-toggler').on('click', function (e) {
                e.preventDefault();
                $('#chatboxContact').stop().toggleClass('show');
            });

        };



        $('#chatContactFilter').on('keyup', function () {
            let value = $(this).val().toLowerCase();
            $('#chatboxContact').addClass('show');
            $("#chatboxContact .chatbox-contact-list > li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });


        $('.chat-contact-filter-clear').on('click', function (e) {
            e.preventDefault();
            $('#chatContactFilter').val('');
            $("#chatboxContact .chatbox-contact-list > li").filter(function () {
                $(this).show();
            });
        });
    </script>
@endsection
