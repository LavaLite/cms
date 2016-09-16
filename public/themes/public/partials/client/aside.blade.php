
    <div class="card-box widget-user m-b-0">
        <div>
            <img src="{{users('picture')}}" class="img-responsive img-circle" alt="user">
            <div class="wid-u-info">
                <h4 class="m-t-0 m-b-5">{{users('name')}}</h4>
                <p class="text-muted m-b-5 font-13">{{users('designation')}}</p>
                <small class="text-warning">{{format_date(users('dob'))}}</small>
            </div>
        </div>
    </div>
    <div class="dashboard-side-nav m-t-5">
        <ul>
            <li class="active"><a href="{{ trans_url('home') }}"><i class="icon-game-controller"></i><span>Dashboard</span></a></li>
        </ul>
    </div>
    {!!Menu::menu('user')!!}
