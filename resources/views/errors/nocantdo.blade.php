<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Missing</title>
	<style>
		html, body{
			margin: 0px;
			padding: : 0px;
			height: 100vh;
			font-family: 'Helvetica', 'sans-serif';
		}
		.cont{
			height: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.header{
			position: relative;
			text-align: center;
			max-height: 80%;
		}
		.header-title{
			position: absolute;
			bottom: 60px;
			z-index: 1;
		}
		.header-back{
			position: absolute;
			top: 60px;
			z-index: 1;

		}
		a:link {
		    color: black;
		    text-decoration: none;
		}
		a:visited {
		    color: black;
		    text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="cont">
		<h1 class="header-title">not allowed</h1>
		<h1 class="header-back"><a href="{{ url()->previous() }}"><< go back</a></h1>
		<img class="header" src="{!! asset('img/grumpycat.png') !!}" alt="grumpycat.png">
	</div>
</body>
</html>