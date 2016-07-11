<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>{!! Theme::getTitle() !!}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/vendor_admin.css') }}" rel="stylesheet">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>
    <body class="login-page">
        {!! Theme::content() !!}
    </body>
    {!! Theme::asset()->container('footer')->scripts() !!}
    <script src="{{ asset('js/vendor_admin.js') }}"></script>
</html>
