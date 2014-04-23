<!DOCTYPE html>
<html>
<head>
    <title>{{ Theme::getTitle() }}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{{ Theme::get('keywords') }}">
    <meta name="description" content="{{ Theme::get('description') }}">
    {{ Theme::asset()->styles() }}
    {{ Theme::asset()->scripts() }}
</head>
<body dir='{{ Localization::getCurrentLocaleDirection() }}'>
    
        <div id="wrap">
          

            <!-- Container -->
            <div class="container">

                <!-- Content -->
                  {{ Theme::content() }} 

            </div>
        </div>


    {{ Theme::partial('footer') }}
    {{ Theme::asset()->container('footer')->scripts() }}
</body>
</html>
