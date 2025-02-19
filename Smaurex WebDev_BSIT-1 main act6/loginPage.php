<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>

    <title>Login Page</title>
</head>
<body>
    <table class="center">
        <tr>
            <td></td>
            <td>
                <div class="left">
                    <form action="verification.php" method="post">
                        <label for="name">Username:</label>
                        <input  id="name" type="text" name="name" placeholder="Username..." value="<?php if(!empty($_GET["name"]) && empty($_GET["error"])){ echo $_GET["name"];}?>">
                        <?php
                        if(empty($_GET["name"]) && !empty($_GET["error"])){
                            echo "<span class=error>*</span>";
                        }
                        ?>
                        <br><br>
                        <label for="password">Password:</label>
                        <input id="password" type="password" name="password" placeholder="Password...">
                        <br><br>
                        <fieldset>
                            <legend>Role</legend>
                            <label for="admin">Admin</label>
                            <input id="admin "type="radio" name="role" value="admin">
                            <label for="cashier">Cashier</label>
                            <input id="cashier "type="radio" name="role" value="cashier">
                            <label for="client">Client</label>
                            <input id="client" type="radio" name="role" value="client">
                        </fieldset>
                        <br>
                        <button type="submit">submit</button>
                    </form>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>