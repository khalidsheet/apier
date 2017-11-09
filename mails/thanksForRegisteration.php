<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HI</title>
</head>
<body>
	<h1>Hello, {{ data['name']|upper }}</h1>

	<div class="mails-test">
		<p style="background: #444; color:#fff; padding: 10px; border: 3px solid #e5e5e5">
			Your E-mail ({{ data['email'] }}) has been locked ! <br>
			Please contact us for more information. <br>
			App team .
		</p>
	</div>
</body>
</html>