@if($messages->count() == 0)
    <div class="conversation">


        <div class="body">
            <p>No conversations found</p>
        </div>
        <!-- end /.body -->

    </div>
@endif


@foreach($messages as $message)
    <div class="d-flex justify-content-start mb-4">
        <div class="img_cont_msg">
            <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
        </div>
        <div class="msg_cotainer">
            {!!  $message->message  !!}
            <span class="msg_time">8:40 AM, Today</span>
        </div>
    </div>
@endforeach
