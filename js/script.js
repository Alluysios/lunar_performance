
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener("click", function() {
	/* Toggle between adding and removing the "active" class,
	to highlight the button that controls the panel */
	this.classList.toggle("active");

	/* Toggle between hiding and showing the active panel */
	var panel = this.nextElementSibling;
	if (panel.style.display === "block") {
		panel.style.display = "none";
	} else {
		panel.style.display = "block";
	}
	});
}


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

function breakFirstWord(word) {
	var wordSplit = word.split(" ");
	var newTitle = "";
	newTitle += wordSplit[0] + " ";

	for(var i = 1; i < wordSplit.length; i++) {
			newTitle = newTitle + " <span class='break'> " + wordSplit[i];
	}

	return newTitle + "</span>";
}


// document.querySelector(".tprograms__iteminfo-heading").innerHTML = breakFirstWord(document.querySelector(".tprograms__iteminfo-heading").innerHTML);

document.querySelectorAll(".tprograms__iteminfo-heading").forEach(function(word) {
	word.innerHTML = breakFirstWord(word.innerText);
});