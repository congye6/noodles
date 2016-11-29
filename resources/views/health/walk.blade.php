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
        <link rel="stylesheet" href="/css/health/walk.css">
        <link rel="stylesheet" href="/css/health/box.css">
    @endsection

    @section('js')
        @@parent

        <script src="/js/Highcharts-4.2.5/js/highcharts.js"></script>

        {{--set data--}}
        <script src="/js/chart/bar.js"></script>
        <script src="/js/chart/pie.js"></script>
        <script src="/js/chart/area.js"></script>
        <script src="/js/chart/utcTool.js"></script>
        <script src="/js/health/circle.js"></script>

        <script>
            $(function () {
                $('#complete').circliful();

                stepInMinute('today');
                stepRate('today');
                stepHistory();
            })

            function stepHistory(){
                //获取数据
                $.ajax({
                    type: "get",
                    url: 'stepHistory',
                    data: '',
                    success: function (data) {
                        var series=[];
                        var steps=[];

                        $.each(data,function(i,vo){
                            var day=dateToUtc(vo.date);

                            steps.push([day,parseInt(vo.step)]);

                        });

                        series.push({
                            name:'行走步数',
                            data:steps
                        });

                        area('history','历史行走步数',series);
                    }
                });
            }

            function stepRate(date){
                var url=getUrl(['getStepRate',date]);
                //获取数据
                $.ajax({
                    type: "get",
                    url: url,
                    data: '',
                    success: function (data) {
                        pieChart('行走步数分布','percent',['凌晨','早上','下午','晚上'],data);
                    }
                });
            }



            function stepInMinute(date){
                var url=getUrl(['getStepInMinute',date]);
                //获取数据
                $.ajax({
                    type: "get",
                    url:url,
                    data:'',
                    success: function (data) {
                        var series=[];
                        var steps=[];
                        var heats=[];

                        $.each(data,function(i,vo){
                            var time=timeToUtc(vo.time);

                            steps.push([time,parseInt(vo.step)]);
                            heats.push([time,parseInt(vo.heat)]);
                        });

                        series.push({
                            name:'行走步数',
                            data:steps
                        });

                        series.push({
                            name:'热量',
                            data:heats
                        });
                        bar('stepInMinute','步数分布图',series);
                    }
                });
            }

            function setGoal(){
                var goal=$('#goal').val();

                var url=getUrl(['walkGoal',goal]);


                $.ajax({
                    type: "post",
                    url: url,
                    data: '',
                    success: function (data) {
                        if(data=='true'){
                            zeroModal.alert('更改成功');
                            window.location.reload();//刷新当前页面
                        }else{
                            zeroModal.error('系统错误，请稍后再试');
                        }
                    }

                });
            }



        </script>
    @endsection

    @section('main-content')
        <section class="wrapper site-min-height">
            <!--set goal-->
            <div class="row mt">

                <div class="col-md-4 col-md-offset-7">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                        <input type="text" class="form-control" id="goal" placeholder="每日目标">
                    </div>

                </div>
                <div class="col-md-1">
                    <button class="btn btn-theme" onclick="setGoal()">更改</button>
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
                                    <h2>{{$stepTotal->step}}</h2>
                                    <h3>运动步数</h3>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="corner info blue">
                                    <img src="/graphics/health/distance.svg">
                                    <h2>{{$stepTotal->distance}}<small>km</small></h2>
                                    <h3>运动距离</h3>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="corner info green">
                                    <img src="/graphics/health/hot.svg">
                                    <h2>{{$stepTotal->heat}}<small>kcal</small></h2>
                                    <h3>消耗热量</h3>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="corner info gray">
                                    <img src="/graphics/health/time.svg">
                                    <h2>{{$stepTotal->hour}}<small>h</small>{{$stepTotal->minute}}<small>m</small></h2>
                                    <h3>运动时长</h3>
                                </div>
                            </div>

                        </div>

                        <div class="row mt">
                            <div class="col-lg-12">
                                <!--运动步数-->

                                <div class="corner" style="background-color: white">
                                    <div id="stepInMinute" class="chart">
                                    </div>
                                </div>




                            </div>
                        </div>

                        <div class="row mt">
                            <!--完成目标百分比-->
                            <div class="col-lg-4">
                                <div class="corner" style="background-color: white">
                                    <div id="complete"  data-dimension="250" data-text="{{$rate}}%" data-info="完成目标"
                                         data-width="30" data-fontsize="38" data-percent="{{$rate}}" data-fgcolor="#61a9dc" data-bgcolor="#eee">
                                    </div>
                                </div>
                            </div>

                            <!--每个时间段所占百分比-->
                            <div class="col-lg-4">
                                <div class="corner" style="background-color: white">
                                    <div id="percent" class="chart">
                                    </div>
                                </div>
                            </div>

                            <!--历史数据-->
                            <div class="col-lg-4">
                                <div class="corner" style="background-color: white">
                                    <div id="history" class="chart">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>


            @foreach($mainStep as $step)
                <div class="row mt">

                    <div class="col-md-1 col-md-offset-1">
                        <img class='detail' src="/graphics/health/walk.svg">
                    </div>
                    <div class="col-md-9 col-md-offset-1 detail">
                        <h3>{{$step->time}}步行</h3>
                        <h1><b>{{$step->step}}</b><small>步</small>&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$step->walkTime}}</b><small>分钟</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$step->distance}}</b>
                            <small>米</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$step->heat}}</b><small>卡</small></h1>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-1 col-md-offset-1">
                        <div class="line">


                        </div>


                    </div>

                </div>

            @endforeach



        </section>
    @endsection