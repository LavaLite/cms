<!-- resources/views/emails/password.blade.php -->

Click here to reset your password: {{ url('password')}}/{{ Request::segment(2) }}/reset/{{ $token }}