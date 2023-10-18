
    function scrollToHeading(id) {
        var element = document.getElementById(id);
        var offset = 30; // Adjust this value as needed
        var bodyRect = document.body.getBoundingClientRect().top;
        var elementRect = element.getBoundingClientRect().top;
        var scrollToPosition = elementRect - bodyRect - offset;

        window.scrollTo({
            top: scrollToPosition,
            behavior: 'smooth'
        });
    }


    function scrollToAuthor() {
        var element = document.getElementById("author-name");
        var offset = 130; // Adjust this value as needed
        var bodyRect = document.body.getBoundingClientRect().top;
        var elementRect = element.getBoundingClientRect().top;
        var scrollToPosition = elementRect - bodyRect - offset;

        window.scrollTo({
            top: scrollToPosition,
            behavior: 'smooth'
        });
    }

    $(window).on('hashchange load', function() {
       adjustAnchor();
    });

/*
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
*/
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

function myTocFunction(x) {
 	x.classList.toggle("change");
  document.getElementById("mySidenav").classList.toggle("shown");
}

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("toct");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}




// Modal Image Gallery



// Toggle between showing and hiding the sidebar when clicking the menu icon

