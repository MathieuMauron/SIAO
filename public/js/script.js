//hamburger

function myFunction() {
    console.log("clicked!"); // pour vérifier si le clic fonctionne
    var nav = document.getElementById("topNav");
    if (nav.className === "nav") {
      nav.className += " responsive";
    } else {
      nav.className = "nav";
    }
  }
