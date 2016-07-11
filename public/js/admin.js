$(function () {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid",
        errorPlacement: function(error,element) {
            return true;
        }
    });

    $('.html-editor-mini').summernote({
        height: "200px",
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
          ]
    });
    
    $('.html-editor').summernote({
        height: "200px",
        onImageUpload: function(files, editor, welEditable) {
            app.sendFile(files[0], editor, welEditable);
        }
    });

    $('input .pickadate').pickadate({
        format: 'dd mmm, yyyy',
        formatSubmit: 'yyyy-mm-dd',
        hiddenSuffix: '',
        selectMonths: true,
        selectYears: true
    }).prop('type','text');

    $('input .pickatime').pickatime({
        format: 'h:i A',
        formatSubmit: 'HH:i:00',
        hiddenSuffix: '',
        interval: 10,
        selectMonths: true,
        selectYears: true
    }).prop('type','text');

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

/*
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
*/
    $('body').on('click', '[data-action]', function(e) {
        e.preventDefault();

        var $tag = $(this);

        if ($tag.data('action') == 'CREATE')
            return app.create($tag.data('form'), $tag.data('load-to'), $tag.data('datatable'));

        if ($tag.data('action') == 'UPDATE')
            return app.update($tag.data('form'), $tag.data('load-to'), $tag.data('datatable'));

        if ($tag.data('action') == 'DELETE'){
            return app.delete($tag.data('href'), $tag.data('load-to'), $tag.data('datatable'));
        }
        if ($tag.data('action') == 'REQUEST')
            return app.makeRequest($tag.data('method'), $tag.data('href'));

        app.load($tag.data('load-to'), $tag.data('href'));
    });

    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
    });

    jQuery("time.timeago").timeago();
});

$( document ).ajaxComplete(function() {
    $("form[id$='-show'] :input").prop("disabled", true);

    $('.html-editor').summernote({
        height: "200px",
        onImageUpload: function(files) {
            url = $(this).data('upload');
            app.sendFile(files[0], url, $(this));
        }
    });

    $('.html-editor-mini').summernote({
        height: "200px",
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
          ]
    });

    $('input .pickadate').pickadate({
        format: 'dd mmm, yyyy',
        formatSubmit: 'yyyy-mm-dd',
        hiddenSuffix: '',
        selectMonths: true,
        selectYears: true
    }).prop('type','text');

    $('input .pickatime').pickatime({
        format: 'h:i A',
        formatSubmit: 'HH:i:00',
        hiddenSuffix: '',
        interval: 10,
        selectMonths: true,
        selectYears: true
    }).prop('type','text');

    $.AdminLTE.boxWidget.activate()


});


$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
    app.message(jqxhr);
});

$( document ).ajaxSuccess(function( event, xhr, settings ) {
    app.message(xhr);
});


var app = {

    'create' : function(forms, tag, datatable) {
        var form = $(forms);

        if(form.valid() == false) {
            toastr.error('Please enter valid information.', 'Error');
            return false;
        }

        var formData = new FormData();
        params   = form.serializeArray();

        $.each(params, function(i, val) {
            formData.append(val.name, val.value);
        });

        $.each($(forms + ' .html-editor'), function(i, val) {
            formData.append(val.name, $('#'+val.id).code());
        });

        var url  = form.attr('action');

        $.ajax( {
            url: url,
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            success:function(data, textStatus, jqXHR)
            {
                app.load(tag, data.redirect);
                $(datatable).DataTable().ajax.reload( null, false );
            }
        });
    },

    'update' : function(forms, tag, datatable) {
        var form = $(forms);

        if(form.valid() == false) {
            toastr.error('Please enter valid information.', 'Error');
            return false;
        }

        var formData = new FormData($(forms));
        params   = form.serializeArray();

        $.each(params, function(i, val) {
            formData.append(val.name, val.value);
        });

        $.each($(forms + ' .html-editor'), function(i, val) {
            formData.append(val.name, $('#'+val.id).code());
        });

        var url  = form.attr('action');

        $.ajax( {
            url: url,
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            success:function(data, textStatus, jqXHR)
            {
                app.load(tag, data.redirect);
                $(datatable).DataTable().ajax.reload( null, false );
            }
        });
    },

    'delete' : function(target, tag, datatable) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function(){
            var data = new FormData();
            $.ajax({
                url: target,
                type: 'DELETE',
                processData: false,
                contentType: false,
                dataType: 'json',
                success:function(data, textStatus, jqXHR)
                {
                    swal("Deleted!", data.message, "success");
                    app.load(tag, data.redirect);
                    $(datatable).DataTable().ajax.reload( null, false );
                },
                error:function(data, textStatus, jqXHR)
                {
                    console.log(data);
                    swal("Delete failed!", data.message, "error");
                },
            });
        });
    },

    'load' : function(tag, target) {
        console.log(tag + ' ' + target);
        $(tag).load(target);
    },

    'sendFile' : function(file, url, editor) {
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
    },
    
    'dataTable' : function(aoData) {
            var iSortBy = jQuery.grep(aoData, function(n , i){
                console.log(n);
                return (n.name == 'iSortCol_0');
            });

            sSortBy = jQuery.grep(aoData, function(n , i){
                return (n.name == 'mDataProp_' + iSortBy[0].value);
            });
            aoData.push( { 'name' : 'sortBy', 'value' : sSortBy[0].value } );

            iSortOrder = jQuery.grep(aoData, function(n , i){
                return (n.name == 'sSortDir_0');
            });
            aoData.push( { 'name' : 'sortOrder', 'value' : iSortOrder[0].value } );

            page = jQuery.grep(aoData, function(n , i){
                return (n.name == 'iDisplayStart');
            });
            page = page[0].value;

            pageLimit = jQuery.grep(aoData, function(n , i){
                return (n.name == 'iDisplayLength');
            });
            pageLimit = pageLimit[0].value;

            aoData.push( { 'name' : 'page', 'value' : (page/pageLimit)+1 } );
            aoData.push( { 'name' : 'pageLimit', 'value' : pageLimit } );
    },

    'makeRequest' : function(method, target) {
        $.ajax({
            url: target,
            type: method,
            success:function(data, textStatus, jqXHR)
            {
                app.message(jqXHR);
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                app.message(jqXHR);
            }
        });
    },

    'message' : function(info){

        if (info.status == 200) {
            return true;
        }

        var msgTyp;
        var msgTitle;
        var msgText = '';

        if (info.status == 201) {
            msgTitle   = 'Success';
            msgType    = 'success';
            response   = jQuery.parseJSON(info.responseText);
            msgText    = response.message;
        }else if (info.status == 422) {
            msgType    = 'warning';
            msgTitle   = info.statusText;
            response   = jQuery.parseJSON(info.responseText);
            $.each(response, function(key, val){
                msgText    += val + "<br>";
            });
        }else if (info.status >= 100 && info.status <= 199){
            msgTitle   = 'Info';
            msgType    = 'info';
            msgText    = info.statusText;
        }else if (info.status >= 202 && info.status <= 299){
            msgTitle   = 'Success';
            msgType    = 'success';
            msgText    = info.statusText;
        }else if (info.status >= 400 && info.status <= 499){
            msgTitle   = 'Warning';
            msgType    = 'warning';
            msgText    = info.statusText;
        }else if (info.status >= 500 && info.status <= 599){
            msgType    = 'error';
            msgTitle   = 'Error';
            msgText    = info.statusText;
        }

        if (msgType != undefined)
            toastr[msgType](msgText, msgTitle);

        return true;
    }
}

