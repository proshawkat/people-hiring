@if($messages->count() == 0)
    <div class="conversation">


        <div class="body">
            <p>No conversations found</p>
        </div>
        <!-- end /.body -->

    </div>
@endif


@foreach($messages as $message)
    @if($message->from == Auth::guard('clients')->user()->id)
        <div class="d-flex justify-content-end mb-4">
            <div class="msg_cotainer_send">
                <span>{!!  $message->message  !!}</span>
                <span style="width: 300px;" class="msg_time_send">{{ \Carbon\Carbon::parse($message->created_at ?? '')->format('d/m/Y') }}</span>
            </div>
{{--            <div class="img_cont_msg">--}}
{{--                @if( Auth::guard('clients')->user()->avatar)--}}
{{--                    <img class="rounded-circle user_img_msg" src="{{ url('storage/client', Auth::guard('clients')->user()->avatar) }}" alt="">--}}
{{--                @else--}}
{{--                    <img class="rounded-circle user_img_msg" src="{{ asset('assets/img/client1.png') }}" alt="">--}}
{{--                @endif--}}
{{--            </div>--}}
        </div>
    @else
        <div class="d-flex justify-content-start mb-4">
{{--            <div class="img_cont_msg">--}}
{{--                @if( $admin->avatar)--}}
{{--                    <img src="{{ url('storage/user', $admin->avatar) }}" alt="" class="rounded-circle user_img_msg">--}}
{{--                @else--}}
{{--                    <img src="{{ asset('assets/img/client1.png') }}" alt="" class="rounded-circle user_img_msg">--}}
{{--                @endif--}}
{{--            </div>--}}
            <div class="msg_cotainer">
                <span>{!!  $message->message  !!}</span>
                <span style="width: 300px;" class="msg_time">{{ \Carbon\Carbon::parse($message->created_at ?? '')->format('d/m/Y') }}</span>
            </div>
        </div>
    @endif
@endforeach
