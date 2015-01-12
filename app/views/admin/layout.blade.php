<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	@section('title')
		<title>{{{$title}}}</title>
	@show
	<!-- Bootstrap Core CSS -->
	{{ HTML::style('assets/vendor/bootstrap/css/bootstrap.min.css') }}
	<!-- Custom CSS -->
	{{ HTML::style('assets/admin/css/sb-admin.css') }}
	<!-- Custom Fonts -->
	{{ HTML::style('assets/vendor/font-awesome/css/font-awesome.min.css') }}
	<!--[if lt IE 9]>
		{{ HTML::script('./assets/vendor/html5shiv/html5shiv.min.js') }}
		{{ HTML::script('./assets/vendor/respond/respond.min.js') }}
	<![endif]-->
</head>
<body>
	<div id="wrapper">
	<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ URL::route('admin.dashboard') }}">Admin Scout</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li {{ URL::route('admin.dashboard') === URL::current() ? 'class="active"' : '' }}>
						<a href="{{ URL::route('admin.dashboard') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
					</li>
					<li>
						<a href="index.html"><i class="fa fa-fw fa-user"></i> Utilisateurs</a>
					</li>
					<li {{ URL::route('admin.sections') === URL::current() ? 'class="active"' : '' }}>
						<a href="{{ URL::route('admin.sections') }}"><i class="fa fa-fw fa-paw"></i> Sections</a>
					</li>
					@foreach ($sections_menu as $section_menu)
						<li>
							<a href="javascript:;" data-toggle="collapse" data-target="#{{ $section_menu->shortname }}">{{ $section_menu->name }} <i class="fa fa-fw fa-caret-down"></i></a>
							<ul id="{{ $section_menu->shortname }}" class="collapse">
								<li>
									<a href="#"><i class="fa fa-fw fa-calendar"></i> Calendriers</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-fw fa-camera"></i> Photos</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-fw fa-users"></i> Membres</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-fw fa-pencil-square-o"></i> Articles</a>
								</li>
								<li {{ URL::route('admin.section.documents', $section_menu->shortname) === URL::current() ? 'class="active"' : '' }}>
									<a href="{{ URL::route('admin.section.documents', $section_menu->shortname) }}"><i class="fa fa-fw fa-file-o"></i> Documents</a>
								</li>
							</ul>
						</li>
					@endforeach
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>
		<div id="page-wrapper">
			<div class="container-fluid">
			<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						@yield('content', $content)
					</div>
				</div>
				<!-- /.row -->
			</div>
		<!-- /.container-fluid -->
		</div>
	<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<!-- jQuery Version 1.11.0 -->
	{{ HTML::script('./assets/vendor/jquery/jquery-2.1.0.min.js') }}
	<!-- Bootstrap Core JavaScript -->
	{{ HTML::script('./assets/vendor/bootstrap/js/bootstrap.min.js') }}
	
	@if(isset($ajaxs))
		@foreach ($ajaxs as $ajax)
			<script> 
				@include('admin.ajax.' . $ajax)
			</script>
		@endforeach
	@endif
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
