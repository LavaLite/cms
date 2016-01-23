<div class="container">
    <div class="row profile">
        <div class="col-md-6  col-md-offset-3">
            <div class="profile-content">
                <h1>Login</h1>
                <hr>
                {!!Form::vertical_open()
                ->id('contact')
                ->method('POST')
                ->class('white-row')!!}

                {!! Form::email('email')
                -> label(trans('user::user.label.email'))
                -> placeholder(trans('user::user.placeholder.email'))!!}
                {!! Form::password('password')
                -> label(trans('user::user.label.password'))
                -> placeholder(trans('user::user.placeholder.password'))!!}
                {!! Form::checkbox('rememberme', 'Remember me ')->inline()!!}
                {!! Form::submit(trans('user::user.signin'), array('class' => 'btn btn-primary pull-right'))!!}
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <a href='#' ><i class="fa fa-facebook"> </i></a>
                        <a href='#' ><i class="fa fa-twitter"> </i></a>
                        <a href='#' ><i class="fa fa-google-plus">  </i></a>
                        <a href='#' ><i class="fa fa-linkedin"> </i></a>
                    </div>
                </div>
                {!! Form::close() !!}
                Forgot password? <a href="/password/reset"> Click to reset </a> <br>
                Don't have an account yet? <a href="/register"> Click to create one </a>
            </div>
        </div>
    </div>
</div>