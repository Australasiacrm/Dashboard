var payments = document.getElementsByClassName("payments-btn");
var i;

for (i = 0; i < payments.length; i++) {
  payments[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var paymentsContent = this.nextElementSibling;
  if (paymentsContent.style.display === "block") {
  paymentsContent.style.display = "none";
  } else {
  paymentsContent.style.display = "block";
  }
  });
}

var squad = document.getElementsByClassName("squad-btn");
var i;

for (i = 0; i < squad.length; i++) {
  squad[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var squadContent = this.nextElementSibling;
  if (squadContent.style.display === "block") {
  squadContent.style.display = "none";
  } else {
  squadContent.style.display = "block";
  }
  });
}

var reports = document.getElementsByClassName("reports-btn");
var i;

for (i = 0; i < reports.length; i++) {
  reports[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var reportsContent = this.nextElementSibling;
  if (reportsContent.style.display === "block") {
 reportsContent.style.display = "none";
  } else {
  reportsContent.style.display = "block";
  }
  });
}