
<section class="content-header">
    @section('heading')
    heading
    @show

    @section('breadcrumb')

    @show
</section>

<section class="content">    <!-- Success-Messages -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block view-message">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Success</h4>
        {{{ $message }}}
    </div>
    @endif

    <div class="box  box-info">
        <div class="box-header">
            <h3 class="box-title">@section('title')
            Title
            @show</h3>

        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            @section('content')
            Content
            @show
        </div><!-- /.box-body -->
    </div>
</section>