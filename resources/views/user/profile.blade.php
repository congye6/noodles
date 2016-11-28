

    @extends('template')
    <!--**********************************************************************************************************************************************************
      MAIN CONTENT
      ***********************************************************************************************************************************************************-->
    {{--main content start--}}
        @section('title')
            首页
        @endsection

        @section('select-page')
            $('li.mt a').addClass('active');
        @endsection

        @section('go-top')
            /#
        @endsection

        @section('css')
            @@parent
            <script src="assets/js/chart-master/Chart.js"></script>
            <link rel="stylesheet" type="text/css" href="/assets/lineicons/style.css">
            <link rel="stylesheet" href="css/user/profile.css">

        @endsection

        @section('js')
            @@parent





        @endsection

        @section('main-content')
        <section class="wrapper">

            {{--头像--}}
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="tile-light p-5 m-b-15 showback">
                        <div class="cover p-relative">
                            <img src="assets/img/cover-bg.jpg" class="w-100" alt="">
                            <img class="profile-pic" src="assets/img/profile-pic.jpg" alt="">
                            <div class="profile-btn">
                                <button class="btn btn-alt btn-sm"><i class="icon-bubble"></i> <span>Message</span></button>
                                <button class="btn btn-alt btn-sm"><i class="icon-user-2"></i> <span>Friend</span></button>
                            </div>
                        </div>
                        <div class="p-5 m-t-15">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget risus rhoncus, cursus purus vitae, venenatis eros. Phasellus at tincidunt risus. Integer sed massa fermentum, feugiat arcu quis, ultrices nisi. Quisque commodo nisi scelerisque, tempus diam ac, dignissim tellus. Mauris adipiscing elit tortor, dignissim auctor diam mollis sed. Nulla eu dui non velit accumsan scelerisque eget et felis.
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox">
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_calendar"></span>
                                <h3>123<small>天</small></h3>
                            </div>
                            <p>累计运动123天!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_fire"></span>
                                <h3>12345<small>千卡</small></h3>
                            </div>
                            <p>累计消耗热量12334千卡</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_clock"></span>
                                <h3>23</h3>
                            </div>
                            <p>参加竞赛23次</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_data"></span>
                                <h3>23</h3>
                            </div>
                            <p>剩余23金币</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="li_heart"></span>
                                <h3>6</h3>
                            </div>
                            <p>6个粉丝关注了你</p>
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
                                        <p><i class="fa fa-database"></i> 70%</p>
                                    </div>
                                </div>
                                <canvas id="serverstatus01" height="120" width="120"></canvas>
                                <script>
                                    var doughnutData = [
                                        {
                                            value: 70,
                                            color:"#68dff0"
                                        },
                                        {
                                            value : 30,
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
                                        <p><i class="fa fa-info-circle"></i> 偏轻</p>
                                    </div>
                                    <div class="col-sm-6 col-xs-6"></div>
                                </div>
                                <div class="centered">
                                    <h1 style="color:#68dff0;font-size:60px;font-family: 'Roboto', 'Arial', sans-serif;">18.6</h1>
                                </div>
                            </div>
                        </div><!-- /col-md-4 -->

                        <div class="col-md-4 mb">
                            <!-- INSTAGRAM PANEL -->
                            <div class="instagram-panel pn">
                                <i class="fa fa-instagram fa-4x"></i>
                                <p>昨夜睡眠<br/>
                                    8h35min
                                </p>
                            </div>
                        </div><!-- /col-md-4 -->


                    </div><!-- /row -->










                </div>



            </div><! --/row -->
        </section>
        @endsection



