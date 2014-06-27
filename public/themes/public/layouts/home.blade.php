<!DOCTYPE html>
<html>
<head>
  <title>{{ Theme::get('title') }}</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Lava Lite">

  <meta name="keywords" content="{{ Theme::get('keywords') }}">
  <meta name="description" content="{{ Theme::get('description') }}">
  {{ Theme::asset()->styles() }}
  {{ Theme::asset()->scripts() }}

</head>
<body  dir='{{ Localization::getCurrentLocaleDirection() }}'>

 <div class="container">
    {{ Theme::partial('header') }}
    {{ Theme::content() }}
    {{ Theme::partial('footer') }}
  </div> <!-- /container -->
  {{ Theme::asset()->container('footer')->scripts() }}
</body>
</html>

