$(document).ready(function(){

	$('.manager-content').on('click', '.inactive', function(e){
		e.preventDefault();
	});

	if ($('#main-content-select').length) {
		if ($('#main-content-select').find('option:selected').val() != '') {
			$('#follow-btn').removeClass('inactive');
		}

		$('#main-content-select').on('change', function(){
			// $('#update-form').find('input[name=id]').val($(this).find('option:selected').val());
			$(this).closest('form').submit();
		});
	}

	$('#update-form').submit(function(e){
		e.preventDefault();
	});

	var required = $('[required]');
	if(required.length){
		required.each(function(){
			$(this).prev('label').prepend('<i class="fa fa-asterisk"></i>');
		});
	}

	$('#submit').on('click', function(e){
		var stop = false;

		required.each(function(){
			if($(this).val() == ''){
				stop = true;
			};
		});

		if(!stop && $('.editor').length){
			tinyMCE.triggerSave();
		}
		if(!stop){
			$.ajax({
				type: 'POST',
				url: $('#update-form').attr('action'),
				data: $('#update-form .item').serializeArray(),
				success: function(info){
					var formMsg = $('#form-msg');
					formMsg.show().html(info);
					if(formMsg.find('.success').length){
						setTimeout(function(){
							formMsg.fadeOut('slow')
						},1000);
					}
					if($('#log-me-out').length){
						setTimeout(function(){
							window.location.href = 'logout.php';
						},1500);
					}
					if($('#goto').length && formMsg.find('.success').length){
						setTimeout(function(){
							window.location.href = $('#goto').data('url');
						},1000);
					}
				}
			});
		}
	});

	$('form').on('change', 'input, textarea, select', function(){
		$('#form-msg').text('');
	});

	$('form').on('click', 'a', function(){
		$('#form-msg').text('');
	});

	if($('.datepicker').length){
		$('.DT').datetimepicker({
			format: 'Y-m-d H:i:00',
			formatTime:'g:i A',
			minDate:0
		});
		$('.D').datetimepicker({
			format: 'Y-m-d',
			timepicker:false
		});
	}

	if($('.editor').length){
		tinymce.init({
		selector: ".editor",
		entity_encoding : "raw",
		// ===========================================
		// INCLUDE THE PLUGIN
		// ===========================================
		plugins: [
		"advlist autolink lists link image charmap print preview anchor",
		"searchreplace visualblocks code fullscreen",
		"insertdatetime media contextmenu paste"
		],
		// ===========================================
		// PUT PLUGIN'S BUTTON on the toolbar
		// ===========================================
		menubar: "insert edit format view tools",
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		image_class_list: [
			{title: 'None', value: ''},
			{title: 'Float Left', value: 'float-left'},
			{title: 'Float Right', value: 'float-right'},
			{title: 'Centered Responsive', value: 'responsive-img block center'},
			{title: 'Responsive', value: 'responsive-img'},
			{title: 'Centered', value: 'block center'}
		],
		file_browser_callback: RoxyFileBrowser,
		// ===========================================
		// SET RELATIVE_URLS to FALSE (This is required for images to display properly)
		// ===========================================
		relative_urls: false
		});
	}

	$('.open-roxy-custom').on('click',function(e){
		e.preventDefault;
		openCustomRoxy();
	});

	function RoxyFileBrowser(field_name, url, type, win) {
		var roxyFileman = '/shelterhope/fileman/index.html';
		if (roxyFileman.indexOf("?") < 0) {     
			roxyFileman += "?type=" + type;   
		}
		else {
			roxyFileman += "&type=" + type;
		}
		roxyFileman += '&input=' + field_name + '&value=' + win.document.getElementById(field_name).value;
		if(tinyMCE.activeEditor.settings.language){
			roxyFileman += '&langCode=' + tinyMCE.activeEditor.settings.language;
		}
		tinyMCE.activeEditor.windowManager.open({
			file: roxyFileman,
			title: 'Roxy Fileman',
			width: 850, 
			height: 650,
			resizable: "yes",
			plugins: "media",
			inline: "yes",
			close_previous: "no"  
		}, {     window: win,     input: field_name    });
		return false; 
	}

	

});

function openCustomRoxy(){
	$('#roxyCustomPanel').dialog({modal:true, width:875,height:600});
}

function closeCustomRoxy(){
	$('#roxyCustomPanel').dialog('close');
}
