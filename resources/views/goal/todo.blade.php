@extends('template')

    @section('select-page')
        setSelectMenu(3,10);
    @endsection

    @section('title')
        今日目标
    @endsection

    @section('go-top')
        /todo#
    @endsection

    @section('css')
        @@parent
        <link rel="stylesheet" href="assets/css/to-do.css">

    @endsection

    @section('js')
        @@parent

    @endsection

    @section('main-content')
        <div class="wrapper site-min-height">
            <!-- COMPLEX TO DO LIST -->
            <div class="row mt">
                <div class="col-md-12">
                    <section class="task-panel tasks-widget">
                        <div class="panel-heading">
                            <div class="pull-left"><h5><i class="fa fa-tasks"></i>&nbsp;&nbsp;&nbsp;今日目标</h5></div>
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
            </div><!-- /row -->
        </div>

    @endsection