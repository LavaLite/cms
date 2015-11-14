<div class="login-box">
  <div class="login-logo">
        <a href="{!! URL::to('/admin') !!}">{!! trans('cms.name.html') !!}</a>
  </div><!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
@if (count($errors) > 0)
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                - {{ $error }}<br/>
            @endforeach
    </div>
@endif
    {!!Former::vertical_open()!!}
      <div class="form-group has-feedback">
        {!!Former::text('email')->raw()!!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {!!Former::password('password')->raw()!!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">

              {!! Former::checkbox('rememberme', 'Remember me ')->inline()!!}

        </div><!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div><!-- /.col -->
      </div>
    {!!Former::Close()!!}

    <a href="{!! URL::to('password/admin/email') !!}">I forgot my password</a><br>
  </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>