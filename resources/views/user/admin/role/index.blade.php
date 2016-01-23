@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('user.role.name') !!} <small> {!! trans('cms.manage') !!} {!! trans('user.role.names') !!}</small>
@stop

@section('title')
{!! trans('user.role.names') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{!! URL::to('admin') !!}"><i class="fa fa-dashboard"></i> {!! trans('cms.home') !!} </a></li>
    <li class="active">{!! trans('user.role.names') !!}</li>
</ol>
@stop

@section('entry')
<div class="box box-warning" id='entry-role'>
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <th>{!! trans('user.role.label.name')!!}</th>

    </thead>
</table>
@stop
@section('script')
<script type="text/javascript">

var oTable;
$(document).ready(function(){
    $('#entry-role').load('{{URL::to('admin/user/role/0')}}');
    oTable = $('#main-list').dataTable( {
        "ajax": '{{ URL::to('/admin/user/role') }}',
        "columns": [
            {data :'name'},

        ],
        "roleLength": 50
    });

    $('#main-list tbody').on( 'click', 'tr', function () {
        $(this).toggleClass("selected").siblings(".selected").removeClass("selected");

        var d = $('#main-list').DataTable().row( this ).data();

        $('#entry-role').load('{{URL::to('admin/user/role')}}' + '/' + d.id);

    });
});
</script>
@stop

@section('style')
@stop