<html>

<head>
    <title>Registration Form</title>
</head>

<body bgcolor="lightgreen">
    <div style="bgcolor:lightgreen">
    <?php
            echo "First Name: " . $_POST["fname"] . "<br><hr>";
            echo "Last Name: " . $_POST["lname"] . "<br><hr>";
            echo "Email Id: " . $_POST["emailid"] . "<br><hr>";
            echo "Mobile no.: " . $_POST["mobile"] . "<br><hr>";
            echo "Address: " . $_POST["address"] . "<br><hr>";
            echo "City: " . $_POST["city"] . "<br><hr>";
            echo "State: " . $_POST["state"] . "<br><hr>";
            echo "Date of Birth: " . $_POST["dob"] . "<br><hr>";
            echo "Gender: " . $_POST["gender"] . "<br><hr>";
            if(!empty($_POST["hobby"]))
            {
                foreach ($_POST["hobby"] as $hobby)
                {
                    echo "Hobbies: " . $hobby . "<br><hr>"; 
                } 
            }
            echo "Your Photo: " . $_POST["myfile"] . "<br><hr>";

    ?>
    </div>
</body>

</html>