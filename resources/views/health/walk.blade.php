@extends('template')

    @section('title')
        运动追踪器
    @endsection

    @section('go-top')
        /getWalkInfo#
    @endsection


    @section('select-page')
        setSelectMenu(0,1);
    @endsection



    @section('css')
        @@parent
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
        <link rel="stylesheet" href="/css/health/walk.css">
    @endsection

    @section('js')
        @@parent
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>

        {{--set data--}}
        <script src="assets/js/morris-conf.js"></script>
        <script src="/js/health/circle.js"></script>

        <script>
            $(function () {
                $('#complete').circliful();

            })


        </script>
    @endsection

    @section('main-content')
        <section class="wrapper site-min-height">
            <!--set goal-->
            <div class="row mt">
                <!--select day-->
                <div class="col-md-2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-theme03">今天</button>
                        <button type="button" class="btn btn-theme03 dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-5">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                        <input type="text" class="form-control" id="exampleInputPassword2" placeholder="30000步">
                    </div>

                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-theme">更改</button>
                </div>
            </div>

            <!--statistic-->
            <div id="morris">
                <div class="row">
                    <div class="col-md-12">


                        <!--data in number-->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="corner info pink">
                                    <img src="/graphics/health/step.svg">
                                    <h2>12345</h2>
                                    <h3>运动步数</h3>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="corner info blue">
                                    <img src="/graphics/health/distance.svg">
                                    <h2>2.4<small>km</small></h2>
                                    <h3>运动距离</h3>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="corner info green">
                                    <img src="/graphics/health/hot.svg">
                                    <h2>12233<small>cal</small></h2>
                                    <h3>消耗热量</h3>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="corner info gray">
                                    <img src="/graphics/health/time.svg">
                                    <h2>1<small>h</small>33<small>min</small></h2>
                                    <h3>运动时长</h3>
                                </div>
                            </div>

                        </div>

                        <div class="row mt">
                            <!--步数-->
                            <div class="col-lg-4">
                                <div class="content-panel">
                                    <div class="panel-body">
                                        <div id="hero-area" class="graph"></div>
                                    </div>
                                </div>
                            </div>

                            <!--距离-->
                            <div class="col-lg-4">
                                <div class="content-panel">
                                    <div class="panel-body">
                                        <div id="hero-area2" class="graph"></div>
                                    </div>
                                </div>
                            </div>

                            <!--卡路里-->
                            <div class="col-lg-4">
                                <div class="content-panel">
                                    <div class="panel-body">
                                        <div id="hero-bar" class="graph"></div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>



            <div class="row mt">

                <div class="col-md-1 col-md-offset-1">
                    <img class='detail' src="/graphics/health/walk.svg">
                </div>
                <div class="col-md-9 col-md-offset-1 detail">
                    <h3>13:11&nbsp;~&nbsp;13:10步行</h3>
                    <h1><b>1566</b><small>步</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>15</b><small>分钟</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>1.2</b>
                        <small>km</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>36</b><small>cal</small></h1>
                </div>

            </div>

            <div class="row">
                <div class="col-md-1 col-md-offset-1">
                    <div class="line">


                    </div>


                </div>

            </div>

            <div class="row mt">

                <div class="col-md-1 col-md-offset-1">
                    <img class='detail' src="/graphics/health/walk.svg">
                </div>
                <div class="col-md-9 col-md-offset-1 detail">
                    <h3>13:11&nbsp;~&nbsp;13:10步行</h3>
                    <h1><b>1566</b><small>步</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>15</b><small>分钟</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>1.2</b>
                        <small>km</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>36</b><small>cal</small></h1>
                </div>

            </div>

            <div class="row">
                <div class="col-md-1 col-md-offset-1">
                    <div class="line">


                    </div>


                </div>

            </div>

            <div class="row mt">

                <div class="col-md-1 col-md-offset-1">
                    <img class='detail' src="/graphics/health/walk.svg">
                </div>
                <div class="col-md-9 col-md-offset-1 detail">
                    <h3>13:11&nbsp;~&nbsp;13:10步行</h3>
                    <h1><b>1566</b><small>步</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>15</b><small>分钟</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>1.2</b>
                        <small>km</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>36</b><small>cal</small></h1>
                </div>

            </div>

        </section>
    @endsection