<!-- resources/views/auth/register.blade.php -->

    <div class="container">
        <div class="row profile">
            <div class="col-md-6  col-md-offset-3">
                <div class="profile-content">
                    <h1>Register</h1>
                    <hr>
                    {!!Former::vertical_open()
                    ->id('contact')
                    ->method('POST')
                    ->class('white-row')!!}

                    {!! Former::text('name')
                    -> label(trans('user::user.label.name'))
                    -> placeholder(trans('user::user.placeholder.name'))!!}
                    {!! Former::email('email')
                    -> label(trans('user::user.label.email'))
                    -> placeholder(trans('user::user.placeholder.email'))!!}
                    {!! Former::password('password')
                    -> label(trans('user::user.label.password'))
                    -> placeholder(trans('user::user.placeholder.password'))!!}
                    {!! Former::submit(trans('user::user.signin'))!!}
                    <br>
                    <br>

                    {!! Former::close() !!}
                    Already have an account ! <a href="/auth/{{ $role }}/login"> Click to login </a>
                </div>
            </div>
        </div>
    </div>
