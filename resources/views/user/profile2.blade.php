@extends('template')
	@section('title')
		个人主页
	@endsection

	@section('go-top')
		/profile#
	@endsection

	@section('css')
		@@parent

		<link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
		<link rel="stylesheet" href="assets/css/to-do.css">
		<link rel="stylesheet" href="css/activity/activities.css">
	@endsection

	@section('js')
		@@parent

	@endsection



	@section('main-content')
		<div class="wrapper site-min-height">
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

			{{--今日信息--}}
			<div class="row mtbox">

				<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
					<div class="box1">
						<span class="li_user"></span>
						<h3>933</h3>
					</div>
					<p>933 People liked your page the last 24hs. Whoohoo!</p>
				</div>
				<div class="col-md-2 col-sm-2 box0">
					<div class="box1">
						<span class="li_cloud"></span>
						<h3>+48</h3>
					</div>
					<p>48 New files were added in your cloud storage.</p>
				</div>
				<div class="col-md-2 col-sm-2 box0">
					<div class="box1">
						<span class="li_stack"></span>
						<h3>23</h3>
					</div>
					<p>You have 23 unread messages in your inbox.</p>
				</div>
				<div class="col-md-2 col-sm-2 box0">
					<div class="box1">
						<span class="li_news"></span>
						<h3>+10</h3>
					</div>
					<p>More than 10 news were added in your reader.</p>
				</div>
				<div class="col-md-2 col-sm-2 box0">
					<div class="box1">
						<span class="li_data"></span>
						<h3>OK!</h3>
					</div>
					<p>Your server is working perfectly. Relax & enjoy.</p>
				</div>

			</div><!-- /row mt -->

			<div class="row">
				{{--目标--}}
				<div class="col-md-12">
					<section class="task-panel tasks-widget showback">
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
				</div>

			</div>

			<div class="row mt">
				{{--竞赛--}}
				<div class="col-md-12">
					<div class="activity showback">


						<!--table-->
						<div class="row mt">

							<div class="col-md-offset-1 col-md-10 body">
								<div class="row ">
									<div class="col-lg-2">
										<div class="head">
											<h4>hhhh</h4>
										</div>
									</div>

									<div class="col-lg-2 centered">
										<p class="title">参与人数</p>
										<h2><b>2</b></h2>
									</div>

									<div class="col-lg-2 centered">
										<p class="title"><b>运动类型</b></p>
										<img src="graphics/activity/sports.svg" alt="追踪器">
									</div>

									<div class="col-lg-4 centered">
										<p class="title"><b>离竞赛开始还有</b></p>
										<h1><b>1</b><small>天</small><b>3</b><small>小时</small></h1>

									</div>

									<div class="col-lg-2 centered">
										<p class="title"><b>奖金</b></p>
										<h1><b>100</b><small>金币</small></h1>
									</div>

								</div>



							</div>

						</div>

						<!--table-->
						<div class="row mt">

							<div class="col-md-offset-1 col-md-10 body">
								<div class="row ">
									<div class="col-lg-2">
										<div class="head">
											<h4>hhhh</h4>
										</div>
									</div>

									<div class="col-lg-2 centered">
										<p class="title"><b>参与人数</b></p>
										<h1><b>2</b></h1>
									</div>

									<div class="col-lg-2 centered">
										<p class="title"><b>运动类型</b></p>
										<img src="graphics/activity/sports.svg" alt="追踪器">
									</div>

									<div class="col-lg-4 centered">
										<p class="title"><b>离竞赛开始还有</b></p>
										<h1><b>1</b><small>天</small><b>3</b><small>小时</small></h1>

									</div>

									<div class="col-lg-2 centered">
										<p class="title"><b>奖金</b></p>
										<h1><b>100</b><small>金币</small></h1>
									</div>

								</div>



							</div>

						</div>

						<!--table-->
						<div class="row mt">

							<div class="col-md-offset-1 col-md-10 body">
								<div class="row ">
									<div class="col-lg-2">
										<div class="head">
											<h4>hhhh</h4>
										</div>
									</div>

									<div class="col-lg-2 centered">
										<p class="title"><b>参与人数</b></p>
										<h1><b>2</b></h1>
									</div>

									<div class="col-lg-2 centered">
										<p class="title"><b>运动类型</b></p>
										<img src="graphics/activity/sports.svg" alt="追踪器">
									</div>

									<div class="col-lg-4 centered">
										<p class="title"><b>离竞赛开始还有</b></p>
										<h1><b>1</b><small>天</small><b>3</b><small>小时</small></h1>

									</div>

									<div class="col-lg-2 centered">
										<p class="title"><b>奖金</b></p>
										<h1><b>100</b><small>金币</small></h1>
									</div>

								</div>



							</div>

						</div>

						<!--table-->
						<div class="row mt">

							<div class="col-md-offset-1 col-md-10 body">
								<div class="row ">
									<div class="col-lg-2">
										<div class="head">
											<h4>hhhh</h4>
										</div>
									</div>

									<div class="col-lg-2 centered">
										<p class="title"><b>参与人数</b></p>
										<h1><b>2</b></h1>
									</div>

									<div class="col-lg-2 centered">
										<p class="title"><b>运动类型</b></p>
										<img src="graphics/activity/sports.svg" alt="追踪器">
									</div>

									<div class="col-lg-4 centered">
										<p class="title"><b>离竞赛开始还有</b></p>
										<h1><b>1</b><small>天</small><b>3</b><small>小时</small></h1>

									</div>

									<div class="col-lg-2 centered">
										<p class="title"><b>奖金</b></p>
										<h1><b>100</b><small>金币</small></h1>
									</div>

								</div>



							</div>

						</div>



					</div>
				</div>

			</div>

		</div>
	@endsection