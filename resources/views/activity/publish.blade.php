@extends('template')
    @section('title')
        发布竞赛
    @endsection

    @section('select-page')
        setSelectMenu(1,4);
    @endsection

    @section('go-top')
        /publishActivity#
    @endsection

    @section('css')
        @@parent
    @endsection

    @section('js')
        @@parent
        <script src="js/activity/autosize.js"></script>
        <script>

            autosize(document.querySelectorAll('textarea'));

        </script>
    @endsection



    @section('main-content')
        <div class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-md-2">
                    <h2>竞赛介绍</h2>
                </div>
                <div class="col-md-8 mt">
                    <textarea style="max-height: 300px; min-height:150px;min-width: 500px;resize: none;"></textarea>
                </div>
            </div>

            <div class="row mt">
                <div class="col-md-2">
                    <h2>时间</h2>
                </div>

                <!--select day-->
                <div class="col-md-2 mt">
                    <div class="btn-group">
                        <button type="button" class="btn btn-theme">今天</button>
                        <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
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
                <div class="col-md-1">

                    <h2>--</h2>
                </div>


                <div class="col-md-2 mt">
                    <div class="btn-group">
                        <button type="button" class="btn btn-theme">今天</button>
                        <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
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


            </div>

            <div class="row mt">
                <div class="col-md-2">
                    <h2>奖金</h2>
                </div>

                <div class="col-md-2 mt">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail2">
                    </div>
                </div>

                <div class="col-md-2">
                    <h2>金币</h2>
                </div>

            </div>

            <div class="row mt">
                <div class="col-md-2">
                    <h2>运动类型</h2>
                </div>

                <!--select day-->
                <div class="col-md-2 mt">
                    <div class="btn-group">
                        <button type="button" class="btn btn-theme">追踪器</button>
                        <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
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



            </div>

            <div class="row mt">
                <div class="col-md-1 col-md-offset-1 mt">
                    <button type="button" class="btn btn-theme btn-round">发布竞赛</button>
                </div>
                <div class="col-md-1 mt">
                    <button type="button" class="btn btn-theme btn-round">取消</button>
                </div>

            </div>

        </div>
    @endsection