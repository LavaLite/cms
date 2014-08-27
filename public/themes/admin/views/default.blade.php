
<section class="content-header">
    @section('heading')
    heading
    @show

    @section('breadcrumb')

    @show
</section>

<section class="content">    <!-- Success-Messages -->
    @include('admin.notifications')
            @section('content')
            Content
            @show
</section>