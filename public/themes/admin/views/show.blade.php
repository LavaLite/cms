      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             @section('heading')
                Breadcrumb
             @show
          </h1>
            @section('breadcrumb')
                Breadcrumb
            @show
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">
                @section('icon')
                <i class="fa fa-th"></i>
                @show

                @section('title')
                Entry
                @show</h3>
              <div class="box-tools pull-right">
                @section('buttons')
                Entry
                @show
              </div>
            </div>
            <div class="box-body">
               @section('content')
                Content
                @show
            </div><!-- /.box-body -->
            <div class="box-footer">
              Footer
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@section('script')

@show
