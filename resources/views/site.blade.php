<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CIS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon-precomposed.png">
</head>
<body class="skin-purple layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        @yield('topnav')
    </header>

    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                @yield('title')
            </h1>
        </section>

        <section class="content" id="app">

            @yield('content')

        </section>
    </div>

</div>

<script src="{{ elixir('js/appbase.js') }}" type="text/javascript"></script>
<script src="{{ elixir('js/app.js') }}" type="text/javascript"></script>
</body>
</html>