function toggleForm() {
    var paragraph = document.getElementById("aboutDescription");
    var form = document.getElementById("aboutForm");
    var text = paragraph.innerHTML;
    var textarea = document.getElementsByName("about")[0];
    // Check if the paragraph display is block or if the style attribute does not exist
    // If true, hide the paragraph, show the form, get the text and insert it in the textarea
    // Otherwise display the paragraph and hide the form
    if (paragraph.style.display === "block" || !paragraph.style.display) {
        paragraph.style.display = "none";
        form.style.display = "block";
        textarea.innerHTML = decodeURI(text);
    } else {
        paragraph.style.display = "block";
        form.style.display = "none";
        textarea.innerHTML = "";
    }

}
