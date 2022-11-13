function submit() {
    alert("The form has been submitted");
}
  
function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("userPassword").value;
    var item1 = document.getElementById("Latte").value;
    var item2 = document.getElementById("Cappucino").value;
    var item3 = document.getElementById("Mocha").value;
    var item4 = document.getElementById("Americano").value;
    var item5 = document.getElementById("ColdBrew").value;
  
    console.log(item1);
    console.log(item2);
    console.log(item3);
    console.log(item4);
    console.log(item5);
  
    if (username == "") {
      alert("Username cannot be empty");
      return false;
    }
    if (password == "") {
      alert("Password cannot be empty");
      return false;
    }
  
    if (item1 == "" || item2 == "" || item3 == "" || item4 == "" || item5 == "") {
      alert("The amounts cannot be empty");
      return false;
    }
  
    if (item1 < 0 || item2 < 0 || item3 < 0 || item4 < 0 || item5 < 0) {
      alert("Quantities of all items must be a positive number or zero");
      return false;
    }

    var shipping = document.getElementById("shopping").elements["shipping"].value;
  
    if(shipping=="")
    {
      alert("Must check a shipping option!");
      return false;
    }
  
    alert("Order was submitted!");
    document.getElementById("shopping").submit();
}