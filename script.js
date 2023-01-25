function changeColor() {
  var checkbox = document.getElementById("i1200");
  var divs = document.getElementById("1200");
  if (checkbox.checked) {
    divs.style.backgroundColor = "#f8cf2c";
  } else {
    divs.style.backgroundColor = "#fffee6";
  }
}
