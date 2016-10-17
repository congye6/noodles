@extends('template')

    @section('title')
        运动追踪器
    @endsection

    @section('go-top')
        /getWalkInfo#
    @endsection


    @section('select-page')
        {{--highlight main menu--}}
        $('li.sub-menu a').eq(0).addClass('active');
        {{--open sub menu--}}
        $('li.sub-menu ul').eq(0).css('display','block');
        {{--highlight sub menu--}}
        $('li.sub-menu ul li').eq(1).addClass('active');
    @endsection



    @section('css')
        @@parent
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    @endsection

    @section('js')
        @@parent
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>

        {{--set data--}}
        <script src="assets/js/morris-conf.js"></script>
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
                            <div class="col-md-12">
                                <div class="grey-panel pn">
                                    <div class="grey-header">
                                        <h5>运动情况</h5>
                                    </div>
                                    <p><img src="assets/img/ui-zac.jpg" class="img-circle" width="50"></p>
                                    <p><b>Zac Snider</b></p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="small mt">MEMBER SINCE</p>
                                            <p>2012</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="small mt">TOTAL SPEND</p>
                                            <p>$ 47,60</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="small mt">TOTAL SPEND</p>
                                            <p>$ 47,60</p>
                                        </div>
                                    </div>
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

        </section>
    @endsection