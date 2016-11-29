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
        <script>
            $(function () {
                if(!$('.row').length>0)
                    zeroModal.alert('没有正在进行的项目');

            })

            function activityDetail(id){
                var url=getUrl(['activityDetail',id]);
                window.location.href=url;
            }


        </script>
    @endsection



    @section('main-content')
        <div class="wrapper site-min-height">



            <div class="activity">
                @foreach($activities as $activityVO)
                    <!--table-->
                        <div class="row mt" onclick="activityDetail({{$activityVO->activity->id}}+'')">

                            <div class="col-md-offset-1 col-md-10 body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="head">
                                            <h4>{{$activityVO->activity->description}}</h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 centered">
                                        <p class="title"><b>参与人数</b></p>
                                        <h1><b>{{$activityVO->partnerCount}}</b></h1>
                                    </div>

                                    <div class="col-lg-2 centered">
                                        <p class="title"><b>运动类型</b></p>
                                        <img src="graphics/activity/sports.svg" alt="追踪器">
                                    </div>

                                    <div class="col-lg-4 centered">
                                        <p class="title"><b>离竞赛{{$activityVO->isBegin}}还有</b></p>
                                        <h1><b>{{$activityVO->day}}</b><small>天</small><b>{{$activityVO->hour}}</b><small>小时</small></h1>

                                    </div>

                                    <div class="col-lg-2 centered">
                                        <p class="title"><b>奖金</b></p>
                                        <h1><b>{{$activityVO->activity->enterFee*$activityVO->partnerCount}}</b><small>金币</small></h1>
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