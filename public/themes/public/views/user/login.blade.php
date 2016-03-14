<div class="container">

    <div class="row profile">
        <div class="col-md-6 col-md-offset-3">
            <div class="profile-content">
                <h1 style="color:#333; font-weight:100;">Login</h1>
                <hr>
                {!!Form::vertical_open()
                ->id('login')
                ->method('POST')
                ->action('login')
                ->class('white-row')!!}
                <label for="email" class="control-label" style="color:#333;">{!!trans('user.user.label.email')!!}</label>
                {!! Form::email('email','')
                -> placeholder(trans('user.user.placeholder.email'))!!}
                <label for="password" class="control-label" style="color:#333;">{!!trans('user.user.label.password')!!}</label>
                {!! Form::password('password','')
                -> placeholder(trans('user.user.placeholder.password'))!!}
                <label for="rememberme" class="control-label" style="color:#333;">Remember me</label>
                {!! Form::checkbox('rememberme', '')->inline()!!}
                {!! Form::submit(trans('user.signin'), array('class' => 'btn btn-primary pull-right'))!!}
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <a href="{!!URL::to('/login/facebook')!!}" ><i class="fa fa-facebook fa-4"> </i></a> &nbsp;
                        <a href="{!!URL::to('/login/twitter')!!}" ><i class="fa fa-twitter fa-4"> </i></a> &nbsp;
                        <a href="{!!URL::to('/login/google')!!}" ><i class="fa fa-google-plus fa-4">  </i></a> &nbsp;
                        <a href="{!!URL::to('/login/linkedin')!!}" ><i class="fa fa-linkedin fa-4"> </i></a> &nbsp;
                    </div>
                </div>
                {!! Form::close() !!}
                <font style="color:#333;">Forgot password?</font> <a href="{{trans_url('/password/reset')}}"> Click to reset </a> <br>
                <font style="color:#333;">Don't have an account yet?</font> <a href="{{trans_url('/register')}}"> Click to create one </a>
            </div>
        </div>
    </div>
</div>
