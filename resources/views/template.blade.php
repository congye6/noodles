<!DOCTYPE html>
<html lang="utf-8">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keyword" content="运动 社交 计步器 睡眠 身体 活动 粉丝">
    <meta name="description" content="一个运动社交的web应用，可进行运动数据管理和运动竞赛的发布和好友交际">
    <title>@section('title')导航@show</title>

      @section('css')
          <!-- Bootstrap core CSS -->
          <link href="/assets/css/bootstrap.css" rel="stylesheet">
          <!--external css-->
          <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

          <!-- Custom styles for this template -->
          <link href="/assets/css/style.css" rel="stylesheet">
          <link href="/assets/css/style-responsive.css" rel="stylesheet">
          <link href="/css/alert.css" rel="stylesheet">
      @show
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->

      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="/" class="logo"><b>Noodles</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>

                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="/loginPage">注销</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="/profile/{{$_COOKIE['userName']}}"><img src="/graphics/icon/{{$_COOKIE['userName']}}.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered" id="userName"></h5>
              	  	
                  <li class="mt">
                      <a href="/myProfile">
                          <i class="fa  fa-hand-o-up"></i>
                          <span>个人主页</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-stethoscope"></i>
                          <span>健康</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="/getWalkInfo">运动追踪器</a></li>
                          <li><a  href="/getBodyInfo">身体管理</a></li>
                          <li><a  href="/getSleepInfo">睡眠助手</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa  fa-dribbble"></i>
                          <span>竞赛</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="/publishActivity">发布竞赛</a></li>
                          <li><a  href="/activities">竞赛场</a></li>
                          <li><a  href="/myActivity">我的竞赛</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a  href="javascript:;" >
                          <i class="fa fa-group"></i>
                          <span>好友</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="/followedFriends">我关注的</a></li>
                          <li><a  href="/fans">粉丝</a></li>
                          <li><a  href="/messages">消息盒子</a></li>
                      </ul>
                  </li>
                  {{--<li class="sub-menu">--}}
                      {{--<a href="javascript:;" >--}}
                          {{--<i class="fa fa-tasks"></i>--}}
                          {{--<span>目标</span>--}}
                      {{--</a>--}}
                      {{--<ul class="sub">--}}
                          {{--<li><a  href="/todo">今日目标</a></li>--}}
                          {{--<li><a  href="/historyGoal">历史目标</a></li>--}}
                      {{--</ul>--}}
                  {{--</li>--}}
                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <section id="main-content">
          @section('main-content')
          @show
      </section><!-- /MAIN CONTENT -->


      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - Congye6
              <a href="@section('go-top') @show" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
    @section('js')
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="/assets/js/jquery.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
        <script class="include" type="text/javascript" src="/assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="/assets/js/jquery.scrollTo.min.js"></script>
        <script src="/assets/js/jquery.nicescroll.js" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="/assets/js/common-scripts.js"></script>

        <script src="/js/alert.js"></script>
        <script src="/js/cookie.js"></script>
        <script src="/js/validate.js"></script>
        <script src="/js/urlMaker.js"></script>
    @show

    
  <script>
      //custom select box

      $(function(){
          customSelect();
          showUserInfo();


      });

      {{--implement in enxtend page--}}
      function customSelect(){
          @section('select-page')
          @show
      }

      function showUserInfo(){
          var userName=getCookie('userName');
          $("h5#userName").text(userName);
      }

      function setSelectMenu(indexOfSuper,indexOfSub){
          {{--highlight main menu--}}
        $('li.sub-menu > a').eq(indexOfSuper).addClass('active');
          {{--open sub menu--}}
        $('li.sub-menu ul').eq(indexOfSuper).css('display','block');
          {{--highlight sub menu--}}
        $('li.sub-menu ul.sub li').eq(indexOfSub-1).addClass('active');
      }
  </script>

  </body>
</html>
