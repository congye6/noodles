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
        <link href="/css/mobiscroll.2.13.2.css" rel="stylesheet" />
    @endsection

    @section('js')
        @@parent
        <script src="/js/activity/autosize.js"></script>
        <script src="/js/mobiscroll.2.13.2.js"></script>
        <script>

            autosize(document.querySelectorAll('textarea'));

            $(function () {

                var curr = new Date().getFullYear();
                var opt={};
                opt.date = {preset : 'date'};
                opt.datetime = {preset : 'datetime'};
                opt.time = {preset : 'time'};

                opt.default = {
                    theme: 'android-holo light', //皮肤样式
                    display: 'modal', //显示方式
                    mode: 'scroller', //日期选择模式
                    dateFormat: 'yyyy-mm-dd',
                    lang: 'zh',
                    showNow: true,
                    nowText: "今天",
                    stepMinute: 5,
                    startYear: curr - 0, //开始年份
                    endYear: curr + 1 //结束年份
                };
                $('.settings').bind('change', function() {
                    var demo = 'datetime';
                    if (!demo.match(/select/i)) {
                        $('.demo-test-' + demo).val('');
                    }
                    $('.demo-test-' + demo).scroller('destroy').scroller($.extend(opt['datetime'], opt['default']));
                    $('.demo').hide();
                    $('.demo-' + demo).show();
                });
                $('#demo').trigger('change');

            });

            function cancel(){
                window.location.href='/activities';
            }

            function publish(){
                var description=$("textarea").val();
                var startTime=$("input#startTime").val();
                var endTime=$("input#endTime").val();
                var sportType=$("#sportType").text();
                var coins=$("input#enterFee").val();

                if(isNull(description))
                    zeroModal.error("请填写描述");
                if(isNull(startTime))
                    zeroModal.error("请选择开始时间");
                if(isNull(endTime))
                    zeroModal.error("请选择结束时间");
                if(isNull(coins))
                    coins=0;

                var url=getUrl(['publish',description,startTime,endTime,sportType,coins]);

                $.ajax({
                    type: "get",
                    url:url,
                    data:'',
                    success: function (data) {
                        if(data=='true')
                            zeroModal.success('创建竞赛成功');
                        else
                            zeroModal.error(data);
                    }
                });

            }

        </script>
    @endsection



    @section('main-content')
        <div class="wrapper site-min-height">


            <div class="form-panel">

            <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                    <div class="row mt">
                        <div class="col-md-2">
                            <h2>&nbsp;竞赛介绍</h2>
                        </div>
                        <div class="col-md-8 mt">
                            <textarea style="max-height: 300px; min-height:150px;min-width: 500px;resize: none;" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">

                    <div class="row mt">
                        <div class="col-md-2">
                            <h2>&nbsp;时间</h2>
                        </div>


                        <div class="settings" style="display:none;">
                            <select name="demo" id="demo">
                                <option value="date">&nbsp;日期</option>
                            </select>
                        </div>

                        <!--select day-->
                        <div class="col-md-2 mt">

                                <input  id="startTime" class="form-control  demo-test-date demo-test-datetime demo-test-time demo-test-credit"/>


                        </div>
                        <div class="col-md-1">

                            <h2>--</h2>
                        </div>


                        <div class="col-md-2 mt">
                            <input id="endTime" class="form-control  demo-test-date demo-test-datetime demo-test-time demo-test-credit"/>
                        </div>


                    </div>
                </div>

                <div class="form-group">

                    <div class="row mt">
                        <div class="col-md-2">
                            <h2>&nbsp;运动类型</h2>
                        </div>

                        <!--select day-->
                        <div class="col-md-2 mt">
                            <div class="btn-group">
                                <button type="button" class="btn btn-theme" id="sportType">追踪器</button>
                                <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">追踪器</a></li>
                                </ul>
                            </div>

                        </div>



                    </div>
                </div>

                <div class="form-group">

                    <div class="row mt">
                        <div class="col-md-2">
                            <h2>&nbsp;保证金</h2>
                        </div>

                        <div class="col-md-2 mt">
                            <div class="form-group">
                                <input  class="form-control" id="enterFee">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <h2>金币</h2>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <div class="row mt">
                        <div class="col-md-1 col-md-offset-1 mt">
                            <button type="button" class="btn btn-theme btn-round" onclick="publish()">发布竞赛</button>
                        </div>
                        <div class="col-md-1 mt">
                            <button type="button" class="btn btn-theme btn-round" onclick="cancel()">取消</button>
                        </div>

                    </div>
                </div>










            </form>

            </div>


        </div>
    @endsection