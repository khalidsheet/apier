<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>APIER - About the Freamework</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<style>
		* {font-family: 'Ubuntu', sans-serif;}
		p {
			color: #444;
		}
		code {
		    font-size: 90%;
		    background-color: #f9f2f4;
		    border-radius: 4px;
		    width: 100%;
		    padding: 5px;
		    background: #444;
		    color: #ccc;
		    margin: 13px 0;
		}
		.inner-code {
			margin-left: 40px
		}
		code.block {
			display: block;
			padding: 10px;
		}
		.color.main {
			color: #2ecc71;
		}
		.color.white {
			color: #fff;
		}
		b { color:#2ecc71;  }
		.title {
		    /*border-bottom: 2px solid #ccc;*/
		    padding: 10px 0;
		    margin: 10px 0;
		    width: 50%;
		}
		.mainCover {
		    background: #536976;
		    background: -webkit-linear-gradient(left, #536976, #292e49);
		    background: -o-linear-gradient(left, #536976, #292e49);
		    background: linear-gradient(to right, #536976, #292e49);
		    height: 400px;
		    width: 100%;
		    position: fixed;
		    top: 0;
		    left: 0;
		    z-index: -1;
		    padding: 100px 0;
		}
		section.body {
		    height: auto;
		    width: 100%;
		    z-index: 1;
		    margin-top: 400px;
		    background: #fff;
		}
		.header {
			border: 1px solid #27ae60;
			background: #2ecc71;
			color: #fff;
		}
		label.label {
			font-size: 14px;
		}
		.btns {
			margin-top: 10px;
		}
		.btns .btn-default {
			background: #4ECDC4;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #556270, #4ECDC4);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #556270, #4ECDC4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			color: #fff;
			border: none;
		}
		.btns .btn-success {
			background: #fff;
			color: #444;
			border:none;
		}
		/* codes style */
			.class { color: #3f94ff; }
			.new { color: #ff52ff; }
			.string { color: #f1c40f;  }
		/* /codes style */

	</style>
</head>
<body>

	<section class="mainCover">
		<div class="text-center">
			<h1 class="color main">APIER</h1>
			<h3 class="color white">Make an API in easy way!</h3>
			<div class="labels">
				<label class="label label-warning">Beta</label>
				<label class="label label-info">v 1.2</label>
			</div>
			<div class="btns">
				<a href="download" class="btn btn-success">Downlaod</a>
				<a href="#docs" class="btn btn-default">Documentation</a>
			</div>
		</div>
	</section>

	<section class="body">
		<div class="header">
			<h1 class="text-center">APIER</h1>
		</div>
		<div class="main">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="get-started">
							<a href="#docs"><h1 class="color main title">Get Started</h1></a>
							<p>
								After downloaded <b>APIER</b>, Open your project file in <b>terminal</b><br>
								and run this <b>code</b><br>
								<code class="block">$ composer update</code>
							</p>
							<p>
								Now Open your favourite code editor or IDE. <br>
								and Start Coding !
							</p>
						</div>						
					</div>
					<div class="col-md-12">
						<div id="docs">
							<a href="#docs"><h1 class="color main title">Usage</h1></a>
							<ul>
								<li>
									<a href="#routing">Routing</a>
									<ul>
										<li><a href="#routing-usage">Usage</a></li>
										<li><a href="#routing-methods">Routing Methods</a></li>
										<li><a href="#routing-prefix">Routing Prefix</a></li>
										<li><a href="#routing-controllers">Routing With Controllers</a></li>
										<li><a href="#routing-callback">Routing Callback</a></li>
									</ul>
								</li>
								<li>
									<a href="#validation">Validation</a>
									<ul>
										<li><a href="#validation-overview">Overview</a></li>
									</ul>
								</li>
							</ul>
						</div>						
					</div>
					<div class="col-md-12">
						<div id="routing">
							<h1 class="color main title">Routing</h1>
							<p>Routes is used to define your end-point URL</p>
							<p>Define new Route. In <code>routes/api.php</code> file</p>
							<code class="block">$route-><span class="class">get</span>(<span class="string">"/home"</span>, <span class="class">function</span>() { <br>
								<span class="inner-code">
									<span class="new">return</span> <span class="string">"Hello Apier"</span>;
								</span>
							<br>});
							</code>

							<br><p>or you can pass <b>basic html view</b> used for documentation or somthing like this</p>

							<code class="block">$route-><span class="class">get</span>(<span class="string">"/home"</span>, <span class="class">function</span>() { <br>
								<span class="inner-code">
									<span class="new">return</span> <span class="class">view</span>(<span class="string">"docs/index"</span>);
								</span>
							<br>});
							</code>
						</div>
					</div>

					<div class="col-md-12">
						<div id="routing-methods">
							<h1 class="color main title">Routes Methods</h1>
							<code class="block">
								$route-><span class="class">get</span>($route, $handler);  
									<span class="comment"># match only get requests</span>
								<br>
								$route-><span class="class">post</span>($route, $handler);  
									<span class="comment"># match only post requests</span>
								<br>
								$route-><span class="class">delete</span>($route, $handler);  
									<span class="comment"># match only delete requests</span>
								<br>
								$route-><span class="class">any</span>($route, $handler); 
									<span class="comment"># match any request method</span>
							</code>
						</div>
					</div>

					<div class="col-md-12">
						<div id="routing-prefix">
							<h1 class="color main title">Routes Group & Prefix</h1>
							<p>You can register a group contains more than route</p>
							<p>Don't forget to pass a <b>Variable</b> <code>$route</code> to the function</p>
							<p>before you register your routes!</p>
							<code class="block">
								$route-><span class="class">group</span>([<span class="string">'prefix'</span> => <span class="string">'users'</span>], <span class="class">function</span>($route) {<br>
									<span class="inner-code">
										// your routes here
									</span>
								<br>});
							</code>
							<br>
							<p>Example: </p>
							<code class="block">
								$route-><span class="class">group</span>([<span class="string">'prefix'</span> => <span class="string">'users'</span>], <span class="class">function</span>($route) {<br>

									<span class="inner-code">
										$route-><span class="class">get</span>(<span class="string">"/info"</span>, [<span class="string">"Controllers/UsersController"</span>, <span class="string">"getUserInfo"</span>]); # http://api.domain.com/users/get
									</span><br>
									<span class="inner-code">
										$route-><span class="class">post</span>(<span class="string">"/new"</span>, [<span class="string">"Controllers/UsersController"</span>, <span class="string">"addNewUser"</span>]); # http://api.domain.com/users/new
									</span><br>
									<span class="inner-code">
										$route-><span class="class">post</span>(<span class="string">"/update"</span>, [<span class="string">"Controllers/UsersController"</span>, <span class="string">"UpdateUser"</span>]);    # http://api.domain.com/users/update
									</span>

								<br>});
							</code>
						</div>
					</div>

					<div class="col-md-12">
						<div id="routing-controllers">
							<h1 class="color main title">Routes with Controller</h1>
							<p>You can bind your controllers with your routes, such as every single route referrer to method in any class you have</p>
							<p>Let's see this example.</p>
							<code class="block">
								$route-><span class="class">get</span>($route, [ $ClassName, $methodName ]);
							</code>
							<p>
								As we register any Route. This one is take the <b>$route</b> as first parameter
								and the second one will be an <b>Array</b> that takes two parameters <br>
								First one is the <b>Class Name</b> <br>
								Second one is the <b>Method</b> for this route .
							</p>
							<p>Example: <br>We have a Class named <b>UsersController</b> has one Method named <b>getAllUsers()</b></p>
							<code class="block">
								class <span class="class">UsersController</span> <span class="new">extends</span> <span class="string">BaseController</span> { <br><br>
									<span class="inner-code">
										<span class="new">public</span> function <span class="class">getAllUsers</span>() { <br>

										<span class="inner-code">
											<span class="inner-code">
												<p style="color:#ccc;margin-left:60px;">// Write what ever you want here</p>
											</span>
										</span>
										<span class="inner-code">}</span>
									</span>
								 <br> }
							</code>
							<br>
							<p>
								Then go to <code>routes/api.php</code> and write your route
							</p>
							<code class="block">
								$route-><span class="class">get</span>(<span class="string">"/get_all_users"</span>, array(<span class="string">"Controllers\UsersController"</span>, <span class="string">getAllUsers</span>))
							</code>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>