let quantity = document.getElementById("quantity").value;
function qntplus() {
  quantity++;

  if (quantity <= 10) {
    quantity.value = "";
    document.getElementById("quantity").value = quantity;
  } else {
    quantity.value = "";
    document.getElementById("quantity").value = 1;
    quantity = 1;
  }
}

function qntminus() {
  quantity--;

  if (quantity > 1) {
    quantity.value = "";
    document.getElementById("quantity").value = quantity;
  } else {
    quantity.value = "";
    document.getElementById("quantity").value = 1;
    quantity = 1;
  }
}

function addPeople() {
  let people = document.getElementById("peopleNum").value;
  people++;
  if (people < 100) {
    document.getElementById("peopleNum").value = "";
    document.getElementById("peopleNum").value = people;
  }
  else {
    document.getElementById("peopleNum").value = "";
    document.getElementById("peopleNum").value = 1;
  }
}
function lessPeople() {
  let people = document.getElementById("peopleNum").value;
  people--;
  if (people >= 1) {
    document.getElementById("peopleNum").value = "";
    document.getElementById("peopleNum").value = people;
  }
  else {
    document.getElementById("peopleNum").value = "";
    document.getElementById("peopleNum").value = 1;
  }
}