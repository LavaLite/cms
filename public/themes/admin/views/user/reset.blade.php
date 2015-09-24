<div class="login-box">
    <div class="login-logo">
        <a href="{!! URL::to('/admin') !!}">{!! trans('cms.name.html') !!}</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        {!!Former::vertical_open()
        ->id('reset')
        ->method('POST')
        ->action('admin/password/reset')!!}
        {!! csrf_field() !!}
        <div class="form-group has-feedback">
            {!!Former::text('email')!!}
            {!!Former::password('password')!!}
            {!!Former::password('password_confirmation')!!}
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-xs-6">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Reset password</button>
            </div>
            <!-- /.col -->
        </div>
        {!!Former::Close()!!}
        <a href="{!! URL::to('/admin/login') !!}">Back to login</a><br>
    </div>
    <!-- /.login-box-body -->
</div>