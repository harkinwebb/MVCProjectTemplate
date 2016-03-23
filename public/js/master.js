$(document).ready(function(){
	$('#sauBtn').click(function(){
		$.get("users", function(data){
			var userObjList = jQuery.parseJSON(data);
			
			$('#userList').empty();
			
			$.each(userObjList, function(key, user){
				$('#userList').append(user.name + "<br>");
			});
		});
	});
});