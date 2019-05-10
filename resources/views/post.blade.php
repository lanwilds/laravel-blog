@extends('layouts.app')

@section('content')
	<section id="post">
		<div class="page-header">
			<h2>Why should you use VueJS when using Laravel.</h2>
		</div>
		<img src="https://cdn-images-1.medium.com/max/1200/0*iBvb3FQRnC4Xdyv4.jpg" style="height: 40vh; width: 100%;">
		<div class="row mt-3">
			<div class="col-md-8">
				<p class="lead">
					If you have used a recent Laravel version, you would notice it usually comes with Vue bundled in with other tools like Bootstrap and jQuery. You would also notice in Laravel documentation that they gave a small introduction to using Vue components. Is this a sign that Laravel loves Vue?

					<br><br>
					<h3>Prerequisites</h3>
					Basic knowledge of PHP and Laravel
					Basic knowledge of JavaScript
					Have PHP setup on your local machine
					Have Composer installed on your local machine
					What is Vue.js?
					Straight from the horse’s mouth, “Vue is a progressive framework for building user interfaces”. Vue at its core is focused on the view layer only of an application, so integrating with other platforms or existing applications is really easy. You can also use Vue on its own to build sophisticated single page applications.
					<br><br>
					<h3>How does Vue work?</h3>
					If you have programmed for the web before the era of event-driven frontend JavaScript frameworks, you would understand there are considerable difficulties and inefficiencies that arise from trying to update the Document Object Model (DOM).

				</p>
			</div>
			<div class="col-md-4">
				<div class="page-header">
					<h3><i class="fas fa-newspaper"></i> You May Like</h3>
				</div>
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="https://www.valuecoders.com/blog/wp-content/uploads/2016/08/react.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Learn ReactJS</h5>
				    <p class="card-text">React is a JavaScript library for building user interfaces.</p>
				    <a href="#" class="btn btn-primary">Read More</a>
				  </div>
				</div>
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="https://miro.medium.com/max/1620/1*hj-_anuWthYZs0x22hE9lA.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">What is NPM</h5>
				    <p class="card-text">npm is a package manager for the JavaScript programming language. It is the default package manager for the JavaScript runtime environment Node.js.</p>
				    <a href="#" class="btn btn-primary">Read More</a>
				  </div>
				</div>
			</div>
		</div>
	</section>
@endsection