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
	{{ Theme::partial('menu') }}
	<div class="container clearfix" id="wrap">
		<div class="row">
			<div class="col-md-8">
				{{ Theme::content() }} 
			</div>
			<div class="col-md-4"> {{ Theme::place('right', Theme::partial('right')) }} </div>
		</div>
	</div>
	{{ Theme::partial('footer') }}
	{{ Theme::asset()->container('footer')->scripts() }}
</body>
</html>
