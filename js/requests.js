function allow(id) {
	console.log(id);
	bool = confirm("Are you sure?");
	if(!bool) return;
	$.ajax({
   		url: '../controller/acceptRequest.php',
   		data: {
      		reqID: id
   		},
   		type: 'POST',
   		error: function() {
   		},
   		success: function(data) {
   	  		window.location.replace("../view/requests.php");
  		}
   
	});
	
	
}

function deny(id) {
	bool = confirm("Are you sure?");
	if(!bool) return;
	$.ajax({
   		url: '../controller/denyRequest.php',
   		data: {
      		reqID: id
   		},
   		type: 'POST',
   		error: function() {
   		},
   		success: function(data) {
   	  		window.location.replace("../view/requests.php");
  		}
   
	});
}
