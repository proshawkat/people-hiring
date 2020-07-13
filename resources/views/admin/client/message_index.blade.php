@extends('admin.layouts.app')

@section('content')
    <style>
        .chat{
            margin-top: auto;
            margin-bottom: auto;
        }
        .card{
            height: 750px;
            border-radius: 15px !important;
            background-color: rgb(4, 0, 0) !important;
        }
        .contacts_body{
            padding:  0.75rem 0 !important;
            overflow-y: auto;
            white-space: nowrap;
        }
        .msg_card_body{
            overflow-y: auto;
        }
        .card-header{
            border-radius: 15px 15px 0 0 !important;
            border-bottom: 0 !important;
        }
        .card-footer{
            border-radius: 0 0 15px 15px !important;
            border-top: 0 !important;
        }
        .container{
            align-content: center;
        }
        .search{
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color:white !important;
        }
        .search:focus{
            box-shadow:none !important;
            outline:0px !important;
        }
        .type_msg{
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color:white !important;
            height: 60px !important;
            overflow-y: auto;
        }
        .type_msg:focus{
            box-shadow:none !important;
            outline:0px !important;
        }
        .attach_btn{
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }
        .send_btn{
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }
        .search_btn{
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }
        .contacts{
            list-style: none;
            padding: 0;
        }
        .contacts li{
            width: 100% !important;
            padding: 5px 10px;
            margin-bottom: 15px !important;
        }
        .active{
            background-color: rgba(0,0,0,0.3);
        }
        .user_img{
            height: 70px;
            width: 70px;
            border:1.5px solid #f5f6fa;

        }
        .user_img_msg{
            height: 40px;
            width: 40px;
            border:1.5px solid #f5f6fa;

        }
        .img_cont{
            position: relative;
            height: 70px;
            width: 70px;
        }
        .img_cont_msg{
            height: 40px;
            width: 40px;
        }
        .online_icon{
            position: absolute;
            height: 15px;
            width:15px;
            background-color: #4cd137;
            border-radius: 50%;
            bottom: 0.2em;
            right: 0.4em;
            border:1.5px solid white;
        }
        .offline{
            background-color: #c23616 !important;
        }
        .user_info{
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }
        .video_cam{
            margin-left: 50px;
            margin-top: 5px;
        }
        .video_cam span{
            color: white;
            font-size: 20px;
            cursor: pointer;
            margin-right: 20px;
        }
        .msg_cotainer{
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 25px;
            background-color: #82ccdd;
            padding: 10px;
            position: relative;
        }
        .msg_cotainer_send{
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            border-radius: 25px;
            background-color: #78e08f;
            padding: 10px;
            position: relative;
        }
        .msg_time{
            position: absolute;
            left: 0;
            bottom: -15px;
            color: rgba(255,255,255,0.5);
            font-size: 10px;
        }
        .msg_time_send{
            position: absolute;
            right:0;
            bottom: -15px;
            color: rgba(255,255,255,0.5);
            font-size: 10px;
        }
        .msg_head{
            position: relative;
        }
        #action_menu_btn{
            position: absolute;
            right: 10px;
            top: 10px;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }
        .action_menu{
            z-index: 1;
            position: absolute;
            padding: 15px 0;
            background-color: rgba(0,0,0,0.5);
            color: white;
            border-radius: 15px;
            top: 30px;
            right: 15px;
            display: none;
        }
        .action_menu ul{
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .action_menu ul li{
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 5px;
        }
        .action_menu ul li i{
            padding-right: 10px;

        }
        .action_menu ul li:hover{
            cursor: pointer;
            background-color: rgba(0,0,0,0.2);
        }
        @media(max-width: 576px){
            .contacts_card{
                margin-bottom: 15px !important;
            }
        }
    </style>
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Overview</span>
            <h3 class="page-title">Client Tables</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-6 col-md-6 offset-3">
            <div class="card">
            <div class="card-header msg_head">
                <div class="d-flex bd-highlight">
                    <div class="img_cont">
                        @if( $clients->avatar)
                            <img src="{{ url('storage/client/', $clients->avatar) }}" class="rounded-circle user_img"  alt="">
                        @else
                            <img src="{{ asset('assets/img/client1.png') }}" class="rounded-circle user_img" alt="">
                        @endif
{{--                        <span class="online_icon"></span>--}}
                    </div>
                    <div class="user_info">
                        <span>Chat with {{ $clients->name }}</span>
                    </div>
                    <div class="video_cam">
                        <span><i class="fas fa-video"></i></span>
                        <span><i class="fas fa-phone"></i></span>
                    </div>
                </div>
                <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                <div class="action_menu">
                    <ul>
                        <li><i class="fas fa-user-circle"></i> View profile</li>
                        <li><i class="fas fa-users"></i> Add to close friends</li>
                        <li><i class="fas fa-plus"></i> Add to group</li>
                        <li><i class="fas fa-ban"></i> Block</li>
                    </ul>
                </div>
            </div>
            <div class="card-body msg_card_body chat_area--conversation">
                @include('admin.client.message')
            </div>
            <div class="card-footer">
                <form action="#" enctype="multipart/form-data" method="post">
                    <input type="text" hidden id="user_id" value="{{ $clients->id }}">
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                        </div>
                        <textarea id="message" name="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
                        <div id="reply" class="input-group-append">
                            <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection
@section('ad_js')
    <script>
        setInterval(function () {
            getMessages($('#user_id').val())
        }, 2000);

        function getMessages(userId) {
            $.ajax({
                url: '{{ url('/admin/client/message/get') }}',
                type: 'POST',
                data: {
                    'user_id': userId,
                    '_token': '{{ csrf_token() }}'
                },
                success: function (data) {
                    $('.chat_area--conversation').html(data)
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
        $('#reply').click(function () {
            var message = $('#message').val();
            console.log('hello')
            $.ajax({
                url: '{{ url('/admin/client/message/send') }}',
                type: 'POST',
                data: {
                    'to': $('#user_id').val(),
                    'message': message,
                    '_token': '{{ csrf_token() }}'
                },
                success: function (data) {
                    if (data == 'success') {
                        $('#message').val('');
                        $.ajax({
                            url: '{{ url('/admin/client/message/get') }}',
                            type: 'POST',
                            data: {
                                'userId': $('#user_id').val(),
                                '_token': '{{ csrf_token() }}'
                            },
                            success: function (data) {
                                $('.chat_area--conversation').html(data)
                            },
                            error: function (data) {
                                console.log(data.responseText);
                            }
                        });
                    }
                }
            })
        });
    </script>
@endsection
