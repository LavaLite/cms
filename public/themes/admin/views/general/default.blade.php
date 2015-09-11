<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        @section('heading') Heading @show
        </h1>
        @section('breadcrumb') Breadcrumb @show
    </section>
    <!-- Main content -->
    <section class="content">
        @section('content') Content @show
    </section>
</div>

@section('script')

@show

@section('style')

@show