<div class="box-header with-border">
    <h3 class="box-title"> View menu [{{$menu->name or 'New menu'}}]</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-success btn-sm" id="btn-menu-create"><i class="fa fa-plus-circle"></i> Sub Menu</button>
        @if($menu->id)
            <button type="button" class="btn btn-primary btn-sm" id="btn-menu-edit"><i class="fa fa-pencil-square"></i> Edit</button>
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="btn-menu-delete"><i class="fa fa-times-circle"></i> Delete</button>
        @endif
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Menu</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('show-menu')
        ->method('PUT')
        ->action(Trans::to('admin/menu/menu'. $menu->getRouteKey()))!!}
        <div class="tab-content">
            @include('menu::admin.partial.menu')
        </div>
        {!!Form::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">
$(document).ready(function(){

    $('#btn-menu-create').click(function(){
        $('#menu-entry').load('{{Trans::to('admin/menu')}}/submenu/create?parent_id={{$menu->getRouteKey()}}');
    });

    @if($menu->id)
    $('#btn-menu-edit').click(function(){
        $('#menu-entry').load('{{Trans::to('admin/menu/menu')}}/{{$menu->getRouteKey()}}/edit');
    });

    $('#btn-menu-delete').click(function(){
        smoke.confirm("Are you sure?", function(e){
            if (e){
                var data = new FormData();
                $.ajax({
                    url: '{{Trans::to('admin/menu/menu')}}/{{$menu->getRouteKey()}}',
                    type: 'DELETE',
                    processData: false,
                    contentType: false,
                    success:function(data, textStatus, jqXHR)
                    {
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                    }
                });
            }else{
            }
        }, {
            ok: "Yes",
            cancel: "No",
            classname: "custom-class",
            reverseButtons: true
        });
    });
    @endif
});
</script>