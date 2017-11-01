<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>T&amp;A Electrical &amp; Hardware</title>
	<link rel="icon" href="{{asset('img/tnasmall.png')}}" type="image/png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	{!! Html::style('css/app.css') !!}
	{!! Html::style('https://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200') !!}

	
	{!! Html::script('https://use.fontawesome.com/11d0d1ac4e.js')!!}
	{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js')!!}
	


</head>

<body>
	@include('partial.navbar')
	@yield('content')

	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	{!! Html::script('js/app.js') !!}
</body>

</html>