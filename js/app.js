$(document).foundation();
	$('#dp1').fdatepicker({
		format: 'mm-dd-yyyy hh:ii',
		disableDblClickSelection: true,
		language: 'vi',
		pickTime: true
	});
	$('select[multiple]').multiselect({
	    columns: 3,
	    texts: {
	        placeholder: 'Select Players'
	    }
	});
