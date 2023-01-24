<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>about</title>
</head>
<body>
	<br><br><br><br><br>
	<h1>about us</h1>

	<a href="{{route('go')}}">go to controll1</a>
	<a href="{{URL::to('/eligible?age2=40')}}">go to eligible</a>

	<?php 

		$number = 10;


	 ?>


@for ($i = 0; $i < $number; $i++)
    <h1>The current value is {{ $i }}</h1>
@endfor




</body>
</html>