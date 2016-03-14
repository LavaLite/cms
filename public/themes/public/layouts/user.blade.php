<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getTitle() }}</title>
        <meta name="description" content="The Lavalite Content Management System">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
        <link href="{{ asset(elixir('css/vendor_public.css')) }}" rel="stylesheet">
        
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>

<body class="user">

    {!! Theme::partial('header') !!}
    <div class="container">
        <div style="min-height:500px;">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    {!! Theme::partial('user') !!}
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    {!! Theme::content() !!}
                </div>
            </div>
        </div>
    </div>
    {!! Theme::partial('footer') !!}
    <script src="{{ asset(elixir('js/vendor_public.js')) }}"></script>
    <script src="{{ asset('js/public.js') }}"></script>
    {!! Theme::asset()->container('footer')->scripts() !!}
</body>
</html>
