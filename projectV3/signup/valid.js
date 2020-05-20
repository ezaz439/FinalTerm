function validateSignUp() {
    var name = document.forms["sform"]["name"].value;
    var email = document.forms["sform"]["email"].value;
    var phnumber = document.forms["sform"]["phnnumber"].value;
    var pass = document.forms["sform"]["password"].value;
    var cpass = document.forms["sform"]["cfpassword"].value;
    if (name == "") {
        alert("Name must be filled out");
        return false;
    } else if (name.length < 1) {
        alert("Name should be more than one word");
        return false;
    } else if (email == "") {
        alert("Email must be filled out");
        return false;
    } else if (phnumber == "") {
        alert("Phone number  must be filled out");
        return false;
    } else if (pass == "") {
        alert("Password must be filled out");
        return false;
    } else if (pass.length < 8) {
        alert("Password must be more than 8");
        return false;
    } else if (cpass == "") {
        alert("Confirm passowrd must be filled out");
        return false;
    } else if (cpass.length < 8) {
        alert("Confirm Password must be more than 8");
        return false;
    }

}