<html>
    <head>
		<meta charset="UTF-8">
		<!-- mediaクエリを使うのに必要 -->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>@yield('title')</title>
		<link rel="stylesheet" href="/css/index.css">
		<link rel="stylesheet" href="/css/sp/index.css">
    </head>
    <body>
		@yield('header')
		<div class="mainBox">
	        <div class="container">
	            @yield('content')
	        </div>
		</div>
		@yield('footer')
    </body>
</html>
