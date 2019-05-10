@extends('layouts.app')

@section('content')
<section id="intro">
	<div class="jumbotron">
	  <h1 class="display-4">Welcome to SAC Blog</h1>
	  <p class="lead">This is a simple blog created by students of <span class="text-primary">St aloysius college (autonomous) mangaluru</span> for the purpose of internship.</p>
	  <hr class="my-4">
	  <p>This Blog contain article related <b>Laravel</b> and <b>React JS</b>.</p>
	  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</div>
</section>
<section id="posts">
	<div class="page-header">
		<h2><i class="fas fa-newspaper"></i> Recent Articles</h2>
	</div>
	<div class="card mb-3">
	  <div class="row no-gutters">
	    <div class="col-md-4">
	      <img  height="100%" src="https://www.metizsoft.com/wp-content/uploads/2018/05/Laravel.jpg" class="card-img" alt="...">
	    </div>
	    <div class="col-md-8">
	      <div class="card-body">
	        <h5 class="card-title">Here is why Laravel is Best PHP framework.</h5>
	        <p class="card-text">
	        	Expressive, beautiful syntax.
	        	Value elegance, simplicity, and readability? You’ll fit right in. Laravel is designed for people just like you. If you need help getting started.
	        .</p>
	        <a href="#" class="btn btn-outline-primary">Read More</a>
	        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="card mb-3">
	  <div class="row no-gutters">
	    <div class="col-md-4">
	      <img  height="100%" src="https://cdn-images-1.medium.com/max/1200/0*iBvb3FQRnC4Xdyv4.jpg" class="card-img" alt="...">
	    </div>
	    <div class="col-md-8">
	      <div class="card-body">
	        <h5 class="card-title">Why should you use VueJS when using Laravel.</h5>
	        <p class="card-text">
	        	Vue.js - The Progressive JavaScript Framework. ... Approachable. Already know HTML, CSS and JavaScript? Read the guide and start building things in no time.
	        .</p>
	        <a href="#" class="btn btn-outline-primary">Read More</a>
	        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	      </div>
	    </div>
	  </div>
	</div>
</section>




@endsection