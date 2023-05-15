// admin credentials
let userLogin = "Hans";
let userPass = "hans0123";

    function loadData() {
        let usernameField = document.getElementById('userField').value;
        let passField = document.getElementById('passField').value;
        
        let src = "../php/main-window.php"
        if((usernameField == userLogin) && (passField == userPass)) {
            alert("Logged in succressfully!")
            window.close();
            window.open(src)
        }
        else {
            alert("Invalid user/pass!")
        }
    }

    function Signout_btn() {
        let src = "../php/landing-page.php";
        window.close();
        alert("Logged out Successfully!");
        window.open(src);
    }