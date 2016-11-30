
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
    <link rel="stylesheet" href="/css/health/history.css">
@endsection

@section('js')
    @@parent
    {{--set data--}}
    <script src="/js/Highcharts-4.2.5/js/highcharts.js"></script>
    <script src="/js/chart/utcTool.js"></script>
    <script src="/js/chart/line.js"></script>

    <script>
        $(function () {
           bodyLineChart();
        });


        function bodyLineChart(){
            //获取数据
            $.ajax({
                type: "get",
                url: 'bodyLineChartData',
                data: '',
                success: function (data) {
                    var series=[];
                    var weights=[];
                    var goals=[];

                    $.each(data,function(i,vo){
                        var day=dateToUtc(vo.date);
                        weights.push([day,parseFloat(vo.weight)]);
                        goals.push([day,parseFloat(vo.goal)]);

                    });

                    series.push({
                        name:'体重',
                        data:weights
                    });

                    series.push({
                        name:'目标体重',
                        data:goals
                    });

                    lineChart('history','体重统计',series);
                }
            });
        }

        function updateBodyInfo(){
            var height=$('.col-lg-1 #inputSuccess').eq(0).val();
            var weight=$('.col-lg-1 #inputSuccess').eq(1).val();
            var goal=$('.col-lg-1 #inputSuccess').eq(2).val();

            if(height==''||weight==''||goal==''){
                zeroModal.error('请输入全部数据');
                return;
            }

            //正则表达式，只能输入小数点和数字
            var pattern=/^\d+\.{0,1}\d*$/;
            if((!pattern.exec(height))||(!pattern.exec(weight))||(!pattern.exec(goal))){
                zeroModal.error('只能输入数字');
                return;
            }


            if(height>250||height<50){
                zeroModal.error('身高是不是填错了');
                return;
            }

            if(weight>300||weight<10||goal>300||goal<30){
                zeroModal.error('体重是不是填错了');
                return;
            }

            var url=getUrl(['bodyInfo',weight,height,goal]);
            $.ajax({
                type: "post",
                url: url,
                data: '',
                success: function (data) {
                    if(data=='true'){
                        zeroModal.success('设置成功');
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
        <div class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-md-3">
                    <div class="corner info pink">
                        <img src="/graphics/health/weight.svg">
                        <h2>{{$todayInfo->weight}}<small>kg</small></h2>
                        <h3>体重</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="corner info blue">
                        <img src="/graphics/health/weight.svg">
                        <h2>{{$todayInfo->goal}}<small>kg</small></h2>
                        <h3>目标体重</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="corner info green">
                        <img src="/graphics/health/height.svg">
                        <h2>{{$todayInfo->height}}</h2>
                        <h3>身高</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="corner info gray">
                        <img src="/graphics/health/bmi.svg">
                        <h2>{{$todayInfo->bmi}}</h2>
                        <h3>bmi</h3>
                    </div>
                </div>

            </div>






            <!--statistic-->

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="corner" style="background-color: white">
                        <div id="history" class="chart">
                        </div>
                    </div>
                </div>

            </div>



            <div class="row mt">
                <div class="col-md-12">
                    <div class="form-horizontal tasi-form">
                        <div class="form-group has-success">
                            <label class="col-sm-1 col-md-offset-2 control-label col-lg-1" >身高</label>
                            <div class="col-lg-1">
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>

                            <label class="col-sm-1 control-label col-lg-1" >体重</label>
                            <div class="col-lg-1">
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>

                            <label class="col-sm-1 control-label col-lg-1" >目标</label>
                            <div class="col-lg-1">
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>
                            <div class="col-md-1"><button  class="btn btn-theme"  onclick="updateBodyInfo()">保存</button></div>

                        </div>
                    </div>


                </div>
            </div>


            @foreach($history as $info)
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-12">
                                <p>{{$info->time}}记录</p>
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
                                            <h2>{{$info->weight}}<small>kg</small></h2>
                                        </div>
                                        <div class="col-md-offset-1 col-md-2">
                                            <h4>变化率</h4>
                                            <h2>
                                                @if($info->isIncrease)
                                                    <i class="fa fa-arrow-up"></i>
                                                @else
                                                    <i class="fa fa-arrow-down"></i>
                                                @endif
                                                {{$info->rate}}<small>%</small></h2>
                                        </div>
                                        <div class="col-md-offset-1 col-md-2">
                                            <h4>离目标体重</h4>
                                            <h2>{{$info->gap}}<small>kg</small></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>



    @endsection