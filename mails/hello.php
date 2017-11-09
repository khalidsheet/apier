<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HI</title>
</head>
<body style="margin:0;padding:0">
	<div style="text-align: center;background: #e5e5e5;border-bottom: 1px solid #ccc;padding: 20px 0;">
		APP NAME
	</div>
	<div style="padding:10px;">
		<h1>Hello, {{ data['name'] }}</h1>
		<p>Your E-mail <b style="color:#444">{{ data['email'] }}</b> has been blocked.</p>	
		{% for name in names %}
		    <li>{{ name }}</li>
		{% endfor %}
	</div>

</body>
</html>