@if($count == 1)
    @if(!empty($files))
    {!!Form::hidden($field)->id($field)->forceValue('0')!!}
    <div id="file_{!!$field!!}">
        <?php
        $info   = pathinfo($files['file']);
        $ext    = strtolower($info['extension']);
        ?>
        @if (in_array($ext, ['jpg','jpeg', 'png', 'gif']) )
            <a href="{!! URL::to('/file/'.$files['efolder'])!!}/{!!$files['file']!!}" target="_blank">
                <img src="{!! URL::to('/image/sm/'.$files['efolder'])!!}/{!! $files['file'] !!}" class="img-thumbnail image-responsive">
            </a>
        @else
            <a href="{!! URL::to('/image/sm/'.$files['efolder'])!!}/{!!$files['file']!!}" target="_blank">{!!$files['file']!!}</a>
        @endif
        <a href="#" class="remove-image-{!!$field!!}">
            <span class="fa-stack fa-xs">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-times fa-stack-1x fa-inverse"></i>
            </span>
        </a>
        {!!Form::text($field."[caption]", 'Caption')->value($files['caption'])!!}
        {!!Form::hidden($field."[efolder]")->value($files['efolder'])->raw()!!}
        {!!Form::hidden($field."[file]")->value($files['file'])->raw()!!}
    </div>
    <script type="text/javascript">
    $('document').ready(function(){
        $(".remove-image-{!!$field!!}").on('click', function(){
            $('#file_{!!$field!!}').remove();
            $('#{!!$field!!}_delete').val('[]');
        });
    });
    </script>
    @else
    Upload file.
    @endif
@else
    <div id="sortable">
        {!!Form::hidden($field)->forceValue('0')!!}
        @forelse($files as $key => $file)
        <div id="img_box_{!!$field!!}_{!!$key!!}" class="img_box col-md-3 col-sm-3 col-xs-6">
            <div class="img_container">
                <?php
                $info   = pathinfo($file['file']);
                $ext    = strtolower($info['extension']);
                ?>
                @if (in_array($ext, ['jpg','jpeg', 'png', 'gif']) )
                    <a href="{!! URL::to('/file/'.$file['efolder'])!!}/{!!$file['file']!!}" target="_blank"><img src="{!! URL::to('/image/sm/'.$file['efolder'])!!}/{!! $file['file'] !!}" class="img-thumbnail image-responsive"></a>
                @else
                    <div id="file">
                        <a href="{!! URL::to('/file/'.$file['efolder'])!!}/{!!$file['file']!!}" target="_blank">{!!$file['file']!!}</a>
                    </div>
                @endif
                <div class="btn_container">
                    <a href="#" class="remove-image" data-id='{!!$key!!}'>
                    <span class="fa-stack fa-xs">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-times fa-stack-1x fa-inverse"></i>
                    </span>
                    </a>
                    <a href="#"  data-toggle="modal" data-target="#img_popup_{!!$key!!}">
                    <span class="fa-stack fa-xs" >
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                    </a>
                </div>
            </div>
            <div class="modal fade  bs-example-modal-sm" tabindex="-1" id="img_popup_{!!$key!!}" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Caption</h4>
                        </div>
                        <div class="modal-body">
                            <img src="{!! URL::to('/file/'.$file['efolder'])!!}/{!!$file['file']!!}" class="img-thumbnail">
                            {!!Form::text($field."[$key][caption]", 'Caption')->value($file['caption'])!!}
                            {!!Form::hidden($field."[$key][efolder]")->value($file['efolder'])->raw()!!}
                            {!!Form::hidden($field."[$key][file]")->value($file['file'])->raw()!!}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Save &amp; Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        Upload file(s).
        @endif
    </div>

    <script type="text/javascript">
    $('document').ready(function(){
        $(".remove-image").on('click', function(){
            id = $(this).data('id');
            $('#img_box_{!!$field!!}_'+ id).remove();
        });
    });
    var el = document.getElementById('sortable');
    var sortable = Sortable.create(el);
    </script>
@endif