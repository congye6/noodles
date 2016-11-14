@extends('template')

	@section('select-page')
		setSelectMenu(1,5);
	@endsection

	@section('title')
		竞技场
	@endsection

	@section('go-top')
		/activities#
	@endsection

	@section('css')
		@@parent
		<link rel="stylesheet" href="/css/activity/activityDetail.css">

	@endsection

	@section('js')
		@@parent

		<script>
			function joinActivity(id){
				var url=getUrl(['joinActivity',id]);
				$.ajax({
					type: "get",
					url:url,
					data:'',
					success: function (data) {
						if(data=='true') {
							zeroModal.success('参加成功');
						}
						else
							zeroModal.error(data);
					}
				});
			}


		</script>

	@endsection



	@section('main-content')
		<div class="wrapper site-min-height">
			<div class="row mt">
				<div class="col-md-1">
					<img id='title' src="/graphics/activity/sports.svg">
				</div>
				<div class="col-md-2">
					<h3 id="title">多人竞赛</h3>
				</div>
			</div>

			<div class="row mt">
				<div class="col-md-1">
					<img id="partner" class='img-circle' src="/assets/img/friends/fr-01.jpg">
				</div>
				<div class="col-md-1">
					<img id="partner" class='img-circle' src="/assets/img/friends/fr-02.jpg">
				</div>
				<div class="col-md-1">
					<img id="partner" class='img-circle' src="/assets/img/friends/fr-03.jpg">
				</div>

				<div class="col-md-1">
					<img id="partner" class='img-circle' src="/assets/img/friends/fr-04.jpg">
				</div>
				<div class="col-md-1">
					<img id="partner" class='img-circle' src="/assets/img/friends/fr-05.jpg">
				</div>
				<div class="col-md-1">
					<img id="partner" class='img-circle' src="/assets/img/friends/fr-06.jpg">
				</div>

				<div class="col-md-1">
					<img id="partner" class='img-circle' src="/assets/img/friends/fr-07.jpg">
				</div>
				<div class="col-md-1">
					<img id="partner" class='img-circle' src="/assets/img/friends/fr-08.jpg">
				</div>
				<div class="col-md-1">
					<img id="partner" class='img-circle' src="/assets/img/friends/fr-09.jpg">
				</div>

			</div>

			<div class="row mt">
				<div class="col-md-12">
					<div class="content-panel">
						<div class="row">
							<div class="col-md-1">
								<img class="contentIcon" src="/graphics/activity/timer.svg">

							</div>

							<div class="col-md-5">

								<h2><small>离竞赛{{$activityVO->isBegin}}</small><b>{{$activityVO->day}}</b><small>天</small><b>{{$activityVO->hour}}</b><small>小时</small></h2>
								<h5>{{$activityVO->activity->startTime}}-{{$activityVO->activity->endTime}}</h5>
							</div>

							<div class="col-md-1">
								<img class="contentIcon" src="/graphics/activity/coin.svg">
							</div>

							<div class="col-lg-5">
								<h2><b>{{$activityVO->activity->enterFee*$activityVO->partnerCount}}</b><small>金币</small></h2>
								<h5>保证金:{{$activityVO->activity->enterFee}}，等差分配</h5>
							</div>

						</div>

						<div class="row mt">
							<div class="col-md-1">
								<img class="contentIcon" src="/graphics/activity/note.svg">
							</div>

							<div class="col-lg-5">

								<h4>{{$activityVO->activity->description}}</h4>
							</div>
						</div>
					</div>
				</div>
			</div>

			@if($activityVO->isBegin=='结束')
				<div class="row mt">
					<div class="col-lg-12"><h2>当前战况</h2></div>

				</div>

				<div class="row mt">
					<div class="col-md-1 centered">
						<img class='contentIcon' src="/graphics/activity/first.svg">
					</div>

					<div class="col-md-1">
						<img id="partner" class='img-circle' src="/assets/img/friends/fr-01.jpg">
					</div>

					<div class="col-md-4">
						<div class="steps centered">
							<h2 class="steps">113455步&nbsp</h2>

						</div>
						<img class='steps' src="/graphics/activity/steps.png">

					</div>


				</div>
			@else
				<div class="row mt">
					<div class="col-md-2 col-md-offset-5">
						<button class="btn btn-theme" onclick="joinActivity({{$activityVO->activity->id}})">参加</button>

					</div>

				</div>

			@endif


		</div>
	@endsection