
function addCustomer() {
   let nic = document.getElementById("cnic").value;
   let name = document.getElementById("cname").value;
   let psw = document.getElementById("cpwd").value;
   let hr = new XMLHttpRequest();
   hr.open("POST", "../presentation/customer_api.php", false);
   hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   hr.onreadystatechange = function () {
       if (hr.readyState == 4 && hr.status == 200) {
           alert(hr.responseText);
           document.getElementById("cForm").reset();
           loadCustomers();
       }
   }
   hr.send("nic=" + nic + "&cname=" +name+ "&cpwd=" +psw);
}

function loadCustomers() {
    let hr = new XMLHttpRequest();
    hr.open("GET", "../presentation/customer_api.php", false);
    hr.onreadystatechange = function () {
        if (hr.readyState == 4 && hr.status == 200) {
            document.getElementById("cList").innerHTML = hr.responseText;
        }
    }
    hr.send();
}

window.onload = loadCustomers();
