<!-- resources/views/emails/password.blade.php -->

Click here to reset your password: {{ url('user/password/reset/'.$token) }}