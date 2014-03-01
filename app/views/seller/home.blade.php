@extends('layouts.seller')

@section('nav')
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
					<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="main-navbar">
				<ul class="nav navbar-nav">
					<li><a href="#">Member Home</a></li>
					<li><a href="#">Account Detail</a></li>
					<li><a href="#">New Listing</a></li>
					<li><a href="#">Listing Enquiry</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
@stop

@section('content')

@stop
