
<section class="content-header">
    @section('heading')
    Breadcrumb
    @show

    @section('breadcrumb')
    Breadcrumb
    @show
</section>

<section class="content">    <!-- Success-Messages -->
    @include('admin.notifications')
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
                @section('tabs')
                No tabs
                @show
            <li class=" header pull-right">
                @section('icon')
                <i class="fa fa-th"></i>
                @show

                @section('title')
                Entry
                @show
            </li>
        </ul>
            @section('content')
            Content
            @show
    </div>

    </section>
@section('script')

@show
