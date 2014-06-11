<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
  <div class='container'>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::to('admin') }}">{{Lang::get('app.name')}}</a>
    </div>
    <div class="collapse navbar-collapse">
      @if (Sentry::check())
      {{Menu::menu('admin')}}
      @endif
      <ul class="nav navbar-nav navbar-right">
        @if (Sentry::check())
        <li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ URL::to('admin/user/user/') }}"><span class="badge pull-right"></span>{{Lang::get('menu.user')}}</a></li>
            <li><a href="{{ URL::to('admin/user/group/') }}">{{Lang::get('menu.group')}}</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li role="presentation" class="dropdown-header">{{Lang::get('menu.my_account')}}</li>
            <li><a href="{{ URL::to('admin/user/user')}}/{{Sentry::getUser()->id }}/edit#profile">{{Lang::get('menu.profile')}} </a></li>
            <li><a href="{{ URL::to('admin/user/user')}}/{{ Sentry::getUser()->id }}/edit#password">{{Lang::get('menu.change_password')}}</a></li>
            <li role="presentation" class="divider"></li>
            <li><a href="{{ URL::to('admin/cache/clear') }}">{{Lang::get('menu.clearcache')}}</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation" class="dropdown-header">{{Lang::get('menu.change_language')}}</li>
            @foreach(Localization::getSupportedLocales() as $localeCode => $properties)
            <li>
              <a rel="alternate" hreflang="{{$localeCode}}" href="{{Localization::getLocalizedURL($localeCode) }}/">
                {{{ $properties['native'] }}}
              </a>
            </li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{ URL::to('admin/logout') }}"><i class="fa fa-sign-out"></i> </a></li>
        @else
        <li><a href="{{ URL::to('admin/login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
        @endif
      </ul>
    </div>
  </div>
</div>
<!--/.nav-collapse -->
