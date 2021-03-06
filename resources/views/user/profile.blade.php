

    @extends('template')
    <!--**********************************************************************************************************************************************************
      MAIN CONTENT
      ***********************************************************************************************************************************************************-->
    {{--main content start--}}
        @section('title')
            {{$userName}}的个人主页
        @endsection

        @section('select-page')
            $('li.mt a').addClass('active');
        @endsection

        @section('go-top')
            /#
        @endsection

        @section('css')
            @@parent
            <script src="/assets/js/chart-master/Chart.js"></script>
            <link rel="stylesheet" type="text/css" href="/assets/lineicons/style.css">
            <link rel="stylesheet" href="/css/user/profile.css">


            <link href="/css/cropper.min.css" rel="stylesheet">
            <link href="/css/sitelogo.css" rel="stylesheet">


        @endsection

        @section('js')
            @@parent
            <script src="/js/cropper.min.js"></script>
            <script src="/js/sitelogo.js"></script>

            <script>
                function sendMessage() {
                    var message=$('input.form-control.placeholder-no-fix').val();
                    if(message==''){
                        zeroModal.error('请输入您的消息');
                        return;
                    }

                    var url=getUrl(['message','{{$userName}}',message]);

                    $.ajax({
                        type: "post",
                        url: url,
                        data: '',
                        success: function (data) {
                            if(data=='true'){
                                zeroModal.success('发送成功');
                                window.location.reload();//刷新当前页面
                            }else{
                                zeroModal.error(data);
                            }
                        }

                    });
                }

                function follow(){

                    var url=getUrl(['followedFriend','{{$userName}}']);

                    $.ajax({
                        type: "post",
                        url: url,
                        data: '',
                        success: function (data) {
                            if(data=='true'){
                                zeroModal.success('关注成功');
                                window.location.reload();//刷新当前页面
                            }else{
                                zeroModal.error(data);
                            }
                        }

                    });
                }

            </script>

        @endsection

        @section('main-content')
        <section class="wrapper">

            {{--头像--}}
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="tile-light p-5 m-b-15 showback">
                        <div class="cover p-relative" id="crop-avatar">
                            <img src="/assets/img/cover-bg.jpg" class="w-100" alt="">
                            @if($userName==$_COOKIE['userName'])<div class="avatar-view" title="">@endif
                                    <img class="profile-pic" src="/graphics/icon/{{$userName}}.jpg" alt="">
                                @if($userName==$_COOKIE['userName'])</div>@endif
                            @if($userName!=$_COOKIE['userName'])
                                <div class="profile-btn">
                                    <button class="btn btn-alt btn-sm" data-toggle="modal" href="#myModal"><i class="icon-bubble"></i> <span>Message</span></button>
                                    <button class="btn btn-alt btn-sm" onclick="follow()"><i class="icon-user-2" ></i> <span>Follow</span></button>
                                </div>
                            @endif
                        </div>
                        <div class="p-5 m-t-15">
                           不用写个性签名了，谢谢
                        </div>
                    </div>

                </div>
            </div>

            {{--上传头像--}}
            <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form class="avatar-form" action="/icon"  enctype="multipart/form-data" method="post">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal" type="button">&times;</button>
                                <h4 class="modal-title" id="avatar-modal-label">Change Logo Picture</h4>
                            </div>
                            <div class="modal-body">
                                <div class="avatar-body">
                                    <div class="avatar-upload">
                                        <input class="avatar-src" name="avatar_src" type="hidden">
                                        <input class="avatar-data" name="avatar_data" type="hidden">
                                        <label for="avatarInput">图片上传</label>
                                        <input class="avatar-input" id="avatarInput" name="avatar_file" type="file"></div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="avatar-wrapper"></div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="avatar-preview preview-lg"></div>
                                            <div class="avatar-preview preview-md"></div>
                                            <div class="avatar-preview preview-sm"></div>
                                        </div>
                                    </div>
                                    <div class="row avatar-btns">
                                        <div class="col-md-9">
                                            <div class="btn-group">
                                                <button class="btn" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees"><i class="fa fa-undo"></i> 向左旋转</button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees"><i class="fa fa-repeat"></i> 向右旋转</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-success btn-block avatar-save" type="submit"><i class="fa fa-save"></i> 保存修改</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
            {{--上传头像--}}

            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">发送消息</h4>
                        </div>
                        <div class="modal-body">
                            <p>请输入您的消息</p>
                            <input type="text" name="email" placeholder="Hello World" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-theme" type="button" onclick="sendMessage()">发送</button>
                            <button data-dismiss="modal" class="btn btn-default" type="button">取消</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox">
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_calendar"></span>
                                <h3>{{$userInfo->walkDays}}<small>天</small></h3>
                            </div>
                            <p>累计运动{{$userInfo->walkDays}}天!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_fire"></span>
                                <h3>{{$heat}}<small>千卡</small></h3>
                            </div>
                            <p>累计消耗热量{{$heat}}千卡</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_clock"></span>
                                <h3>{{$activityCount}}</h3>
                            </div>
                            <p>参加竞赛{{$activityCount}}次</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_data"></span>
                                <h3>{{$userInfo->coins}}</h3>
                            </div>
                            <p>剩余{{$userInfo->coins}}金币</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_heart"></span>
                                <h3>{{$fansCount}}</h3>
                            </div>
                            <p>{{$fansCount}}个粉丝关注了
                                @if($userName==$_COOKIE['userName'])
                                    你
                                @else
                                    ta
                                @endif

                            </p>
                        </div>

                    </div><!-- /row mt -->


                    <div class="row mt">
                        <!-- SERVER STATUS PANELS -->
                        <div class="col-md-4 col-sm-4 mb">
                            <div class="white-panel pn donut-chart">
                                <div class="white-header">
                                    <h5>运动目标完成</h5>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6 goleft">
                                        <p><i class="fa fa-database"></i>{{$stepCompleteRate}}%</p>
                                    </div>
                                </div>
                                <canvas id="serverstatus01" height="120" width="120"></canvas>
                                <script>
                                    var doughnutData = [
                                        {
                                            value: {{$stepCompleteRate}},
                                            color:"#68dff0"
                                        },
                                        {
                                            value : {{100-$stepCompleteRate}},
                                            color : "#fdfdfd"
                                        }
                                    ];
                                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                                </script>
                            </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->


                        <div class="col-md-4 col-sm-4 mb">
                            <div class="white-panel pn">
                                <div class="white-header">
                                    <h5>BMI</h5>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6 goleft">
                                        <p><i class="fa fa-info-circle"></i>
                                            @if($bmi<=18.4)
                                                偏轻
                                            @elseif($bmi<=23.9)
                                                正常
                                            @else
                                                超重
                                            @endif

                                        </p>
                                    </div>
                                    <div class="col-sm-6 col-xs-6"></div>
                                </div>
                                <div class="centered">
                                    <h1 style="color:#68dff0;font-size:60px;font-family: 'Roboto', 'Arial', sans-serif;">{{$bmi}}</h1>
                                </div>
                            </div>
                        </div><!-- /col-md-4 -->

                        <div class="col-md-4 mb">
                            <!-- INSTAGRAM PANEL -->
                            <div class="instagram-panel pn">
                                <i class="fa fa-instagram fa-4x"></i>
                                <p>昨夜睡眠<br/>
                                    {{$sleepInfo->sleepHour}}h{{$sleepInfo->sleepMinute}}min
                                </p>
                            </div>
                        </div><!-- /col-md-4 -->


                    </div><!-- /row -->










                </div>



            </div><! --/row -->
        </section>
        @endsection



