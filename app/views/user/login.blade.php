<div class="row clearfix">
    <div class="col-md-12 column">
        <div class="page-header">
            <h1>
                Login <small>login to the website</small>
            </h1>
        </div>
        <div class="row clearfix">
            <div class="col-md-8 column">
            @include('user::partials.notifications')
            {{ Form::open(array('action' => 'Lavalite\User\Controllers\SessionController@store')) }}

            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => trans('user::user.email'), 'autofocus')) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => trans('user::user.pword')))}}
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>

            <label class="checkbox">
                {{ Form::checkbox('rememberMe', 'rememberMe') }} {{trans('user::user.remember')}}
            </label>
            {{ Form::submit(trans('user::user.label.login'), array('class' => 'btn btn-primary'))}}
            <a class="btn btn-link" href="{{ URL::to('/forgot') }}">{{Lang::get('user::user.forgot')}}?</a>                {{ Form::close() }}
            </div>
            <div class="col-md-4 column">

                <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"> Facebook</i></button>
                <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-twitter"> Twitter</i></button>
                <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-google-plus"> Google Plus</i></button>
                <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-linkedin"> Linkedin</i></button>
            </div>
            <div class="col-md-12 column">
                <h2> New User ? </h2>
                    <p>By creating an account with us, you will be able to manage all the activities on this website. <a href="{{URL::to('register')}}"> Click here </a> to Create an account</p>
            </div>
        </div>
    </div>
</div>
