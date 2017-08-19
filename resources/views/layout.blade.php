<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flexbox</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
		<div id="app">
			@include('layout.header')
			@yield('page-title')
			<div class="container flex">
				<main>
					@yield('content')
				</main>
				<aside>
					@yield('sidebar')
				</aside>
			</div>
		</div>
    </body>
</html>
