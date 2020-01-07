<!DOCTYPE html>
<html>
    <head>
        <title>Hubert to pała a Michał mistrz polski</title>
        <script>
            function validatePassword(password) {
                
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
                
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); 
                matchedCase.push("[A-Z]");      
                matchedCase.push("[0-9]");      
                matchedCase.push("[a-z]");    

                
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
               
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "cipa jak hubert";
                        color = "red";
                        break;
                    case 3:
                        strength = "masno";
                        color = "orange";
                        break;
                    case 4:
                        strength = "potezne jak Michał";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
            }
        </script>
    </head>
    <body>
        <strong>Sprawdz czy masz dobre haslo</strong>
        
        <div>

            <label for="pwd">wpisz haslo:</label>
            <input type="text" id="pwd"  onkeyup="validatePassword(this.value);"/><span id="msg"></span>

        </div>
    </body>
</html>