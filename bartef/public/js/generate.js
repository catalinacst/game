function gen() {
  var text = "";
  for (var i = 0; i < 5; i++)
    text +=  String.fromCharCode(97 + Math.floor((Math.random() * 26)));
  return text;
}

function random() {
  var pass = gen();
  document.getElementById('newpass').value = pass;
}

function query() {
  if ($('#password').val() == 'developerbcc') {
    if ($('#flag').val() == 1) {
      $('#refresh').css("display", "block");
    } else {
      $('#generate').css("display", "block");
    }
  }
}
