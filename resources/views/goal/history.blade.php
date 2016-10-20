@extends('template')

    @section('select-page')
        setSelectMenu(3,11);
    @endsection


    @section('title')
        历史目标
    @endsection

    @section('go-top')
        /historyGoal#
    @endsection

    @section('css')
        @@parent
        <script src="assets/js/chart-master/Chart.js"></script>

        <link rel="stylesheet" href="assets/css/to-do.css">
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    @endsection

    @section('js')
        @@parent
        <script src="assets/js/sparkline-chart.js"></script>
        <script src="assets/js/jquery.sparkline.js"></script>

        <script src="assets/js/sleep-morris-conf.js"></script>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>

    @endsection


    @section('main-content')
        <div class="wrapper site-min-height">
            {{--目标完成情况--}}
            <div class="row mt">
                {{--运动--}}
                <div class="col-md-4 col-sm-4 mb">
                    <div class="green-panel pn">
                        <div class="green-header">
                            <h5>运动目标完成比例</h5>
                        </div>
                        <canvas id="serverstatus03" height="120" width="120"></canvas>
                        <script>
                            var doughnutData = [
                                {
                                    value: 60,
                                    color:"#2b2b2b"
                                },
                                {
                                    value : 40,
                                    color : "#fffffd"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
                        </script>
                        <h3>60% USED</h3>
                    </div>
                </div>
                {{--体重--}}
                <div class="col-md-4 col-sm-4 mb">
                    <div class="green-panel pn">
                        <div class="green-header">
                            <h5>睡眠目标完成比例</h5>
                        </div>
                        <canvas id="serverstatus02" height="120" width="120"></canvas>
                        <script>
                            var doughnutData = [
                                {
                                    value: 60,
                                    color:"#2b2b2b"
                                },
                                {
                                    value : 40,
                                    color : "#fffffd"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                        </script>
                        <h3>60% USED</h3>
                    </div>
                </div>
                {{--睡眠--}}
                <div class="col-md-4 col-sm-4 mb">
                    <div class="green-panel pn">
                        <div class="green-header">
                            <h5>睡眠目标完成比例</h5>
                        </div>
                        <canvas id="serverstatus01" height="120" width="120"></canvas>
                        <script>
                            var doughnutData = [
                                {
                                    value: 60,
                                    color:"#2b2b2b"
                                },
                                {
                                    value : 40,
                                    color : "#fffffd"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                        </script>
                        <h3>60% USED</h3>
                    </div>
                </div>

            </div>

            {{--目标总数与完成数--}}
            <div class="row">
                <div class="col-md-12 col-sm-12 mb">
                    <div class="green-panel pn">
                        <div class="green-header">
                            <h5>目标数</h5>
                        </div>

                        <div id="hero-area" class="graph"></div>

                    </div>
                </div>


            </div>

            {{--上周目标--}}
            <div class="row mt">
                <div class="col-md-12">
                    <section class="task-panel tasks-widget">
                        <div class="panel-heading">
                            <div class="pull-left"><h5><i class="fa fa-tasks"></i>&nbsp;&nbsp;&nbsp;上周目标</h5></div>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="task-content">

                                <ul class="task-list">
                                    <li>

                                        <div class="task-title">

                                            <span class="task-title-sp">Dashgum - Admin Panel Theme</span>

                                            <! -- ANIMATED PROGRESS BARS -->

                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow=80 aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">45% Complete(success)</span>
                                                </div>
                                            </div>



                                            <span class="badge bg-theme">体重</span>
                                            <div class="pull-right hidden-phone">

                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </div>
                                        </div>
                                    </li>

                                    <li>

                                        <div class="task-title">

                                            <span class="task-title-sp">Dashgum - Admin Panel Theme</span>

                                            <! -- ANIMATED PROGRESS BARS -->

                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-warning"  role="progressbar" aria-valuenow=80 aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">45% Complete(success)</span>
                                                </div>
                                            </div>



                                            <span class="badge bg-theme02">运动</span>
                                            <div class="pull-right hidden-phone">

                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </div>
                                        </div>
                                    </li>

                                    <li>

                                        <div class="task-title">

                                            <span class="task-title-sp">Dashgum - Admin Panel Theme</span>

                                            <! -- ANIMATED PROGRESS BARS -->

                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow=80 aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    <span class="sr-only">45% Complete(success)</span>
                                                </div>
                                            </div>



                                            <span class="badge bg-theme04">睡眠</span>
                                            <span class="badge bg-primary">每日</span>
                                            <span class="badge bg-success">done</span>
                                            <div class="pull-right hidden-phone">

                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </div>
                                        </div>
                                    </li>

                                    <li>

                                        <div class="task-title">

                                            <span class="task-title-sp">Dashgum - Admin Panel Theme</span>

                                            <! -- ANIMATED PROGRESS BARS -->

                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow=80 aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">45% Complete(success)</span>
                                                </div>
                                            </div>



                                            <span class="badge bg-theme03">本周运动</span>
                                            <div class="pull-right hidden-phone">

                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            </div>

                            <div class=" add-task-row">
                                <a class="btn btn-success btn-sm pull-left" href="todo_list.html#">添加目标</a>

                            </div>
                        </div>
                    </section>
                </div><!-- /col-md-12-->
            </div>


        </div>
    @endsection