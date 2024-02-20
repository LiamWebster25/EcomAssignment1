window.onload = function () {
    // AJAX request to fetch page load count
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("pageLoadCount").innerHTML = "Page Load Count: " + this.responseText;
        }
    };
    xhttp.open("GET", "page_load_counter.php", true);
    xhttp.send();
}