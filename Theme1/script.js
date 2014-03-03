function navigate_tabs(page,tab){	
	/// load new page
	$.post("record.php?page="+page,{
	}, function(response){
		$("#"+tab).html(unescape(response));	
	});
         $("#"+tab).show('slow')	
}
