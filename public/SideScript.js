$(function(){$("#mySidenav").load("/nav");});
function openNav() {
document.getElementById("mySidenav").style.width = "80%";
}

function closeNav() {
document.getElementById("mySidenav").style.width = "0px";
document.getElementById("mySidenav2").style.width = "0px";
document.getElementById("konten").style.margin= "0px";
}
function openChart() {
document.getElementById("mySidenav2").style.width = "80%";
}