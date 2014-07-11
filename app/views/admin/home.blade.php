@extends('admin.layouts.default')

@section('heading')
<h1>
    {{Lang::get('app.dashboard')}}
</h1>
@stop

@section('content')
<div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        150
                                    </h3>
                                    <p>
                                        New Orders
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        53<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        Bounce Rate
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        44
                                    </h3>
                                    <p>
                                        User Registrations
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        65
                                    </h3>
                                    <p>
                                        Unique Visitors
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div>
<div class="row">
    <div class="col-md-8">
        <div class="box  box-info">
            <div class="box-header">
                <h3 class="box-title">Pages</h3>

            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                {{Page::gadget()}}
            </div><!-- /.box-body -->
        </div>
    </div>

    <div class="col-md-4">
        <div class="box  box-info">
            <div class="box-header">
                <h3 class="box-title">Tools</h3>

            </div><!-- /.box-header -->
            <div class="box-body">
                <a href="{{URL::to('/admin/page')}}" class="btn btn-app">
                    <span class="badge bg-yellow">3</span>
                    <i class="fa fa-book"></i> Pages
                </a>
                <a href="{{URL::to('/admin/menu')}}" class="btn btn-app">
                    <span class="badge bg-aqua">4</span>
                    <i class="fa fa-bars"></i> Menus
                </a>
                <a href="{{URL::to('/admin/user/user')}}" class="btn btn-app">
                    <i class="fa fa-user"></i> Users
                </a>
                <a href="{{URL::to('/admin/user/group')}}" class="btn btn-app">
                    <span class="badge bg-fuchsia">4</span>
                    <i class="fa fa-group"></i>Groups
                </a>
                <a href="{{URL::to('/admin/settings')}}" class="btn btn-app">
                    <i class="fa fa-cog"></i>Settings
                </a>
            </div><!-- /.box-body -->
        </div>
    </div>
</div>
@stop

