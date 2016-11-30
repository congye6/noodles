@extends('template')
    @section('select-page')
        setSelectMenu(2,8);
    @endsection

    @section('title')
        我的粉丝
    @endsection

    @section('go-top')
        /fans#
    @endsection

    @section('page-title')
        我的粉丝
    @endsection

@section('main-content')


    <div class="wrapper site-min-height">
        <div class="row">
            <div class="col-md-12 ds">
                <h3>我的粉丝</h3>
                @foreach($friends as $friend)
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="/graphics/icon/{{$friend->userName}}.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="/profile/{{$friend->userName}}">{{$friend->userName}}</a><br/>
                                <muted>Available</muted>
                            </p>
                        </div>



                    </div>
                @endforeach



            </div>

        </div>
    </div>

@endsection