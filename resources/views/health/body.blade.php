
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
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
@endsection

@section('js')
    @@parent
    <script src="assets/js/jquery.sparkline.js"></script>
    <script src="assets/js/sparkline-chart.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>

    {{--set data--}}
    <script src="assets/js/sleep-morris-conf.js"></script>
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



            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal tasi-form" method="get">
                        <div class="form-group has-success">
                            <label class="col-sm-1 control-label col-lg-1" >height</label>
                            <div class="col-lg-1">
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>

                            <label class="col-sm-1 control-label col-lg-1" >weight</label>
                            <div class="col-lg-1">
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>

                            <div class="col-md-1"><button type="submit" class="btn btn-theme">保存</button></div>

                            <div class="col-md-4"><h4>根据身高计算,步长：64厘米</h4></div>

                        </div>
                    </form>


                </div>
            </div>
            <!--set goal-->
            <div class="row mt">
                <!--select day-->
                <div class="col-md-2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-theme03">今天</button>
                        <button type="button" class="btn btn-theme03 dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-5">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                        <input type="text" class="form-control" id="exampleInputPassword2" placeholder="30000步">
                    </div>

                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-theme">更改</button>
                </div>

            </div>

            <!--statistic-->
            <div id="morris">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row mt">
                            <!--睡眠-->
                            <div class="col-lg-12">
                                <div class="content-panel">
                                    <div class="panel-body">
                                        <div id="hero-area" class="graph"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>



            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i>历史数据</h4>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Company</th>
                                    <th class="numeric">Price</th>
                                    <th class="numeric">Change</th>
                                    <th class="numeric">Change %</th>
                                    <th class="numeric">Open</th>
                                    <th class="numeric">High</th>
                                    <th class="numeric">Low</th>
                                    <th class="numeric">Volume</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>AAC</td>
                                    <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                    <td class="numeric">$1.38</td>
                                    <td class="numeric">-0.01</td>
                                    <td class="numeric">-0.36%</td>
                                    <td class="numeric">$1.39</td>
                                    <td class="numeric">$1.39</td>
                                    <td class="numeric">$1.38</td>
                                    <td class="numeric">9,395</td>
                                </tr>
                                <tr>
                                    <td>AAD</td>
                                    <td>ARDENT LEISURE GROUP</td>
                                    <td class="numeric">$1.15</td>
                                    <td class="numeric">  +0.02</td>
                                    <td class="numeric">1.32%</td>
                                    <td class="numeric">$1.14</td>
                                    <td class="numeric">$1.15</td>
                                    <td class="numeric">$1.13</td>
                                    <td class="numeric">56,431</td>
                                </tr>
                                <tr>
                                    <td>AAX</td>
                                    <td>AUSENCO LIMITED</td>
                                    <td class="numeric">$4.00</td>
                                    <td class="numeric">-0.04</td>
                                    <td class="numeric">-0.99%</td>
                                    <td class="numeric">$4.01</td>
                                    <td class="numeric">$4.05</td>
                                    <td class="numeric">$4.00</td>
                                    <td class="numeric">90,641</td>
                                </tr>
                                <tr>
                                    <td>ABC</td>
                                    <td>ADELAIDE BRIGHTON LIMITED</td>
                                    <td class="numeric">$3.00</td>
                                    <td class="numeric">  +0.06</td>
                                    <td class="numeric">2.04%</td>
                                    <td class="numeric">$2.98</td>
                                    <td class="numeric">$3.00</td>
                                    <td class="numeric">$2.96</td>
                                    <td class="numeric">862,518</td>
                                </tr>
                                <tr>
                                    <td>ABP</td>
                                    <td>ABACUS PROPERTY GROUP</td>
                                    <td class="numeric">$1.91</td>
                                    <td class="numeric">0.00</td>
                                    <td class="numeric">0.00%</td>
                                    <td class="numeric">$1.92</td>
                                    <td class="numeric">$1.93</td>
                                    <td class="numeric">$1.90</td>
                                    <td class="numeric">595,701</td>
                                </tr>
                                <tr>
                                    <td>ABY</td>
                                    <td>ADITYA BIRLA MINERALS LIMITED</td>
                                    <td class="numeric">$0.77</td>
                                    <td class="numeric">  +0.02</td>
                                    <td class="numeric">2.00%</td>
                                    <td class="numeric">$0.76</td>
                                    <td class="numeric">$0.77</td>
                                    <td class="numeric">$0.76</td>
                                    <td class="numeric">54,567</td>
                                </tr>
                                <tr>
                                    <td>ACR</td>
                                    <td>ACRUX LIMITED</td>
                                    <td class="numeric">$3.71</td>
                                    <td class="numeric">  +0.01</td>
                                    <td class="numeric">0.14%</td>
                                    <td class="numeric">$3.70</td>
                                    <td class="numeric">$3.72</td>
                                    <td class="numeric">$3.68</td>
                                    <td class="numeric">191,373</td>
                                </tr>
                                <tr>
                                    <td>ADU</td>
                                    <td>ADAMUS RESOURCES LIMITED</td>
                                    <td class="numeric">$0.72</td>
                                    <td class="numeric">0.00</td>
                                    <td class="numeric">0.00%</td>
                                    <td class="numeric">$0.73</td>
                                    <td class="numeric">$0.74</td>
                                    <td class="numeric">$0.72</td>
                                    <td class="numeric">8,602,291</td>
                                </tr>
                                <tr>
                                    <td>AGG</td>
                                    <td>ANGLOGOLD ASHANTI LIMITED</td>
                                    <td class="numeric">$7.81</td>
                                    <td class="numeric">-0.22</td>
                                    <td class="numeric">-2.74%</td>
                                    <td class="numeric">$7.82</td>
                                    <td class="numeric">$7.82</td>
                                    <td class="numeric">$7.81</td>
                                    <td class="numeric">148</td>
                                </tr>
                                <tr>
                                    <td>AGK</td>
                                    <td>AGL ENERGY LIMITED</td>
                                    <td class="numeric">$13.82</td>
                                    <td class="numeric">  +0.02</td>
                                    <td class="numeric">0.14%</td>
                                    <td class="numeric">$13.83</td>
                                    <td class="numeric">$13.83</td>
                                    <td class="numeric">$13.67</td>
                                    <td class="numeric">846,403</td>
                                </tr>
                                <tr>
                                    <td>AGO</td>
                                    <td>ATLAS IRON LIMITED</td>
                                    <td class="numeric">$3.17</td>
                                    <td class="numeric">-0.02</td>
                                    <td class="numeric">-0.47%</td>
                                    <td class="numeric">$3.11</td>
                                    <td class="numeric">$3.22</td>
                                    <td class="numeric">$3.10</td>
                                    <td class="numeric">5,416,303</td>
                                </tr>
                                </tbody>
                            </table>
                        </section>
                    </div><!-- /content-panel -->
                </div><!-- /col-lg-4 -->

        </div>


        </div>




    @endsection