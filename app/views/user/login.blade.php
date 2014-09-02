<header id="page-title">
    <div class="container">
        <h1>Sign In</h1>

        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Sign In</li>
        </ul>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Sign <strong>In</strong></h2>
            <div class="row">
                <div class="col-md-12">
                    @include('user::partials.notifications')
                    {{Former::vertical_open()
                    ->id('contact')
                    ->method('POST')
                    ->class('white-row')
                    ->action('login')}}

                    {{ Former::email('email')
                    -> label(trans('user::user.label.email'))
                    -> placeholder(trans('user::user.placeholder.email'))}}

                    {{ Former::password('password')
                    -> label(trans('user::user.label.password'))
                    -> placeholder(trans('user::user.placeholder.password'))}}

                    <div class="row">
                        <div class="col-md-6">
                            <label class="checkbox">
                                {{ Form::checkbox('rememberMe', 'rememberMe') }} {{trans('user::user.remember')}}
                            </label>
                        </div>
                        <div class="col-md-6" >
                            {{ Form::submit(trans('user::user.signin'), array('class' => 'btn btn-primary pull-right'))}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" >
                            <a href='#' ><i class="fa fa-facebook"> </i></a>
                            <a href='#' ><i class="fa fa-twitter"> </i></a>
                            <a href='#' ><i class="fa fa-google-plus">  </i></a>
                            <a href='#' ><i class="fa fa-linkedin"> </i></a>
                        </div>
                    </div>
                    {{ Former::close() }}
                </div>

            </div>
        </div>
        <div class="col-md-6 "><h2>Forgot <strong>Password</strong>?</h2>
            <div class="white-row">
                <p>
                    Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo.
                </p>
                <div class="row">
                    <div class="col-md-8">
                        {{ Form::open(array('action' => 'Lavalite\User\Controllers\PublicController@forgot', 'method' => 'post')) }}

                        <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => trans('user::user.email'), 'autofocus')) }}
                            {{ ($errors->has('email') ? $errors->first('email') : '') }}
                        </div>

                        {{ Form::submit(trans('user::user.send'), array('class' => 'btn btn-primary'))}}

                        {{ Form::close() }}
                    </div>
                </div>
          </div>

                <div class="row">
                    <div class="col-md-12">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
                      </span>
                  </div>
              </div>
      </div>
  </div>
  <div class="col-md-12 white-row">
    Don't have an account yet? <a href="{{URL::to('register')}}"> Click to create one </a>, it's free!
</div>
</div>
