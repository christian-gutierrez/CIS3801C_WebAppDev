function removeAddItemsText() {
  var additemstextID = document.getElementById("additemstext");
  if (additemstextID) {
    additemstextID.parentNode.removeChild(additemstextID);
    var orderList = document.getElementById("orderlist");

    var orderSummary = document.createElement("h1");
    orderSummary.innerHTML = "Order Summary:";
    orderList.appendChild(orderSummary);

    var ul = document.createElement("ul");
    ul.setAttribute("id", "orderfoodlist");
    orderList.appendChild(ul);

    var h3 = document.createElement("h3");
    h3.setAttribute("id", "totalpriceheader");
    h3.innerHTML = "Total:"
    orderList.appendChild(h3);

    var h2 = document.createElement("h2");
    h2.setAttribute("id", "totalprice");
    orderList.appendChild(h2);

    var button = document.createElement("button");
    button.innerHTML = "Submit Order";
    button.addEventListener("click", submitOrder);
    orderlist.appendChild(button);
  }
}

function addToOrder(id) {
  removeAddItemsText();

  var foodItem = document.getElementById(id);
  var foodName = foodItem.getElementsByTagName("h3")[0];
  var foodPrice = foodItem.getElementsByTagName("h2")[0];
  var foodQty = foodItem.getElementsByTagName("input")[0];

  var orderFoodList = document.getElementById("orderfoodlist");
  var li = document.createElement("li");
  li.setAttribute("id", id);
  li.setAttribute("class", "orderfoodlistitem");

  var liName = document.createElement("h2");
  liName.setAttribute("class", "Name");
  liName.innerHTML = foodName.innerHTML;

  var liPrice = document.createElement("h2");
  liPrice.setAttribute("class", "Price");
  liPrice.innerHTML = foodPrice.innerHTML;

  var liQty = document.createElement("h2");
  liQty.setAttribute("class", "Qty");
  liQty.innerHTML = "Qty. " + foodQty.value;

  orderFoodList.appendChild(li);
  li.appendChild(liName);
  li.appendChild(liPrice);
  li.appendChild(liQty);

  calcPrice();
}

function calcPrice() {
  var i = 0;
  var totalPrice = 0;
  var list = document.getElementsByClassName("orderfoodlistitem");

  for (i=0; i < list.length; i++) {
    var price = list[i].getElementsByClassName("Price")[0].innerHTML.toString();
    price = price.substr(1);
    var qty = list[i].getElementsByClassName("Qty")[0].innerHTML.toString();
    qty = qty.substr(5);
    totalPrice = totalPrice + (price * qty);
  }

  var tPrice = document.getElementById("totalprice");
  tPrice.innerHTML = "$" + totalPrice;
}

function submitOrder() {
  window.location = "ordersubmitted.php"
}
