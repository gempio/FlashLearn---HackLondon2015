function goToModule(id) {
	mid = (id.split("11011"))[0];
	mname = (id.split("11011"))[1];
	
	console.log(mid);
	console.log(mname);
	console.log(id + " YOU BITCH!");
	$.ajax({
   url: '../controller/linkGenerator.php',
   data: {
      modID: mid,
      modName: mname
   },
   type: 'GET',
   error: function() {
      alert("Something went wrong you shit!");
   },
   success: function(data) {
   	  window.location.replace("../view/module.php");
   }
   
});
	
}

function deleteModule(id) {
	bool = confirm("Are you sure you want to delete this module?");
	if(bool) {
		$.ajax({
		   url: '../controller/deleteModule.php',
		   data: {
		      modID: id
		   },
		   type: 'POST',
		   error: function(data) {
		      alert(data);
		   },
		   success: function(data) {
		   	  alert("Deletion Successful.");
		   	  location.reload();
		   }
		});
	} else {
		
	}
	
}
