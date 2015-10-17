$(function () {

    $('.html-editor').summernote({
        height: "200px",
        onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0], editor, welEditable);
        }
    });

    $('input[type="date"]').datetimepicker({
        format: "yyyy-mm-dd",
        viewMode: 'months'
    }).prop('type','text');

    $('input[type="datetime"]').datetimepicker({
        format: "yyyy-mm-dd hh:ii:00"
    }).prop('type','text');

    $('input[type="time"]').datetimepicker({
            format: "hh:ii:00",
            startView: 'day'
    }).prop('type','text');

    $('a').click(function(event){
        target = $(this).data('target');
        if (target == undefined) return;

        $('#'+target).load($(this).attr('href'), function( response, status, xhr ) {
          if ( status == "error" ) {
            app.message(xhr, false);
          }
        });
        event.preventDefault();
    });

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

});

$( document ).ajaxComplete(function() {

    $('.html-editor').summernote({
        height: "200px",
        onImageUpload: function(files) {
            url = $(this).data('upload');
            sendFile(files[0], url, $(this));
        }
    });


    $('input[type="date"]').datetimepicker({
        format: "yyyy-mm-dd",
        minView: 'month',
        autoclose : true
    }).prop('type','text');

    $('input[type="datetime"]').datetimepicker({
        format: "yyyy-mm-dd hh:ii:00",
        autoclose : true
    }).prop('type','text');

    $('input[type="time"]').datetimepicker({
            format: "hh:ii:00",
            startView: 'day',
            autoclose : true
    }).prop('type','text');


});

$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
    //app.message(jqxhr);
});

$( document ).ajaxSuccess(function( event, xhr, settings ) {
    //app.message(xhr);
});

function sendFile(file, url, editor) {
    var data = new FormData();
    data.append("file", file);
    $.ajax({
        data: data,
        type: "POST",
        url: url,
        cache: false,
        contentType: false,
        processData: false,
        success: function(objFile) {
            editor.summernote('insertImage', objFile.folder+objFile.file);
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
        }
    });
}
