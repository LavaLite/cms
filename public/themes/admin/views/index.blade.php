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
    @section('entry') 
        <div class="box box-warning" id='entry'>
        </div>
    @show
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                @section('title') Entry @show</h3>
                <div class="box-tools pull-right">
                    @section('tools') Tools @show
                </div>
            </div>
            <div class="box-body">
                @section('content') Content @show
            </div>
        </div>
    </section>
</div>
@section('script')

@show

@section('style')

@show 