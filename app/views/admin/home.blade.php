
<h1><i class="fa fa-dashboard fa-2x"></i> {{Lang::get('app.admin_panel')}}</h1>

<div class="row clearfix">
    <div class="col-md-8 column">

            {{Page::gadget()}}

    </div>
    <div class="col-md-4 column">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Quick Access
                </h3>
            </div>
            <div class="panel-body">
                <a href="{{URL::to('/admin/page')}}"><i class="fa fa-book fa-3x  fa-border"></i></a>
                <a href="{{URL::to('/admin/menu')}}"><i class="fa fa-bars fa-3x  fa-border"></i></a>
                <a href="{{URL::to('/admin/user/user')}}"><i class="fa fa-user fa-3x  fa-border"></i></a>
                <a href="{{URL::to('/admin/user/group')}}"><i class="fa fa-group fa-3x  fa-border"></i></a>
                <a href="{{URL::to('/admin/settings')}}"><i class="fa fa-cog fa-3x  fa-border"></i></a>
            </div>
        </div>

    </div>
</div>


