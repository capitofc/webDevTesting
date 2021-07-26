<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wing Bites | Cabuyao</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="main-container">
        <div class="form-box">
            <div class="logo">
                <img src="./resources/wbLogo.png" alt="Logo">
            </div>
            <div class="button-box">  
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="log()">Admin</button>
                <button type="button" class="toggle-btn" onclick="sub()">Customer</button>
            </div>
            <form id="login" class ="input-group" onclick="login()">
                <input type="text" class="input-field" placeholder="Admin ID" required>
                <input type="text" class="input-field" placeholder="Admin Password" required>
                <button type="submit" class="submit-btn">Log In</button>
            </form>
            <form id="submit" class ="input-group">
                <input type="text" class="input-field" placeholder="Customer Token" required>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("submit");
        var z = document.getElementById("btn");
        
        function sub()
        {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function log()
        {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }

    </script>
</body>
</html>