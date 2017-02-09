var ans, k, maxV;
var n = 15;
var value = new Array(); // value[] -> valor de los objetos desde el punto de vista de el usuario
var weight = new Array(); // weight[] -> valor de los objetos desde el punto de vista de la maquina

var id = 2, numMeInterest = 0, numOtherInterest = 0;
var meObjects = new Array(), meInterests = new Array();
var otherObjects = new Array(), otherInterests = new Array();
var route = 'http://localhost:8000/interests/'+id;

$.get(route, function(res) {
  var numCategories = 15;
  numMeInterest = res[1].length;
  numOtherInterest = res[3].length;
  res[1].forEach(function(interest) {
		meInterests[interest.id] = 1;
	});

  res[3].forEach(function(interest) {
		otherInterests[interest.id] = 1;
	});

  res[2].forEach(function(object) {
    var v = object.value;
    if (meInterests[object.category_id])
      v *= 2 - numMeInterest / numCategories;
    value.push(v);
    var w = object.value;
    if (otherInterests[object.category_id])
      w *= 2 - numOtherInterest / numCategories;
    weight.push(w);
	});
});

function solver(id, currV, currW, s) {
  if (id == n) {
    if (currV > maxV) {
      maxV = currV;
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
	$('.left:checked').each(function() {
		k += Number($(this).val());
	});
  console.log(k);
  solver(0, 0, 0, '');
  console.log(ans);
  for (var i = 0; i < ans.length; i++)
    $('#object'+i).prop('checked', ans[i] == '1');
}
