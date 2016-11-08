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
        <link href="style/mobiscroll.2.13.2.css" rel="stylesheet" />

    @endsection

    @section('js')
        @@parent
        <script src="script/mobiscroll.2.13.2.js"></script>
        <script>
            $(function () {
                if(!$('.row').length>0)
                    zeroModal.alert('没有正在进行的项目');

            })

            function activityDetail(id){
                zeroModal.alert(id);
            }


        </script>
    @endsection



    @section('main-content')
        <div class="wrapper site-min-height">



            <div class="activity">
                @foreach($activities as $activity)
                    <!--table-->
                        <div class="row mt" onclick="activityDetail({{$activity->id}}+'')">

                            <div class="col-md-offset-1 col-md-10 body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="head">
                                            <h4>{{$activity->description}}</h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 centered">
                                        <p class="title"><b>参与人数</b></p>
                                        <h1><b>{{$activity->id}}</b></h1>
                                    </div>

                                    <div class="col-lg-2 centered">
                                        <p class="title"><b>运动类型</b></p>
                                        <img src="graphics/activity/sports.svg" alt="追踪器">
                                    </div>

                                    <div class="col-lg-4 centered">
                                        <p class="title"><b>离竞赛开始还有</b></p>
                                        <h1><b>1</b><small>天</small><b>3</b><small>小时</small></h1>

                                    </div>

                                    <div class="col-lg-2 centered">
                                        <p class="title"><b>奖金</b></p>
                                        <h1><b>{{$activity->enterFee}}</b><small>金币</small></h1>
                                    </div>

                                </div>
                            </div>

                            {{--<div style="display:none;" id="id"></div>--}}

                        </div>



                        <!--table-->
                    @endforeach

            </div>

        </div>
    @endsection