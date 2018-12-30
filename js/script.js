window.onscroll = function() { scrollFunction() };

function goToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("go-to-top-btn").style.display = "block";
  } else {
    document.getElementById("go-to-top-btn").style.display = "none";
  }
}
