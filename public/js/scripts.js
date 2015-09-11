
var appdebug = true;

$(function () {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid",
        errorPlacement: function(error,element) {
            return true;
        }
    });

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

    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-bottom-left",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    };

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
});

$( document ).ajaxComplete(function() {
    $("form[id^='show-'] :input").prop("disabled", true);

    $('.html-editor').summernote({
        height: "200px",
        onImageUpload: function(files) {
            url = $(this).data('upload');
            sendFile(files[0], url, $(this));
        }
    })


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

    $.AdminLTE.boxWidget.activate()
    $("#formEntry").validate();
    $("#formEntry").valid();

    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
});

$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
    app.message(jqxhr, appdebug);
});

$( document ).ajaxSuccess(function( event, xhr, settings ) {
    app.message(xhr, appdebug);
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

var app = {
    'message': function(info, debug){
        if (typeof info === 'undefined') return;
        debug = (typeof debug !== 'undefined') ? debug : appdebug;

        if (info.status >= 100 && info.status <= 199)
            toastr['info'](info.statusText, 'Info');

        if (info.status >= 200 && info.status <= 299) {
            if (info.status != 200) {
                response = jQuery.parseJSON(info.responseText);
                toastr['success'](response.message, response.title);
            }
        }

        if (info.status >= 400 && info.status <= 499)
            toastr['warning'](info.statusText, 'Warning');

        if (info.status >= 500 && info.status <= 599)
            toastr['error'](info.statusText, 'Error');

        if (debug === false) return;
            console.log(info);

        if(info.status >= 400)
            smoke.alert(info.responseText);

        return true;

    },

    'delete' : function(url){
        $.ajax({
            url: url,
            type: 'POST',
            data: {_method: 'DELETE'},
            success:function(data, textStatus, jqXHR)
            {
                app.message(jqXHR);
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                app.message(jqXHR);
            }
        });
        e.preventDefault();
    }
}