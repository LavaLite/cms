<!-- resources/views/auth/reset.blade.php -->

<div class="container">
    <div class="row profile">
        <div class="col-md-6  col-md-offset-3">
            <div class="profile-content">
                <h1>Reset <small>Password</small></h1>
                <hr>
                {!!Former::vertical_open()
                ->id('reset')
                ->method('POST')
                ->action('/password/'.$role.'/reset')!!}
                {!! csrf_field() !!}
                {!! Former::hidden('token')->value($token) !!}

                {!! Former::email('email')
                -> label(trans('user::user.label.email'))
                -> placeholder(trans('user::user.placeholder.email'))!!}

                {!! Former::password('password')
                -> label(trans('user::user.label.password'))
                -> placeholder(trans('user::user.placeholder.password'))!!}

                {!! Former::password('password_confirmation')
                -> label(trans('user::user.label.password_confirmation'))
                -> placeholder(trans('user::user.placeholder.password_confirmation'))!!}

                {!! Former::submit(trans('user::user.reset'))!!}
                <br>
                <br>

                {!! Former::close() !!}
            </div>
        </div>
    </div>
</div>
