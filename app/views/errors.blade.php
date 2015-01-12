<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>{{ Lang::get('errors.title-'. $error) }}</title>
	<!-- Bootstrap Core CSS -->
	{{ HTML::style('assets/vendor/bootstrap/css/bootstrap.min.css') }}
	<!--[if lt IE 9]>
		{{ HTML::script('./assets/vendor/html5shiv/html5shiv.min.js') }}
		{{ HTML::script('./assets/vendor/respond/respond.min.js') }}
	<![endif]-->
</head>
<body>
	<div class="container">
		<div class="col-lg-8 col-lg-offset-2 text-center">
		<br /><br />
		<h1>OPPS, Error {{{$error}}} !</h1>
		<div class="clearfix"></div>            
		<br /><br />
		<p class="text-muted">{{ Lang::get('errors.help-'. $error) }}</p>
		<br /><br />
		<div class="col-lg-6  col-lg-offset-3">
			<div class="btn-group btn-group-justified">
				<a href="{{ URL::previous() }}" class="btn btn-success">Retourner</a> 
			</div>
		</div>
	</div>
	<!-- /#wrapper -->
	<script>
		var $buoop = {c:2}; 
		function $buo_f(){ 
		 var e = document.createElement("script"); 
		 e.src = "//browser-update.org/update.js"; 
		 document.body.appendChild(e);
		};
		try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
		catch(e){window.attachEvent("onload", $buo_f)}
	</script>
</body>
</html>

