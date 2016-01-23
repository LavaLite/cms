{!! Form::open_vertical()
-> action ('admin/user/change-password')
-> method ('POST')
->id('form-change-password') !!}
{!! csrf_field(); !!}
{!! Form::password('password')->minlength(6)->required() !!}
{!! Form::password('password_confirmation')->setAttribute('equalTo', '#password')->required() !!}
{!! Form::close() !!}