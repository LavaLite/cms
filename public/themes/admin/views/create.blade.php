<section class="content-header">
    @section('heading')
    @show

    @section('breadcrumb')
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
                @show
            </div>
        </div>
            @yield('content')
    </div>
</section>
@section('script')

@show