function sendMail() {
    var link = "mailto: info@ionubesoft.com"
    + "?cc=myCCadress@example.com"
    + "$subject="+ encodeURIComponent("This is my Subject")
    + "&body=" + encodeURIComponent(document.getElementById('myText').value)
    ;

    window.location.href = link;
}