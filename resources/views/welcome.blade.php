<!DOCTYPE html>
<html>
	<head>
		<title>Workout Log</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="/javascript/script.js" type="text/javascript"></script>
		<style>
			@import url(/css/fonts/opensanscondensed.css);
			@import url(/css/fonts/opensans.css);
			@import url(/css/app.css);
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row third">
				<div class="col-md-6 col-md-offset-3 title">
					Workout Log
				</div>
			</div>
			<div class="row third">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<form>
							<input class="col-md-3" type="text" name="amount" id="amount" placeholder="How many?" required>
							<input class="col-md-3" type="text" name="weight" id="weight" placeholder="How heavy?" required>
							<input class="col-md-3" type="text" name="description" id="description" placeholder="What was it?" required>
							<input class="col-md-3" type="submit">
							<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
						</form>
					</div>
				</div>
			</div>
			<div class="row third">
				<div class="col-md-10 col-md-offset-1">
					@yield('listitems')
				</div>
			</div>
		</div>
	</body>
</html>
