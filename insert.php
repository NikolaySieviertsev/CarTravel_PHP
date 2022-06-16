<!DOCTYPE html>
<html>

<head>
    <title>CarTravel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai+Looped:wght@700&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/browser_logo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>

<body>
<div class="main_contact">
    <div class="main_block">
        <div class="module">
            <p id="p_m_1">Дякуємо, що обрали CarTravel!</p>
            <p id="p_m_2">Ми зателефонуємо Вам найближчим часом!</p>
            <p id="p_m_number">Ваш номер телефону:</p>
        </div>

        <div style="text-align: center;">
            <?php

            // servername => localhost
            // username => root
            // password => empty
            // database name => phone_numbers
            $conn = mysqli_connect("localhost", "root", "", "phone_numbers");

            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }

            // Taking all values from the form data(input)
            $number =  $_REQUEST['number'];

            // Performing insert query execution
            // here our table name is college
            $sql = "INSERT INTO numbers(number)  VALUE ('$number')";

            if(mysqli_query($conn, $sql)){

                echo nl2br("<p>$number</p><br>");

            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </div>

        <div class="module">
            <div class="call_maker">
                <form action="insert.php" method="post" class="call_block">
                    <label for="number"></label>
                    <input class="call_input" type="tel" name="number" id="number" placeholder="+38 (___) ___ __ __">
                    <button class="call_button" type="submit">Спробувати ще раз</button>
                </form>
            </div>
            <button id="but4" class="button1" onclick="window.location.href='http://localhost/CarTravel_PHP/?page=home'"><div>На головну</div></button>
        </div>
    </div>
</div>

</body>

</html>