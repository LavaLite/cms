<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>{{ Theme::getTitle() }}</title>
        <!-- <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset(elixir('css/vendor_public.css')) }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{URL::to('img/favicon.ico')}}">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{URL::to('img/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('img/apple-touch-icon-114x114.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('img/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('img/apple-touch-icon-144x144.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{URL::to('img/apple-touch-icon-120x120.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{URL::to('img/apple-touch-icon-152x152.png')}}">
        <link rel="icon" type="image/png" href="{{URL::to('img/favicon-32x32.png')}}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{URL::to('img/favicon-16x16.png')}}" sizes="16x16">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

<body class="home">


    {!! Theme::content() !!}
    {!! Theme::partial('footer') !!}
    <script src="{{ asset(elixir('js/vendor_public.js')) }}"></script>
    <script src="{{ asset('js/public.js') }}"></script>
    {!! Theme::asset()->container('footer')->scripts() !!}
</body>
</ht