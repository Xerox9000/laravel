<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Help Shop | HOME</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link href="css/welcome.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
				
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
		<header>
			<h2 id="Title">Help Shop 
			@if (Route::has('login'))
				@auth
                <a href="{{ url('/home') }}">Home</a>
				@else
				<a class="User_Btn" href="{{ route('login') }}">Login</a>
				<a class="User_Btn" href="{{ route('register') }}">Register</a>
				@endauth
			@endif
			</h2>
		</header>
            <div class="middle">
                <div class="content">
                    <div class="Col-1">
						<p>Problem Solving.</br><strong>Redefiened.</strong></p>
					</div>
					<div class="Col-2">
					</div>
                </div>
                <div class="links">
                    <a href="link2.php">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
