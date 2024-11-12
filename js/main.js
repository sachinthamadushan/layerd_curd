function addCategory() {
    let catName = document.getElementById("catName").value;
    let hr = new XMLHttpRequest();
    hr.open("POST", "../presentation/category_api.php", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function () {
        if (hr.readyState == 4 && hr.status == 200) {
            document.getElementById("catForm").reset();
            alert(hr.responseText);
            loadCategoryList();
        }
    }
    hr.send("catName=" + encodeURIComponent(catName));
}

function loadCategoryList() {
    let hr = new XMLHttpRequest();
    hr.open("GET", "presentation/category_api.php", false);
    hr.onreadystatechange = function () {
        if (hr.readyState == 4 && hr.status == 200) {
            document.getElementById("tbody").innerHTML = hr.responseText;
        }
    }
    hr.send();
}

function updateCategory() {
    let catName = document.getElementById("catName").value;
    let hr = new XMLHttpRequest();
    hr.open("PUT", "presentation/category_api.php", false);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function () {
        if (hr.readyState == 4 && hr.status == 200) {
            alert(hr.responseText);
            loadCategoryList();
        }
    }
    hr.send("id=" + catID + "&catName=" + catName);
}
var catID;
function setData(id, catName) {
    catID = id;
    document.getElementById("catName").value = catName;
}

function deleteData(id){
    let hr = new XMLHttpRequest();
    hr.open("DELETE", "presentation/category_api.php", false);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function () {
        if (hr.readyState == 4 && hr.status == 200) {
            alert(hr.responseText);
            loadCategoryList();
        }
    }
    hr.send("id=" + id);
}

window.onload = loadCategoryList;