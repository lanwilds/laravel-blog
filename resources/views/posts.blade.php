@extends('layouts.app')

@section('content')
<section id="posts">
	<div class="page-header">
		<h2><i class="fas fa-newspaper"></i> Articles</h2>
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
	        <a href="{{ route('post',['id'=> 1]) }}" class="btn btn-outline-primary">Read More</a>
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
	        <a href="{{ route('post',['id'=> 1]) }}" class="btn btn-outline-primary">Read More</a>
	        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	      </div>
	    </div>
	  </div>
	</div>
</section>
@endsection