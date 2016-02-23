<div class="container">
    <div class="row profile">
        <div class="col-md-6  col-md-offset-3">
            <div class="profile-content">
                <h1>Reset <small>Password</small></h1>
                <hr>

                {!!Form::vertical_open()
                ->method('POST')
                ->action('password/email')!!}
                {!! csrf_field() !!}
                @if (Session::has('status'))
                <div class="alert alert-info">
                    <strong>Info!</strong> {!!  Session::pull('status'); !!}
                </div>
                @else
                If you have forgotten your password - reset it.
                @endif
                {!!Form::text('email')!!}
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Send password</button>
                    </div>
                    <!-- /.col -->
                </div>
                {!!Form::Close()!!}
                <a href="{{trans_url('/login')}}">Back to login</a><br>
            </div>
        </div>
    </div>
</div>