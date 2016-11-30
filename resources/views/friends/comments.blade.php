@extends('template')

    @section('select-page')
        setSelectMenu(2,9);
    @endsection

    @section('title')
        消息盒子
    @endsection

    @section('go-top')
        /followedFriends#
    @endsection

    @section('css')
        @@parent

    @endsection

    @section('js')
        @@parent

    @endsection

    @section('main-content')
        <div class="wrapper site-min-height">
            <div class="row">
                <div class="col-md-12 ds">
                    <h3>消息盒子</h3>

                    @foreach($messages as $message)
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="/graphics/icon/{{$message->sender}}.jpg" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p><a href="/profile/{{$message->sender}}">{{$message->sender}}</a><br/>
                                    <muted>Available</muted>
                                </p>
                            </div>

                            <p>{{$message->message}}</p>
                        </div>
                    @endforeach



                </div>
        </div>
    @endsection