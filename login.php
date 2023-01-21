<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <style>
        p{
            text-align: center;
            color: #2596be;
        }
        form{
            text-align: center;
        }
        input{
            margin: 1%;
        }
    </style>
</head>
<body>
<p>
    <b>INSERISCI LA PASSWORD PER ACCEDERE AL SONDAGGIO</b>
</p>
<form action="verify.php" method="post">
    <label for="Password"></label>
    <input type="password" name="Password" id="Password" required>
    <div>
        <input type="submit" value="Accedi al sondaggio!">
    </div>
</form>
<p style="color : red">
    <?php
    if (isset($_GET['passwordErrata'])) {
        echo "Password errata";
    }
    ?>
</p>
</body>
</html>