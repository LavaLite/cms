$(function(){

    $('.date-picker').datetimepicker({
        pickTime: false,
        autoclose:true,
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        }
    });

    $('.time-picker').datetimepicker({
        pickDate: false,
        autoclose: true,
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        }
    });

    $('.date-time-picker').datetimepicker({
        autoclose: true,
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        }
    });

    $('.html-editor').summernote({
        height: "200px",
        onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0], editor, welEditable);
        }
    });

    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function(html) {
      var switchery = new Switchery(html, {
                        color          : '#3cc8ad'
                      , secondaryColor : '#db5554'
                      , className      : 'switchery'
                      , disabled       : false
                      , disabledOpacity: 0.5
                      , speed          : '0.5s'
                    });
    });

    $('.image-up').ezdz({
        text: 'Drop a picture',
        /*validators: {
            maxWidth:  900,
            maxHeight: 900,
            maxSize: 1000000
        },
        reject: function(file, errors) {
            if (errors.mimeType) {
                alert(file.name + ' must be an image.');
            }

            if (errors.maxWidth) {
                alert(file.name + ' must be width:900px max.');
            }

            if (errors.maxHeight) {
                alert(file.name + ' must be height:900px max.');
            }
        }*/
    });



});

function sendFile(file, editor, welEditable) {
    urlup = welEditable.parent('div').prev('textarea').data('upload');
    data = new FormData();

    data.append("file", file);
    $.ajax({
        data: data,
        type: "POST",
        url: urlup,
        cache: false,
        contentType: false,
        processData: false,
        success: function(url) {
                editor.insertImage(welEditable, url);
        }
    });
}


