<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="style.css"/>

    <title>Input</title>
</head>
<body>
    <div class="pagewrap">
        <div class="center">
            <form action = "output.php" method="post">

                <label for="firstName">First Name</label>
                <br>
                <input id="firstName" type="text" name="firstName" placeholder="First name..." value="<?php if(!empty($_GET["firstName"])){ echo $_GET["firstName"];}?>">
                <?php
                if(empty($_GET["firstName"]) && !empty($_GET["error"])){
                    echo "<span class='error'>*</span>";
                }
                ?>

                <br>

                <label for="lastName">Last Name</label>
                <br>
                <input id="lastName" type="text" name="lastName" placeholder="Last name..." value="<?php if(!empty($_GET["lastName"])){ echo $_GET["lastName"];}?>">
                <?php
                if(empty($_GET["lastName"]) && !empty($_GET["error"])){
                    echo "<span class='error'>*</span>";
                }
                ?>

                <br>

                <label for="Age">Age</label>
                <br>
                <select name="age">
                <option value="">Select</option>
                    <?php 
                        for($i = 1; $i <= 100; $i++) {
                            echo "<option value='".$i."'";
                            if (!empty($_GET["age"]) && $_GET["age"] == $i) {
                                echo " selected='selected'";
                            }
                            echo ">".$i."</option>";
                        }
                    ?>
                </select>
                <?php
                if(empty($_GET["age"]) && !empty($_GET["error"])){
                    echo "<span class='error'>*</span>";
                }
                ?>

                <br>

                <fieldset>
                    <legend>Gender:</legend>
                    <label for="male">Male</label>
                    <input id="male" type="radio" name="gender" value="male" <?php if(!empty($_GET["gender"]) && $_GET["gender"] == "male") { echo "checked"; } ?> >
                    <label for="female">Female</label>
                    <input id="female" type="radio" name="gender" value="female" <?php if(!empty($_GET["gender"]) && $_GET["gender"] == "female") { echo "checked"; } ?>>
                    <?php
                        if(empty($_GET["gender"]) && !empty($_GET["error"])){
                            echo "<span class='error'>*</span>";
                        }
                    ?>
                </fieldset>
                
                <br>

                <button type="submit">submit</button>
                <br>
                <?php 
                    if (!empty($_GET["error"])) {
                        echo "<p class='error'> Please fill out all fields. </p>";
                    }
                ?>
            </form>
        </div>
    </div>
</body>
</html>