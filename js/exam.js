var manageData2 = [];
function exam() {
	num = prompt("Please specify in number the level of difficulty you'd like to set?(Questions with this or higher weighing will be considered)");
	console.log(num);
	mid = $('#modID').text();
	$.ajax({
	   url: '../model/examGen.php',
	   data: {
	   	  num: num,
	      modID: mid
	   },
	   type: 'GET',
	   error: function(data) {
	      alert("data");
	   },
	   success: function(data) {
	   	  format_it_up(data);
	   }
	});
	
	

}

function format_it_up(data) {
	console.log(data);
	diffQuests = data.split("EndQuestion1111.");
	console.log(diffQuests);
	size = diffQuests.length;
	console.log(size);
	for(i = 0;i<size-1;i++) {
		console.log(i);
		manageData2[manageData2.length] = diffQuests[i].split("BREAKBREAKBREAK");
	}
	console.log(manageData2);
	htmlString = "<div class = 'exam'>";
	for(i = 0; i<manageData2.length; i++) {
		htmlString += "<h3><div class='question'>Question " + (i+1) + ": ";
		htmlString += manageData2[i][0];
		htmlString += "</div><div class = 'marks'>Marks worth: ";
		htmlString += manageData2[i][2];
		htmlString += "</div><input type='button' value='showAnswer' onclick='showAnswer("+i+")'/> <div class = 'answer' style='display:none;' id='answer" + i + "'>"
		htmlString += manageData2[i][1];
		htmlString +="</div></h3>";
	}
	htmlString += "</div>";
	console.log(htmlString);
	$('#container').html(htmlString);
}
function showAnswer(id) {
    $('#answer'+id).toggle();
}
