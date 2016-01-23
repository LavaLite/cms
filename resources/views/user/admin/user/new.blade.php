<div class="box-header with-border">
    <h3 class="box-title">  {{ trans('user.user.names') }}</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-new-user"><i class="fa fa-plus-circle"></i> {{ trans('cms.new') }} </button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" style="min-height:100px">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h1 class="text-center">
            <small>
            <button type="button" class="btn btn-app" data-toggle="tooltip" data-placement="top" title=""  id="btn-new-user-icn">
            <span class="badge bg-purple">{{ User::count() }}</span>
            <i class="fa fa-plus-circle  fa-3x"></i>
            {{ trans('cms.create') }} {{ trans('user.user.name') }}
            </button>
            <br>{{ trans('user.user.text.preview') }}
            </small>
            </h1>
        </div>
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#btn-new-user, #btn-new-user-icn').click(function(){
        $('#entry-user').load('{{URL::to('admin/user/user/create')}}');
    });
});
</script>