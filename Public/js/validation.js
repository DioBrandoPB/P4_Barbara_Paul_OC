function verificationVide() {
    if (document.getElementById("content").value != "" && document.getElementById("pseudo").value != "") {
        document.getElementById("submit").setAttribute("style", "display : initial ");
    } else {
        document.getElementById("submit").setAttribute("style", "display : none ");
    }
}