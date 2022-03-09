
// Open & close navbar
function showLinks() {
    var but = document.getElementById("but"), // Get Open button
        links = document.getElementsByClassName("link"), // Get links
        navbar = document.getElementById("navbar"); // Get navbar

    if (window.getComputedStyle(but).display != "none") { // If Open button is shown-screen is medium or smaller- 
        navbar.classList.toggle("open"); // Open navbar
        navbar.classList.toggle("navbar"); // Close navbar
        
        for (let i = 0; i < links.length; i++) { // Loop through Links
            links[i].classList.toggle("showlinks"); // Show & Hide links

            links[i].onclick = function () { // When links clicked close navbar
                showLinks()
            }
        }
    }
}

// Make links active
var link = document.getElementsByClassName("link"), // Get links
    active = document.getElementsByClassName("active"); // Get the active link

for (var j = 0; j < link.length; j++) { // Loop through links
    link[j].addEventListener("click", function() { // When links clicked
        active[0].classList.remove("active"); // Make current links not active
        this.classList.add("active"); // Make clicked link active
    });
}  

