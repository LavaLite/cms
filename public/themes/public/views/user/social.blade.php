<!-- resources/views/auth/register.blade.php -->

    <div class="container">
        <div class="row profile">
            <div class="col-md-6  col-md-offset-3">
                <div class="profile-content">
                    <h1>Social Login - To Do</h1>
                    <hr>

                    Token {{$user->token}}<br>

                    <h2> Auth One Providers</h2>
                    {{$user->token}}<br>
                    {{@$user->tokenSecret}}<br>

                    <h2>All Providers</h2>
                    ID: {{$user->getId()}}<br>
                    Nick Name: {{$user->getNickname()}}<br>
                    Name: {{$user->getName()}}<br>
                    Email: {{$user->getEmail()}}<br>
                    Avatar: {{$user->getAvatar()}}<br>
                    <hr>
                    Already have an account ! <a href="{{trans_url('/login')}}"> Click to login </a>
                </div>
            </div>
        </div>
    </div>
