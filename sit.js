document.getElementById("admissionForm").addEventListener("submit", function (e) {
  e.preventDefault();
  alert("Thank you! Your admission form has been submitted.");
  this.reset();
});
