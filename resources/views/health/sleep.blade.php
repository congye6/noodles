
@extends('template')
    @section('title')
        睡眠助手
    @endsection

    @section('go-top')
        /getSleepInfo#
    @endsection

    @section('select-page')
        setSelectMenu(0,3);
    @endsection

    @section('css')
        @@parent
        <link rel="stylesheet" href="/css/health/box.css">
        <link rel="stylesheet" href="/css/health/history.css">
    @endsection

    @section('js')
        @@parent
        <script src="/js/Highcharts-4.2.5/js/highcharts.js"></script>
        <script src="/js/chart/pie.js"></script>

        <script>
            $(function () {
                deepSleepRate();
            });

            function deepSleepRate(){
                //获取数据
                $.ajax({
                    type: "get",
                    url: 'deepSleepRate',
                    data: '',
                    success: function (data) {
                        var sleep=[parseInt(data.deepSleep),parseInt(data.lightSleep)];
                        pieChart('睡眠程度比例','rate',['深度睡眠','浅睡眠'],sleep);
                    }
                });
            }
        </script>
    @endsection


    @section('main-content')
        <section class="wrapper site-min-height">

            <div class="row mt">
                <div class="col-md-3">
                    <div class="corner info pink">
                        <img src="/graphics/health/sleep.svg">
                        <h2>{{$todayInfo->sleepHour}}<small>h</small>{{$todayInfo->sleepMinute}}<small>m</small></h2>
                        <h3>全天睡眠</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="corner info blue">
                        <img src="/graphics/health/deadSleep.svg">
                        <h2>{{$todayInfo->deepSleepHour}}<small>h</small>{{$todayInfo->deepSleepMinute}}<small>m</small></h2>
                        <h3>深睡</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="corner info green">
                        <img src="/graphics/health/lightSleep.svg">
                        <h2>{{$todayInfo->lightSleepHour}}<small>h</small>{{$todayInfo->lightSleepMinute}}<small>m</small></h2>
                        <h3>浅睡</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="corner info gray">
                        <img src="/graphics/health/goToBed.svg">
                        <h2>{{$todayInfo->bedTime}}</h2>
                        <h3>昨晚入睡</h3>
                    </div>
                </div>

            </div>



            <div class="row mt">
                <!--睡眠程度比例-->
                <div class="col-lg-3">
                    <div class="corner" style="background-color: white">
                        <div id="rate" class="chart">
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="corner" style="background-color: white">
                        <div id="history" class="chart">
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-12">
                            <h4>2016-12-11</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div class="green history corner">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/graphics/health/sleep.svg">
                                    </div>
                                    <div class="col-md-offset-1 col-md-2">
                                        <h4>全天睡眠</h4>
                                        <h2>8<small>h</small>11<small>m</small></h2>
                                    </div>
                                    <div class="col-md-2">
                                        <h4>深睡</h4>
                                        <h2>2<small>h</small>11<small>m</small></h2>
                                    </div>
                                    <div class="col-md-2">
                                        <h4>深睡比例</h4>
                                        <h2>25<small>%</small></h2>
                                    </div>
                                    <div class="col-md-2">
                                        <h4>浅睡</h4>
                                        <h2>6<small>h</small>0<small>m</small></h2>
                                    </div>
                                    <div class="col-md-2">
                                        <h4>昨晚入睡</h4>
                                        <h2>23:45</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-12">
                            <h4>2016-12-11</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div class="green history corner">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/graphics/health/sleep.svg">
                                    </div>
                                    <div class="col-md-offset-1 col-md-2">
                                        <h4>全天睡眠</h4>
                                        <h2>8<small>h</small>11<small>m</small></h2>
                                    </div>
                                    <div class="col-md-2">
                                        <h4>深睡</h4>
                                        <h2>2<small>h</small>11<small>m</small></h2>
                                    </div>
                                    <div class="col-md-2">
                                        <h4>深睡比例</h4>
                                        <h2>25<small>%</small></h2>
                                    </div>
                                    <div class="col-md-2">
                                        <h4>浅睡</h4>
                                        <h2>6<small>h</small>0<small>m</small></h2>
                                    </div>
                                    <div class="col-md-2">
                                        <h4>昨晚入睡</h4>
                                        <h2>23:45</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    @endsection