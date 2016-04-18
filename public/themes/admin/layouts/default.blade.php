<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{!! Theme::getTitle() !!}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

<link href="{{ asset('css/vendor_admin.css') }}" rel="stylesheet">
{!! Theme::asset()->styles() !!}
{!! Theme::asset()->scripts() !!}
    </head>
    <body class="sidebar-mini skin-red">
        <div class="wrapper">
            {!! Theme::partial('header') !!}
            {!! Theme::partial('aside') !!}
            {!! Theme::content() !!}
            {!! Theme::partial('right') !!}
            {!! Theme::partial('footer') !!}
        </div>
    </body>
{!! Theme::asset()->container('footer')->scripts() !!}
<script src="{{ asset('js/vendor_admin.js') }}"></script>
{!! Theme::asset()->container('extra')->scripts() !!}
</html>
