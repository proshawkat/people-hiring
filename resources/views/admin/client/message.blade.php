@if($messages->count() == 0)
    <div class="conversation">


        <div class="body">
            <p>No conversations found</p>
        </div>
        <!-- end /.body -->

    </div>
@endif


@foreach($messages as $message)
    @if($message->from == Auth::id())
        <div class="d-flex justify-content-end mb-4">
            <div class="msg_cotainer_send">
                {!!  $message->message  !!}
                <span class="msg_time_send">8:55 AM, Today</span>
            </div>
            <div class="img_cont_msg">
                @if( Auth::user()->avatar)
                    <img class="rounded-circle user_img_msg" src="{{ url('storage/user/', Auth::user()->avatar) }}" alt="">
                @else
                    <img class="rounded-circle user_img_msg" src="{{ asset('assets/img/client1.png') }}" alt="">
                @endif
            </div>
        </div>
    @else
        <div class="d-flex justify-content-start mb-4">
            <div class="img_cont_msg">
                @if( $message->client->avatar)
                    <img src="{{ url('storage/client/', $message->client->avatar) }}" alt="" class="rounded-circle user_img_msg">
                @else
                    <img src="{{ asset('assets/img/client1.png') }}" alt="" class="rounded-circle user_img_msg">
                @endif
            </div>
            <div class="msg_cotainer">
                {!!  $message->message  !!}
                <span class="msg_time">8:40 AM, Today</span>
            </div>
        </div>
    @endif
@endforeach
