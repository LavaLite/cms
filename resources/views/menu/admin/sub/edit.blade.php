<div class="box-header with-border">
    <h3 class="box-title"> View menu [{{$menu->name or 'New menu'}}]</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-menu-save"><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-default btn-sm" id="btn-menu-close"><i class="fa fa-times-circle"></i> Close</button>
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
        ->id('edit-menu')
        ->method('PUT')
        ->files('true')
        ->enctype('multipart/form-data')
        ->action(URL::to('admin/menu/menu/'. $menu->getRouteKey()))!!}
        <div class="tab-content">
            @include('menu::admin.partial.submenu')
        </div>
        {!!Form::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">
(function ($) {
    $('#btn-menu-close').click(function(){
        $('#menu-entry').load('{{URL::to('admin/menu')}}/submenu/{{$menu->getRouteKey()}}');
    });
    $('#btn-menu-save').click(function(){
        $('#edit-menu').submit();
    });
    $('#edit-menu')
    .submit( function( e ) {
        var url  = $(this).attr('action');
        $.ajax( {
            url: url,
            type: 'POST',
            data: new FormData( this ),
            processData: false,
            contentType: false,
            success:function(data, textStatus, jqXHR)
            {
                app.message(jqXHR, {{config('app.debug') ? 'true' : 'false'}});
                $('#menu-entry').load('{{URL::to('admin/menu')}}/submenu/{{$menu->getRouteKey()}}');
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                app.message(jqXHR, {{config('app.debug') ? 'true' : 'false'}});
            }
        });
        e.preventDefault();
    });
}(jQuery));
</script>