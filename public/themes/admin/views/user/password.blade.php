<div class="login-box">
    <div class="login-logo">
        <a href="{!! URL::to('/admin') !!}">{!! trans('cms.name.html') !!}</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        {!!Former::vertical_open()!!}
        {!! csrf_field() !!}
        @if (Session::has('status'))
        <div class="alert alert-info">
            <strong>Info!</strong> {!!  Session::pull('status'); !!}
        </div>
        @else
        If you have forgotten your password - reset it.
        <br />
        <br />
        @endif
        <div class="form-group has-feedback">
            {!!Former::text('email', '')!!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-xs-6">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Send password</button>
            </div>
            <!-- /.col -->
        </div>
        {!!Former::Close()!!}
        <a href="{!! URL::to('/auth/admin/login') !!}">Back to login</a><br>
    </div>
    <!-- /.login-box-body -->
</div>