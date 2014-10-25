<!DOCTYPE html>
<html>
    <head>
        <title>{{ Config::get('site.name') }}</title>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="stylesheet" href="{{ Tee\System\Theme::asset('assets/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ Tee\System\Theme::asset('assets/css/style.css') }}"/>
        <script type="text/javascript" src="{{ Tee\System\Theme::asset('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ Tee\System\Theme::asset('assets/js/bootstrap.min.js') }}"></script>
    </head>
    <body>
        @yield('body_content')
    </body>
</html>