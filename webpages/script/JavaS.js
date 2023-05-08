let userLogin = "Hans";
let userPass = "hans0123"
    function loadData() {
        let usernameField = document.getElementById('userField').value;
        let passField = document.getElementById('passField').value;

           if((usernameField == userLogin) && (passField == userPass)) {
            alert("logged in succressfully")
            }
            else {
                alert("Invalid user/pass!")
            }
    }