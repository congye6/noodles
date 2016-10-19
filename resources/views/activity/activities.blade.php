@extends('template')

    @section('select-page')
        setSelectMenu(1,5);
    @endsection

    @section('title')
        竞技场
    @endsection

    @section('go-top')
        /activities#
    @endsection

    @section('css')
        @@parent
        <link rel="stylesheet" href="css/activity/activities.css">
    @endsection

    @section('js')
        @@parent

    @endsection



    @section('main-content')
        <div class="wrapper site-min-height">
            <div class="activity">
                <div class="row mt">

                    <div class="col-md-offset-1 col-md-10 body">
                        <div class="row ">
                            <div class="col-lg-2">
                                <div class="head">
                                    <h4>hhhh</h4>
                                </div>
                            </div>

                            <div class="col-lg-2 centered">
                                <p class="title"><b>参与人数</b></p>
                                <h1><b>2</b></h1>
                            </div>

                        </div>



                    </div>

                </div>

            </div>

        </div>
    @endsection