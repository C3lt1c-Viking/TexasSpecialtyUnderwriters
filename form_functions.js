// Start Form Hide/Show Div Elements //

// Start Form 1 Hide/Show Div Element //
function Form1Click()
{
  var f1 = document.getElementById("Form1Div");
  if (f1.style.display === "none")
  {
    f1.style.display = "block";
    document.getElementById("Form2Div").style.display = "none";
  }
  else
  {
    f1.style.display = "none";
  }
}
// End Form 1 Hide/Show Div Element //

// Start Form 2 Hide/Show Div Element //
function Form2Click()
{
  var f2 = document.getElementById("Form2Div");
  if (f2.style.display === "none")
  {
    f2.style.display = "block";
    document.getElementById("Form1Div").style.display = "none";
  }
  else
  {
    f2.style.display = "none";
  }
}
// End Form 2 Hide/Show Div Element //
