<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>{{ Theme::get('title') }}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{{ Theme::get('keywords') }}">
    <meta name="description" content="{{ Theme::get('description') }}">
    {{ Theme::asset()->styles() }}
    {{ Theme::asset()->scripts() }}
</head>
<body  dir='{{ Localization::getCurrentLocaleDirection() }}'>
   <div class="container"> 
     {{ Theme::partial('header') }}
     <div class="jumbotron">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
    </div> 
    <div class="row marketing">
        <div class="col-lg-12">
            {{ Theme::content() }}
        </div>
    </div>

  {{ Theme::partial('footer') }}
</div> <!-- /container -->
{{ Theme::asset()->container('footer')->scripts() }}
</body>
</html>
