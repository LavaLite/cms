<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ Theme::getTitle() }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {{ Theme::asset()->styles() }}
    {{ Theme::asset()->scripts() }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
      </head>
      <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        {{ Theme::partial('header') }}
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            {{ Theme::partial('aside') }}

            <!-- Right side column. Contains the navbar and content of the page -->
            <section class="right-side">


                        {{ Theme::content() }}

            </section><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

        {{ Theme::asset()->container('footer')->scripts() }}
       

    </body>
    </html>