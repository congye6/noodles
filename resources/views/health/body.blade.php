
@extends('template')
    @section('title')
        身体管理
    @endsection

    @section('select-page')
        setSelectMenu(0,2);
    @endsection

    @section('go-top')
    /getBodyInfo#
@endsection

@section('css')
    @@parent
    <link rel="stylesheet" href="/css/health/box.css">
    <link rel="stylesheet" href="/css/health/body.css">
@endsection

@section('js')
    @@parent
    {{--set data--}}
    <script src="/js/Highcharts-4.2.5/js/highcharts.js"></script>
@endsection



@section('main-content')
        <div class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-md-3">
                    <div class="corner info pink">
                        <img src="/graphics/health/weight.svg">
                        <h2>123<small>kg</small></h2>
                        <h3>体重</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="corner info blue">
                        <img src="/graphics/health/weight.svg">
                        <h2>123<small>kg</small></h2>
                        <h3>目标体重</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="corner info green">
                        <img src="/graphics/health/height.svg">
                        <h2>175.5<small>cm</small></h2>
                        <h3>身高</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="corner info gray">
                        <img src="/graphics/health/bmi.svg">
                        <h2>18.4</h2>
                        <h3>bmi</h3>
                    </div>
                </div>

            </div>



            <div class="row mt">
                <div class="col-md-12">
                    <form class="form-horizontal tasi-form" method="get">
                        <div class="form-group has-success">
                            <label class="col-sm-1 control-label col-lg-1" >身高</label>
                            <div class="col-lg-1">
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>

                            <label class="col-sm-1 control-label col-lg-1" >体重</label>
                            <div class="col-lg-1">
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>

                            <label class="col-sm-1 control-label col-lg-1" >目标体重</label>
                            <div class="col-lg-1">
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>

                            <div class="col-md-1"><button type="submit" class="btn btn-theme">保存</button></div>

                            <div class="col-md-4"><h4>根据身高计算,步长：64厘米</h4></div>

                        </div>
                    </form>


                </div>
            </div>


            <!--statistic-->
            <div id="morris">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row mt">
                            <!--睡眠-->
                            <div class="col-lg-12">
                                <div class="content-panel">
                                    <div class="panel-body">
                                        <div id="hero-area" class="graph"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>



            <div class="row mt">
                <div class="col-md-12">
                    <div class="row mt">
                        <div class="col-md-offset-2 col-md-12">
                            <p>2016-11-12 13:04记录</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-2 col-md-8">
                            <div class="blue history corner">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/graphics/health/weight.svg">
                                    </div>
                                    <div class="col-md-offset-1 col-md-2">
                                        <h4>体重</h4>
                                        <h2>55.5<small>kg</small></h2>
                                    </div>
                                    <div class="col-md-offset-1 col-md-2">
                                        <h4>变化率</h4>
                                        <h2><i class="fa fa-arrow-down"></i>3<small>%</small></h2>
                                    </div>
                                    <div class="col-md-offset-1 col-md-2">
                                        <h4>离目标体重差</h4>
                                        <h2>4.8<small>kg</small></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>




    @endsection