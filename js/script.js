window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    document.getElementById("navbar").style.top = "0px";
  } else if (
    document.body.scrollTop < 100 ||
    document.documentElement.scrollTop < 100
  ) {
    document.getElementById("navbar").style.top = "0px";
    document.getElementById("navbar").style.backgroundColor = "";
    document.getElementById("navbar").style.margin = "0";
  } else {
    document.getElementById("navbar").style.top = "0px";
  }
}

function connecter() {
  let submit = document.getElementById("submit");
  submit.click();
}

function guest() {
  let email = (document.getElementById("email").value = "test@test.com");
  let password = (document.getElementById("password").value = "test1234");
  connecter();
}
