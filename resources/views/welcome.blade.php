<!DOCTYPE html>
<html>
	<head>
		<title>Workout Log</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="/js/script.js" type="text/javascript"></script>
		<style>
			@import url(/css/fonts/opensanscondensed.css);
			@import url(/css/fonts/opensans.css);
			@import url(/css/app.css);
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 title">
					Workout Log
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						{!! Form::open(array('action' => 'ApiController@add', 'class' => 'addform', 'method' => 'post')) !!}
						    {!! Form::text('amount', "", array('placeholder' => 'Amount?', 'class' => 'col-md-3')) !!}
						    {!! Form::text('weight', "", array('placeholder' => 'Weight?', 'class' => 'col-md-3')) !!}
						    {!! Form::text('description', "", array('placeholder' => 'What?', 'class' => 'col-md-3')) !!}
						    {!! Form::submit('Add', array('class' => 'col-md-3')) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					@yield('listitems')
				</div>
			</div>
		</div>
	</body>
</html>
