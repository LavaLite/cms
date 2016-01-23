<div class="box-header with-border">
    <h3 class="box-title"> New Menu </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-save"><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" id="btn-cancel"><i class="fa fa-times-circle"></i> Cancel</button>
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
        ->id('create-menu')
        ->method('POST')
        ->action(Trans::to('admin/menu'))!!}
        {!! Form::token() !!}
            <div class="tab-content">
                @include('menu::admin.partial.menu')
            </div>
        {!! Form::close() !!}
    </div>
</div>
</div>
<div class="box-footer" >
&nbsp;
</div>
<script type="text/javascript">
(function ($) {

    $('#btn-save').click(function(){
        $('#create-menu').submit();
    });

    $('#btn-cancel').click(function(){
        $('#entry').load('{!!Trans::to('admin/menu/menu/0')!!}');
    });

    $('#create-menu')
    .submit( function( e ) {
        if($('#create-menu').valid() == false) {
            toastr.error('Please enter valid information.', 'Error');
            return false;
        }
        var url  = $(this).attr('action');
        $.ajax( {
            url: url,
            type: 'POST',
            data: new FormData( this ),
            processData: false,
            contentType: false,
            success:function(data, textStatus, jqXHR)
            {
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
            }
        });
        e.preventDefault();
    });
}(jQuery));
</script>