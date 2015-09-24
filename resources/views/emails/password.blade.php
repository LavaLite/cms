<!-- resources/views/emails/password.blade.php -->

Click here to reset your password: {{ url('password/reset/'.$token) }}