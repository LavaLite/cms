<section class="content-header">
    @section('heading')
    Breadcrumb
    @show

    @section('breadcrumb')
    Breadcrumb
    @show
</section>

<section class="content">
    @include('admin.notifications')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">
                @section('icon')
                <i class="fa fa-th"></i>
                @show

                @section('title')
                Entry
                @show
            </h3>
            <div class="box-tools pull-right">
                @section('buttons')
                Entry
                @show
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            @section('content')
            Content
            @show
        </div>
    </div>
</section>