var n;
var k, maxV, maxW, ans;
var value = new Array(); // value[] -> valor de los objetos desde el punto de vista de el usuario
var weight = new Array(); // weight[] -> valor de los objetos desde el punto de vista de la maquina

var idUser = document.getElementById('idUser').value, numCategories;
var numMyInterest = 0, myObjects = new Array(), myInterests = new Array();
var numTheirInterest = 0, theirObjects = new Array(), theirInterests = new Array();
var route = 'http://localhost:8000/interests/'+idUser;

$.get(route, function(res) {
  n = res[2].length;
  numCategories = 15;
  numMyInterest = res[1].length;
  numTheirInterest = res[3].length;
  res[1].forEach(function(interest) {
		myInterests[interest.id] = 1;
	});

  res[3].forEach(function(interest) {
		theirInterests[interest.id] = 1;
	});

  res[0].forEach(function(object) {
    myObjects[object.id] = object;
  });

  res[2].forEach(function(object) {
    theirObjects[object.id] = object;
    var v = Number(object.value);
    if (myInterests[object.category_id])
      v *= 2 - numMyInterest / numCategories;
    value.push(v);
    var w = Number(object.value);
    if (theirInterests[object.category_id])
      w *= 2 - numTheirInterest / numCategories;
    weight.push(w);
	});
});

function solver(id, currV, currW, s) {
  if (id == n) {
    if (currV > maxV) {
      maxV = currV;
      maxW = currW;
      ans = s;
    }
  } else {
    if (currW + weight[id] > k) {
      solver(id + 1, currV, currW, s+'0');
    } else {
      solver(id + 1, currV, currW, s+'0');
      solver(id + 1, currV + value[id], currW + weight[id], s+'1');
    }
  }
}

function main() {
	maxV = -1;
	k = 0;
  ans = '';
  $("#myBoxes").empty();
  $("#theirBoxes").empty();
	$('.left:checked').each(function() {
    var idObj = $(this).val();
    $("#myBoxes").append("<div class='col s2'><img src='http://localhost:8000/img/objects/"+idObj+".jpg' alt='img-"+idObj+"' class='sub-inter materialboxed'></div>");
    var obj = myObjects[idObj];
    console.log(obj.id, obj.value);
    var x = Number(obj.value);
    if (theirInterests[obj.category_id])
      x *= 2 - numTheirInterest / numCategories;
    k += x;
	});
  console.log();
  solver(0, 0, 0, '');
  for (var i = 0; i < ans.length; i++) {
    $('#right'+i).prop('checked', ans[i] == '1');
    $('#right'+i).prop('disabled', ans[i] != '1');
    if (ans[i] != '1') continue;
    var idObj = $('#right'+i).val();
    var obj = theirObjects[idObj];
    console.log(obj.id, obj.value);
    $("#theirBoxes").append("<div class='col s2'><img src='http://localhost:8000/img/objects/"+idObj+".jpg' alt='img-"+idObj+"' class='sub-inter materialboxed'></div>");
  }
  console.log();
  console.log(k);
  console.log(maxV);
  console.log(maxW);
}
