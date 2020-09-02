function validate() {
    var firstname = document.getElementById("first");
    var lastname = document.getElementById("last");
    var email = document.getElementById("email");
    var username = document.getElementById("user");
    var id = document.getElementById("id");
    var password = document.getElementById("pass");
    var confirm = document.getElementById("pass1");

    if (!isNaN( firstname.value && lastname.value && username)) {
        alert("Please enter your name in characers not in numbers!");
        return false;
    }
    if (password.value.length < 5) {
        alert("Your password should be greater than 5 charcters!");
        return false;
    }

    if (password.value != confirm.value ) {
        alert("Your passwords should match!");
    }
    else {
        true;
    }
}