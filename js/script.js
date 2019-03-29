var acc = document.getElementsByClassName("faq__accordion");
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


// adding break after the first word
function breakFirstWord(word) {
	var wordSplit = word.split(" ");
	var newTitle = "";
	newTitle += wordSplit[0] + " ";

	for(var i = 1; i < wordSplit.length; i++) {
			newTitle = newTitle + " <span class='break'> " + wordSplit[i];
	}

	return newTitle + "</span>";
}

document.querySelectorAll(".tprograms__iteminfo-heading").forEach(function(word) {
	word.innerHTML = breakFirstWord(word.innerText);
});