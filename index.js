function login() {
    var userid = document.getElementById("userid").value;
    var password = document.getElementById("password").value;

    if (userid == "aa@gmail.com") {
        location.href = "index.php";
        alert("Logged In");
    } else {
        alert("wrong userid/password");
        return false;
    }
}