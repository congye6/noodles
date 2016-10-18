
{{--Heath info--}}
@extends('template')

    @section('title')
        我的健康
    @endsection

    @section('go-top')
        /getHealthInfo#
    @endsection

    @section('select-page')
        setSelectMenu(0,0);
    @endsection

    @section('css')
        @@parent
        <script src="assets/js/chart-master/Chart.js"></script>
    @endsection

    @section('js')
        @@parent
        <script src="assets/js/jquery.sparkline.js"></script>
        <script src="assets/js/sparkline-chart.js"></script>
    @endsection


    @section('main-content')
        <section class="wrapper site-min-height">
            <div class="alert alert-success">单周健康报告</div>

            <div class="row">
                <!--运动步数-->
                <div class="col-md-4 col-sm-4 mb">
                    <div class="darkblue-panel pn">
                        <div class="darkblue-header">
                            <h5>运动步数</h5>
                        </div>
                        <div class="chart mt">
                            <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
                        </div>
                        <p class="mt"><b>总计</b><br/>20034步</p>
                    </div>
                </div><!--运动步数end-->

                <!--睡眠情况-->
                <div class="col-md-4 col-sm-4 mb">
                    <div class="darkblue-panel pn">
                        <div class="darkblue-header">
                            <h5>睡眠情况</h5>
                        </div>
                        <canvas id="serverstatus02" height="120" width="120"></canvas>
                        <script>
                            var doughnutData = [
                                {
                                    value: 60,
                                    color:"#1c9ca7"
                                },
                                {
                                    value : 40,
                                    color : "#f68275"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                        </script>
                        <p>April 17, 2014</p>
                        <footer>
                            <div class="pull-left">
                                <h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
                            </div>
                            <div class="pull-right">
                                <h5>60% Used</h5>
                            </div>
                        </footer>
                    </div><! -- /darkblue panel -->
                </div><!--睡眠情况-->

                <!--BMI-->
                <div class="col-md-4 col-sm-4 mb">
                    <div class="darkblue-panel pn">
                        <div class="darkblue-header">
                            <h5>BMI</h5>
                        </div>
                        <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                        <h3>18.4</h3>
                        <footer>
                            <div class="centered">
                                <p><i class="fa fa-trophy"></i>偏轻</p>
                            </div>
                        </footer>
                    </div><! -- /darkblue panel -->
                </div><!--BMI-->
            </div><!--row1-->

        </section><! --/wrapper -->
    @endsection