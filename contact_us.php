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
                <p id="p_m_1">Вас вітає команда CarTravel!</p>
                <p id="p_m_2">Зателефонуйте нам, щоб дізнатися всі деталі і замовити тур.</p>
                <p id="phone_number"><a href="tel:+380501089555">+38-050-108-95-55</a></p>
            </div>
            <div class="module">
                <p id="p_m_3">Або залиште свій номер і ми Вам обов'язково передзвонимо.</p>
                <div class="call_maker">
                    <form action="insert.php" method="post" class="call_block">
                        <label for="number"></label>
                        <input class="call_input" type="tel" name="number" id="number" placeholder="+38 (___) ___ __ __">
                        <button class="call_button" type="submit">Зателефонувати мені</button>
                    </form>
                </div>
            </div>
            <div class="module">
                <p id="p_m_4">Адреса головного офісу: Київ, вул. Дарницький бульвар 10.</p>
                <button id="but4" class="button1" onclick="window.location.href='http://localhost/CarTravel_PHP/?page=home'"><div>На головну</div></button>
            </div>
        </div>
    </div>
    </body>
</html>
