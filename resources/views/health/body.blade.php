
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
        <script src="assets/js/chart-master/Chart.js"></script>
    @endsection

    @section('js')
        @@parent
        <script src="assets/js/jquery.sparkline.js"></script>
        <script src="assets/js/sparkline-chart.js"></script>
    @endsection



    @section('main-content')
        <div class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-md-12 col-sm-12 mb">
                    <div class="green-panel pn">
                        <div class="green-header">
                            <h5>身体情况</h5>
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
                </div><! --/col-md-4 -->
            </div>

            <div></div>


        </div>




    @endsection