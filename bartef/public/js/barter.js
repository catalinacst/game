var n = 10;
var k, maxV, maxW, ans;
var value = new Array(); // value[] -> valor de los objetos desde el punto de vista de el usuario
var weight = new Array(); // weight[] -> valor de los objetos desde el punto de vista de la maquina

var id = 4, numCategories;
var numMyInterest = 0, myObjects = new Array(), myInterests = new Array();
var numTheirInterest = 0, ObjectsObjects = new Array(), theirInterests = new Array();
var route = 'http://localhost:8000/interests/'+id;

$.get(route, function(res) {
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
    var v = object.value;
    //if (myInterests[object.category_id])
    //  v *= 2 - numMyInterest / numCategories;
    value.push(v);
    var w = object.value;
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
	$('.left:checked').each(function() {
    var id = $(this).val();
    var obj = myObjects[id];
    var x = obj.value;
    if (theirInterests[obj.category_id])
      x *= 2 - numTheirInterest / numCategories;
    k += x;
	});
  solver(0, 0, 0, '');
  console.log(k);
  console.log(maxV);
  console.log(maxW);
  //console.log(ans);
  for (var i = 0; i < ans.length; i++)
    $('#object'+i).prop('checked', ans[i] == '1');
}
