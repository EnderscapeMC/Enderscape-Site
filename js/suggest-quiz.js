function validateSuggestion() {

    var name = document.getElementById("name").value;
    var suggestion = document.getElementById("suggestion").value;
    var details = document.getElementById("details").value;
    var imageLink = document.getElementById("imageLinkField").value;

    if (suggestion === "") {
        var outputErrorMessage = document.getElementById("outputErrorMessage");
        outputErrorMessage.style.backgroundColor = "red";
        outputErrorMessage.style.color = "#F0EED1";
	    outputErrorMessage.innerHTML="Suggestion cannot be blank.";
        document.getElementById("suggestion").focus();
        return false;
    }

    if (isNaN(suggestion) === false) {
        var outputErrorMessage = document.getElementById("outputErrorMessage");
        outputErrorMessage.style.backgroundColor = "red";
        outputErrorMessage.style.color = "#F0EED1";
	    outputErrorMessage.innerHTML="Suggestion cannot be only numbers.";
        document.getElementById("suggestion").focus();
        return false;
    }

    if (suggestion.length < 10) {
        var outputErrorMessage = document.getElementById("outputErrorMessage");
        outputErrorMessage.style.backgroundColor = "red";
        outputErrorMessage.style.color = "#F0EED1";
	    outputErrorMessage.innerHTML="Suggestion must be at least 10 characters.";
        document.getElementById("suggestion").focus();
        return false;
    }

    if (imageLinkField.indexOf("www.") === -1 || imageLinkField.indexOf("http://") === -1 || imageLinkField.indexOf("https://") === -1) {
        var outputErrorMessage = document.getElementById("outputErrorMessage");
        outputErrorMessage.style.backgroundColor = "red";
        outputErrorMessage.style.color = "#F0EED1";
	    outputErrorMessage.innerHTML="Image link must start with 'www.'', 'http://' or 'https://'.";
        document.getElementById("suggestion").focus();
        return false;
    }

    return true;
}

function imageOption() {

    var imageUploadButton = document.getElementById("imageUploadButton");
    var imageLinkField = document.getElementById("imageLinkField");

    if (document.getElementById("uploadImage").checked) {
        imageUploadButton.style.display = "block";
        imageLinkField.style.display = "none";
        imageOption = "uploadImage";
    } else if (document.getElementById("linkImage").checked) {
        imageUploadButton.style.display = "none";
        imageLinkField.style.display = "block";
        imageOption = "linkImage";
    }
}

document.getElementById("uploadImage").addEventListener("change", imageOption);
document.getElementById("linkImage").addEventListener("change", imageOption);

function submitSuggestion() {

    if (validateSuggestion()) {
        var successMessage = document.getElementById("successMessage");
        successMessage.style.color = "black";
	    successMessage.innerHTML="<p>Order placed successfully!</p>";
    }
}