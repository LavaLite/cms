
jQuery(function( $ ) {
	$('.date-picker').datetimepicker({
		pickTime: false,
		format: "dd MM yyyy",
		minView:2,
		autoclose:true
	});

	$('.time-picker').datetimepicker({
		pickDate: false,
		format: "HH:ii P",
		maxView: 1,
		startView: 1,
		showMeridian: true,
		autoclose: true
	});

	$('.date-time-picker').datetimepicker({
		format: "dd MM yyyy HH:ii P",
		autoclose: true
	});

	$('.html-editor').summernote({
		height: "200px"
	});

	$('.checkbox-switch').attr('data-label-text', '<span class=\'fa fa-filter fa-lg\'></span>');
	$('.checkbox-switch').attr('data-ono-text', '<span class=\'fa fa-check fa-lg\'></span>');
	$('.checkbox-switch').attr('data-off-text', '<span class=\'fa fa-times fa-lg\'></span>');
	$('.checkbox-switch').attr('data-on-color', 'success');
	$('.checkbox-switch').attr('data-off-color', 'danger');
	$('.checkbox-switch').bootstrapSwitch();


	$('.image-up').ezdz({
		text: 'Drop a picture',
		validators: {
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
		}
	});	
});