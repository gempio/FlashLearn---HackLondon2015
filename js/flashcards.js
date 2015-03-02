var manageData = [];
$( document ).ready(function() {
	mid = $('#modid').text();
	console.log(mid);
	$.ajax({
	   url: '../controller/dataGen.php',
	   data: {
	      modID: mid
	   },
	   type: 'GET',
	   error: function(data) {
	      alert("data");
	   },
	   success: function(data) {
	   	  makeFlashcards(data);
	   }
	});
});

function makeFlashcards(data) {
	console.log(data);
	diffQuests = data.split("EndQuestion1111.");
	console.log(diffQuests);
	size = diffQuests.length;
	for(i = 0;i<size-1;i++) {
		console.log(i);
		manageData[manageData.length] = diffQuests[i].split("BREAKBREAKBREAK");
	}
	console.log(manageData);
	newcardno = Math.floor((Math.random() * size));
	flashcard = manageData[newcardno];
	console.log(flashcard);
	answer = flashcard[1];
	flipFlash(flashcard[0]);
}

function flipCard() {
	if(answer != null) {
		content = answer;
		answer = null;
		flipFlash(content);
		
	}
	else {
		newcardno = Math.floor((Math.random() * size));
		flashcard = manageData[newcardno];
		console.log(flashcard);
		answer = flashcard[1];
		flipFlash(flashcard[0]);
	}
}
function flipFlash(content) {
	$("#flashcard").flip({
	direction:'lr',
	color: 'lightblue',
	content:"<p2>" + content + "</p2>"
	});
}
