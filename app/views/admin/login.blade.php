
    <form class="form-signin" method="post">
      <h2 class="form-signin-heading">{{Lang::get('app.name')}}</h2>
      @if ($errors->has('login'))
      <div class="alert alert-error  alert-block">{{ $errors->first('login', ':message') }}</div>
      @endif
      <input type="text" class="form-control" placeholder="Email address" autofocus="" name="email">
      <input type="password" class="form-control" placeholder="Password" name="password">
      <label class="checkbox"><input type="checkbox" value="remember-me"> Remember me      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>