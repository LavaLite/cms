<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ Theme::getTitle() }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    {{ Theme::asset()->styles() }}
    {{ Theme::asset()->scripts() }}

      </head>
      <body class="page-header-fixed theme-green">

        <!-- header logo: style can be found in header.less -->
        {{ Theme::partial('header') }}

            <!-- Left side column. contains the logo and sidebar -->


            <!-- Right side column. Contains the navbar and content of the page -->


                {{ Theme::content() }}

                   {{ Theme::partial('footer') }}
            <!-- /.right-side -->
        <!-- ./wrapper -->

        {{ Theme::asset()->container('footer')->scripts() }}

    </body>
    </html>