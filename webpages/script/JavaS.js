// admin credentials
let userLogin = "Hans";
let userPass = "hans0123"
    function loadData() {

        let usernameField = document.getElementById('userField').value;
        let passField = document.getElementById('passField').value;
        
        let src = "../php/main-window.php"
        if((usernameField == userLogin) && (passField == userPass)) {
            alert("logged in succressfully")
            window.close();
            window.open(src)
        }
        else {
            alert("Invalid user/pass!")
        }
    }