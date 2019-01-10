function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {  
  document.getElementById('myModal').style.display = "none";
}


/***-----------------------  Reply JS -------------------**/

function clickFuntion(id) {
        $("#p"+id).slideToggle();
}

$(function() {
  $('#load-slider').load('slider.html');
});

$(function () {
  $("#load-footer").load("footer.html");
});

$(function () {
  $("#load-navigation").load("nav.html");
});