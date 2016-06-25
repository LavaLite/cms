<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{!!user('admin.web')->picture!!}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{!!user('admin.web')->name!!}</p>

        <a href="/admin"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION<d/li>
      {!!Menu::menu('admin', 'menu::menu.admin')!!}
      <li class="header">Masters</li>
      <li><a href="{{ URL::to('admin/settings/setting') }}"><i class="fa fa-circle-o text-red"></i> <span>Settings</span></a></li>
      <li><a href="{{ URL::to('admin/masters') }}"><i class="fa fa-circle-o text-yellow"></i> <span>Masters</span></a></li>
      <li><a href="{{ URL::to('admin/reports') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Reports</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
