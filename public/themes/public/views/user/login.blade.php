<div class="container">
    <div class="row profile">
        <div class="col-md-6  col-md-offset-3">
            <div class="profile-content">
                <h1>Login</h1>
                <hr>
                {!!Former::vertical_open()
                ->id('contact')
                ->method('POST')
                ->class('white-row')!!}

                {!! Former::email('email')
                -> label(trans('user::user.label.email'))
                -> placeholder(trans('user::user.placeholder.email'))!!}
                {!! Former::password('password')
                -> label(trans('user::user.label.password'))
                -> placeholder(trans('user::user.placeholder.password'))!!}
                {!! Former::checkbox('rememberme', 'Remember me ')->inline()!!}
                {!! Former::submit(trans('user::user.signin'), array('class' => 'btn btn-primary pull-right'))!!}
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
                {!! Former::close() !!}
                Forgot password? <a href="/password/{{ $role }}/email"> Click to reset </a> <br>
                Don't have an account yet? <a href="/auth/{{ $role }}/register"> Click to create one </a>
            </div>
        </div>
    </div>
</div>