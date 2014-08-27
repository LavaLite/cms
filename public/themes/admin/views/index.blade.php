
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
    <div class="box  box-info">
        <div class="box-header">
            <h3 class="box-title">@section('title')
            Title
            @show</h3>
            <div class="box-tools">
                @section('buttons')
                Buttons
                @show

                @section('search')
                Search
                @show

            </div>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            @section('content')
            Content
            @show
        </div><!-- /.box-body -->
    </div>
</section>
@section('script')

@show
