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
										<li><a href="#routing-validation">Routing Validation</a></li>
									</ul>
								</li>
								<li>
									<a href="#validation">Validation</a>
									<ul>
										<li><a href="#validation-roles">Available Roles</a></li>
									</ul>
								</li>
								<li>
									<a href="#controllers">Controllers</a>
								</li>
								<li>
									<a href="#mails">Mails</a>
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
								$route-><span class="class">get</span>(<span class="string">"/get_all_users"</span>, array(<span class="string">"Controllers\UsersController"</span>, <span class="string">"getAllUsers"</span>))
							</code>
							<p>This Route will run <b>getAllUsers</b> method inside the <b>UsersController</b> Class</p>
						</div>
					</div>

					<div class="col-md-12">
						<div id="route-with-parameters">
							<h1 class="color main title">Routes with parameters</h1>
							<p>Passing your parameters to your controller</p>
							<p>The <code>{id}</code> is a variable in your route which will passing to your controller named <b>UsersController</b> at <b>getUserInfo</b> method</p>
							<code class="block">
								$route-><span class="class">get</span>(<span class="string">"/user_info/{ id }"</span>, array(<span class="string">"Controllers\UsersController"</span>, <span class="string">"getUserInfo"</span>))
							</code>
							<br>
							<p>So, Your method <b>getUserInfo</b> will receive the parameter as <code>$id</code></p>
							<code class="block">
								class <span class="class">UsersController</span> <span class="new">extends</span> <span class="string">BaseController</span> { <br><br>
									<span class="inner-code">
										<span class="new">public</span> function <span class="class">getUserInfo</span>($id) { <br>

										<span class="inner-code">
											<span class="inner-code">
												<p style="color:#ccc;margin-left:60px;">// Write what ever you want here</p>
												<p style="color:#ccc;margin-left:60px;"><span class="new">return</span> $id;</p>
											</span>
										</span>
										<span class="inner-code">}</span>
									</span>
								 <br> }
							</code>
						</div>
					</div>

					<div class="col-md-12">
						<div id="route-validation">
							<h1 class="color main title">Route Validation</h1>
							<p>route validation let you validate the route before you access the contet</p>
							<code class="block">
								$route-><span class="class">get</span>(<span class="string">"/user_info/{ id:i }"</span>, array(<span class="string">"Controllers\UsersController"</span>, <span class="string">"getUserInfo"</span>))
							</code>
							<br>
							<p><code>:i</code> will matching only numbers <b>/d+</b></p>
							<p>If the request not a number server will return an error</p>
							<code class="block">
								:i => :/d+                # numbers only <br /><br />
								:a => :[a-zA-Z0-9]+       # alphanumeric <br /><br />
								:c => :[a-zA-Z0-9+_\-\.]+  # alnumnumeric and + _ - . characters  <br /><br />
								:h => :[a-fA-F0-9]+       # hex <br /><br />

								use in routes: <br />

								'/user/{name:i}' <br />
								'/user/{name:a}' <br />
							</code>
						</div>
					</div>

					<div class="col-md-12">
						<div id="validation">
							<h1 class="color main title">Validation</h1>
							<p>There are two ways to validating data with this library. Using <code>make</code> to make validation object, then <code>validate</code> it using validate. Or just use <code>validate</code>. Examples:
							<br>
							<br>
							Using <code>make:</code></p>

							<code class="block">
								$validator = <span class="new">new</span> <span class="class">Validator</span>;<br><br>

								// make it<br/>
								$validation = $validator-><span class="class">make</span>($_POST + $_FILES, [
									<span class="inner-code">
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'name' </span> => <span class="string">'required'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'email'</span> => <span class="string">'required|email'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'password'</span> => <span class="string">'required|min:6'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'confirm_password'</span> => <span class="string">'required|same:password'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'avatar' </span> => <span class="string"> 
									    	'required|uploaded_file:0,500K,png,jpeg'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string"> 'skills'</span> => <span class="string">'array'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'skills.*.id'</span> => <span class="string">'required|numeric'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'skills.*.percentage' </span> => <span class="string">'required|numeric'</span>
									    </span>
									</span>
								]);<br><br>

								// then validate<br />
								$validation-><span class="class">validate</span>();<br /><br />

								<span class="new">if</span> ($validation-><span class="class">fails</span>()) {<br />
								    <span style="margin-left:30px;">// handling errors</span><br>
								    <span style="margin-left:30px;">$errors = $validation-><span class="class">errors</span>();</span><br>
								    <span style="margin-left:30px;">echo "< pre >";</span><br>
								    <span style="margin-left:30px;"><span class="class">print_r</span>($errors-><span class="class">firstOfAll</span>());</span><br>
								    <span style="margin-left:30px;">echo "< /pre >";</span><br>
								    <span style="margin-left:30px;">exit;</span>
								    <br>
								} <span class="new">else</span> {<br>
								    <span style="margin-left:30px">// validation passes</span><br>
								    <span style="margin-left:30px" class="class">echo </span><span class="string">"Success!"</span>;<br>
								}
							</code>
							<br><br>
							<p>Or just <b>Validate</b> it</p>

							<code class="block">
								$validator = <span class="new">new</span> <span class="class">Validator</span>;<br><br>

								// make it<br/>
								$validation = $validator-><span class="class">validate</span>($_POST + $_FILES, [
									<span class="inner-code">
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'name' </span> => <span class="string">'required'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'email'</span> => <span class="string">'required|email'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'password'</span> => <span class="string">'required|min:6'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'confirm_password'</span> => <span class="string">'required|same:password'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'avatar' </span> => <span class="string"> 
									    	'required|uploaded_file:0,500K,png,jpeg'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string"> 'skills'</span> => <span class="string">'array'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'skills.*.id'</span> => <span class="string">'required|numeric'</span>,
									    </span>
									    <span style="margin-left:30px;display:block">
									    	<span class="string">'skills.*.percentage' </span> => <span class="string">'required|numeric'</span>
									    </span>
									</span>
								]);<br><br>

								<span class="new">if</span> ($validation-><span class="class">fails</span>()) {<br />
								    <span style="margin-left:30px;">// handling errors</span><br>
								    <span style="margin-left:30px;">$errors = $validation-><span class="class">errors</span>();</span><br>
								    <span style="margin-left:30px;">echo "< pre >";</span><br>
								    <span style="margin-left:30px;"><span class="class">print_r</span>($errors-><span class="class">firstOfAll</span>());</span><br>
								    <span style="margin-left:30px;">echo "< /pre >";</span><br>
								    <span style="margin-left:30px;">exit;</span>
								    <br>
								} <span class="new">else</span> {<br>
								    <span style="margin-left:30px">// validation passes</span><br>
								    <span style="margin-left:30px" class="class">echo </span><span class="string">"Success!"</span>;<br>
								}
							</code>
						</div>
					</div>

					<div class="col-md-12">
						<div id="validation-roles">
							<h1 class="color main title">Available Rules</h1>
							<ul>
								<li><a href="#required">required</a></li>
								<li><a href="#required_if">required_if</a></li>
								<li><a href="#required_unless">required_unless</a></li>
								<li><a href="#required_with">required_with</a></li>
								<li><a href="#required_without">required_without</a></li>
								<li><a href="#required_with_all">required_with_all</a></li>
								<li><a href="#required_without_all">required_without_all</a></li>
								<li><a href="#uploaded_file">uploaded_file</a></li>
								<li><a href="#email">email</a></li>
								<li><a href="#alpha">alpha</a></li>
								<li><a href="#numeric">numeric</a></li>
								<li><a href="#alpha_num">alpha_num</a></li>
								<li><a href="#alpha_dash">alpha_dash</a></li>
								<li><a href="#in">in</a></li>
								<li><a href="#not_in">not_in</a></li>
								<li><a href="#min">min</a></li>
								<li><a href="#max">max</a></li>
								<li><a href="#between">between</a></li>
								<li><a href="#url">url</a></li>
								<li><a href="#ip">ip</a></li>
								<li><a href="#ipv4">ipv4</a></li>
								<li><a href="#ipv6">ipv6</a></li>
								<li><a href="#array">array</a></li>
								<li><a href="#same">same</a></li>
								<li><a href="#regex">regex</a></li>
								<li><a href="#date">date</a></li>
								<li><a href="#accepted">accepted</a></li>
								<li><a href="#present">present</a></li>
								<li><a href="#different">different</a></li>
								<li><a href="#after">after</a></li>
								<li><a href="#before">before</a></li>
								<li><a href="#callback">callback</a></li>
							</ul>	
							<br><br>
							<div class="roles">
								<h4 id="required">required</h4>
								<p>The field under this validation must be present and not 'empty'.</p>
								<p>For uploaded file, <code>$_FILES['key']['error']</code> must not <code>UPLOAD_ERR_NO_FILE</code></p><br><br>

								<h4 id="required_if">required_if</h4>
								<p>required_if:another_field,value_1,value_2,...</p><br>
								<p>The field under this rule must be present and not empty if the anotherfield field is equal to any value.</p>

								<p>For example <code>required_if:something,1,yes,on</code> will be required if <b>something</b> value is one of <b>1</b>, <b>'1'</b>, <b>'yes'</b>, or <b>'on'</b>.</p><br><br>

								<h4 id="required_unless">required_unless</h4>
								<p>required_unless:another_field,value_1,value_2,...</p>
								<p>The field under validation must be present and not empty unless the anotherfield field is equal to any value.</p><br><br>

								<h4 id="required_with">required_with</h4>
								<p>required_with:field_1,field_2,...</p>
								<p>The field under validation must be present and not empty only if any of the other specified fields are present.</p><br><br>

								<h4 id="required_without">required_without</h4>
								<p>required_without:field_1,field_2,...</p>
								<p>The field under validation must be present and not empty only when any of the other specified fields are not present.</p><br><br>

								<h4 id="required_with_all">required_with_all</h4>
								<p>required_with_all:field_1,field_2,...</p>
								<p>The field under validation must be present and not empty only if all of the other specified fields are present.</p><br><br>

								<h4 id="required_without_all">required_without_all</h4>
								<p>required_without_all:field_1,field_2,...</p>
								<p>The field under validation must be present and not empty only when all of the other specified fields are not present.</p><br><br>

								<h4 id="uploaded_file">uploaded_file</h4>
								<p>uploaded_file:min_size,max_size,file_type_a,file_type_b,...</p>
								<p>This rule will validate $_FILES data, but not for multiple uploaded files. Field under this rule must be following rules below to be valid:</p>
								<ul>
									<li><code>$_FILES['key']['error']</code> must be <b>UPLOAD_ERR_OK</b> or <b>UPLOAD_ERR_NO_FILE</b>. For <b>UPLOAD_ERR_NO_FILE</b> you can validate it with required rule.</li>
									<li>If min size is given, uploaded file size <b>MUST NOT</b> be lower than min size.</li>
									<li>If max size is given, uploaded file size <b>MUST NOT</b> be higher than max size.</li>
									<li>If file types is given, mime type must be one of those given types.</li>
								</ul>
								<br>
								<p>Here are some example definitions and explanations</p>
								<table class="table table-bordered table-striped">
									<tr>
										<th>Definition</th>
										<th>Explanation</th>
									</tr>
									<tr>
										<td>uploaded_file</td>
										<td>Uploaded file is optional. When it is not empty, it must be <b>ERR_UPLOAD_OK</b>.</td>
									</tr>
									<tr>
										<td>required</td>
										<td>uploaded_file</td>
									</tr>
									<tr>
										<td>uploaded_file:0,1M</td>
										<td>uploaded file size must be between 0 - 1 MB, but uploaded file are optional</td>
									</tr>
									<tr>
										<td>required</td>
										<td>uploaded_file:0,1M,png,jpeg</td>
									</tr>
								</table>
								<br><br>

								<h4 id="email">email</h4>
								<p>The field under this validation must be valid email address.</p>
								<br><br>

								<h4 id="alpha">alpha</h4>
								<p>The field under this rule must be entirely alphabetic characters.</p>
								<br><br>

								<h4 id="numeric">numeric</h4>
								<p>The field under this rule must be numeric.</p>
								<br><br>

								<h4 id="alpha_num">alpha_num</h4>
								<p>The field under this rule must be entirely alpha-numeric characters.</p>
								<br><br>

								<h4 id="alpha_dash">alpha_dash</h4>
								<p>The field under this rule may have alpha-numeric characters, as well as dashes and underscores.</p>
								<br><br>

								<h4 id="in">in</h4>
								<p>in:value_1,value_2,...</p>
								<p>The field under this rule must be included in the given list of values.</p>
								<br><br>

								<h4 id="not_in">not_in</h4>
								<p>not_in:value_1,value_2,...</p>
								<p>The field under this rule must not be included in the given list of values.</p>
								<br><br>

								<h4 id="min">min</h4>
								<p>min:number</p>
								<p>
									The field under this rule must have a size greater or equal than the given number.<br>
									For string data, value corresponds to the number of characters. For numeric data,<br> value corresponds to a given integer value. For an array, size corresponds to the count of the array.</p>
								<br><br>

								<h4 id="max">max</h4>
								<p>max:numebr</p>
								<p>The field under this rule must have a size lower or equal than the given number. Value size calculated in same way like <b>min</b> rule.</p>
								<br><br>

								<h4 id="between">between</h4>
								<p>between:min,max</p>
								<p>The field under this rule must have a size between min and max params. Value size calculated in same way like <b>min</b> and <b>max</b> rule.</p>
								<br><br>

								<h4 id="url">url</h4>
								<p>The field under this rule must be valid url format.</p>
								<br><br>

								<h4 id="ip">ip</h4>
								<p>The field under this rule must be valid ipv4 or ipv6.</p>
								<br><br>

								<h4 id="ipv4">ipv4</h4>
								<p>The field under this rule must be valid ipv4.</p>
								<br><br>

								<h4 id="ipv6">ipv6</h4>
								<p>The field under this rule must be valid ipv6.</p>
								<br><br>


								<h4 id="array">array</h4>
								<p>The field under this rule must be array.</p>
								<br><br>


								<h4 id="same">same</h4>
								<p>same:another_field</p>
								<p>The field value under this rule must be same with <b>another_field</b> value.</p>
								<br><br>

								<h4 id="regex">regex</h4>
								<p>regex:/your-regex/</p>
								<p>The field under this rule must be match with given regex.</p>
								<br><br>


								<h4 id="date">date</h4>
								<p>date:format</p>
								<p>The field under this rule must be valid date format. Parameter format is optional, default format is Y-m-d.</p>
								<br><br>

								<h4 id="accepted">accepted</h4>
								<p>The field under this rule must be one of <b>'on'</b>, <b>'yes'</b>, <b>'1'</b>, <b>'true'</b>, or <b>true</b>.</p>
								<br><br>


								<h4 id="present">present</h4>
								<p>The field under this rule must be exists, whatever the value is.</p>
								<br><br>

								<h4 id="different">different</h4>
								<p>different:another_field</p>
								<p>Opposite of <b>same</b>. The field value under this rule must be different with <b>another_field</b> value.</p>
								<br><br>

								<h4 id="after">after</h4>
								<p>after:tomorrow</p>
								<p>Anything that can be parsed by strtotime can be passed as a parameter to this rule. Valid examples include :<br>
									<ul>
										<li>after:next week</li>
										<li>after:2016-12-31</li>
										<li>after:2016</li>
										<li>after:2016-12-31 09:56:02</li>
									</ul>
								</p>
								<br><br>

								<h4 id="before">before</h4>
								<p>This also works the same way as the <b>after</b> rule. Pass anything that can be parsed by strtotime</p>
								<br><br>

								<h4 id="callback">callback</h4>
								<p>You can use this rule to define your own validation rule. This rule can't be registered using string pipe. To use this rule, you should put Closure inside array of rules.</p><br>

								<p>For example:</p>
								<code class="block">
									$validation = $validator-><span class="class">validate</span>($_POST, [<br>
									    <span style="margin-left:20px" class="string">'even_number'</span> => [<br>
									        <span style="margin-left:30px" class="string">'required'</span>,<br>
									        <span style="margin-left:35px" class="class">function</span> ($value) {
									            <span style="margin-left:30px">// false = invalid</span><br>
									            <span style="margin-left:50px">return (<span class="class">is_numeric</span>($value) AND $value % 2 === 0);</span><br>
									        <span style="margin-left:35px">}</span><br>
									    <span style="margin-left: 20px">]</span><br>
									]);
								</code>
								<br><br>
							</div>		
						</div>
					</div>


					<div class="col-md-12">
						<div id="controllers">
							<h1 class="color main title">Controllers</h1>
							<p>You can create <b>Controller</b> class inside Controllers folder</p>
							<p>After you created your awesome controller there is one step left!</p>
							<p>Every Controller should have these lines in the first of file</p>
							<code class="block">
								<span class="new">namespace</span> App\Controllers;<br>
								<span class="new">use</span> App\<span class="class">Controller</span> as BaseController;<br>
								<span class="new">use</span> <span class="class">KAD</span>; // the Query Builder<br>
								<span class="new">use</span> Rakit\Validation\<span class="class">Validator</span>;<br>
								<span class="new">use</span> Carbon\<span class="class">Carbon</span>;
							</code>
							<br>

							<p>The controller should <b>extends</b> from <code>BaseController</code></p><br>
							<p>The final structure for Controller: </p>
							<code class="block">
								<span class="new">namespace</span> App\Controllers;<br>
								<span class="new">use</span> App\<span class="class">Controller</span> as BaseController;<br>
								<span class="new">use</span> <span class="class">KAD</span>; // the Query Builder<br>
								<span class="new">use</span> Rakit\Validation\<span class="class">Validator</span>;<br>
								<span class="new">use</span> Carbon\<span class="class">Carbon</span>;<br><br><br>

								<span class="class">class</span> TestController <span class="new">extends</span> <span class="string">BaseController</span><br>
								{<br>
									<span style="margin-left:20px">// your methods goes here</span>
								<br>}
							</code>
						</div>
					</div>


					<div class="col-md-12">
						<div id="mails">
							<h1 class="color main title">Mails</h1>
							<p>You can send mail with <b>PHPMailer library</b></p>
							<p>To send email, just write these lines in your method</p>
							<code class="block">
						        <span class="new">try</span> {<br>
						            <span style="margin-left:20px;">$this</span>->mail-><span class="class">addAddress</span>('mail@domain.com', 'Khalid');     // Add a recipient<br><br>

						            <span style="margin-left:20px;">//Content</span><br>
						            <span style="margin-left:20px;">$this</span>->mail-><span class="class">isHTML</span>(true);       // Set email format to HTML<br>
						            <span style="margin-left:20px;">$this</span>->mail->Subject = 'Here is the subject';<br>
						            <span style="margin-left:20px;">$this</span>->mail->Body    = 'السلام عليكم';<br>
						            <span style="margin-left:20px;">//$mail</span>->AltBody = 'This is the body in plain text for non-HTML mail clients';<br>

						            <span style="margin-left:20px;">$this</span>->mail-><span class="class">send</span>();<br>
						            <span></echo 'Message has been sent';<br>
						        } <span class="new">catch</span> (<span class="class">Exception</span> $e) {<br>
						            <span style="margin-left:20px;">echo</span> 'Message could not be sent.';<br>
						            <span style="margin-left:20px;">echo</span> 'Mailer Error: ' . $this->mail->ErrorInfo;<br>
						        }<br>
							</code><br>	

							<p>You can store all your mails in <code>mails</code> folder</p>
							<p>for Example we'll create an html page <b>successfullyRegisteredMail.php</b> inside <code>mails</code> folder and we'll write a basic email page</p>
							<p>for sure you need to send this page to your users for example when the successfully register in your websiete</p><br>	
							
							<p>You can use the built-in function in our framework called <code>getMailContent()</code> <br>
								this function takes one parameter and it will be the file name we just created.
							</p>
							<code class="block">
								$html = <span class="class">getMailContent</span>(<span class="string">"successfullyRegisteredMail"</span>); // "successfullyRegisteredMail" located in <b>mails </b>folder
							</code>
							<br><br><br>
							<p>For more info about how to using mailes visit: <a href="https://github.com/PHPMailer/PHPMailer">PHPMailer</a></p>
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