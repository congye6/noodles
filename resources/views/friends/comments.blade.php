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
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">DIVYA MANIAN</a><br/>
                                <muted>Available</muted>
                            </p>
                        </div>

                        <p>水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水</p>
                    </div>

                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">DIVYA MANIAN</a><br/>
                                <muted>Available</muted>
                            </p>
                        </div>

                        <p>水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水</p>
                    </div>

                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">DIVYA MANIAN</a><br/>
                                <muted>Available</muted>
                            </p>
                        </div>

                        <p>水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水</p>
                    </div>

                    <div class="desc">

                        <div class="thumb">
                            <img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">DIVYA MANIAN</a><br/>
                                <muted>Available</muted>
                            </p>
                        </div>

                        <p>水水水水水水水水水水水水水水水水水水水水水水水水水水水水水水</p>

                        <button class="btn btn-theme">回复</button>
                    </div>

                </div>
        </div>
    @endsection