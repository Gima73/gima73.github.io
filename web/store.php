<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Floral Spirit Shop</title>
    <link rel="icon" href="img/icon.ico" type="image/x-icon">
    <link type="image/png" sizes="16x16" rel="icon" href="img/icon_16.ico">
    <link type="image/png" sizes="32x32" rel="icon" href="img/icon_32.ico">
    <link type="image/png" sizes="96x96" rel="icon" href="img/icon_96.ico">
    <link type="image/png" sizes="128x128" rel="icon" href="img/icon_128.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="store.css">
</head>

<body>
    <header class="top_header">
        <div class="wrapper">
            <a href="index.html" class="logo">
                <img src="img/logo.png" alt="logo" class="logo">
            </a>
            <nav class="nav">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                </ul>
            </nav>
            <nav class="nav">
                <ul>
                    <li><a href="store.php">Ассортимент</a></li>
                </ul>
            </nav>
            <nav class="nav">
                <ul>
                    <li><a href="add_item.html">Добавить букет</a></li>
                </ul>
            </nav>
            <nav class="nav">
                <ul>
                    <li><a href="contact.html">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="main_page">
        <div class="container">
            <form>
                <input type="text" placeholder="Введите искомое слово" id="poisk">
            </form>
            <? require_once("script.php");
            $articles = items_all($db);
            ?>
            <div id="spiski">
                <ul>
                    <?php foreach ($articles as $a) : ?>
                        <li>
                            <?= $a["name"] ?>-<?= $a["value"] ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="wrapper">
            <div class="footer_items">
                <p class="name"><b>Floral Spirit</b></p>
                <p class="slogan">Наши цветы вдохновят вас</p>
                <hr style="width: 100%; height: 1px; ">
                <img src="img/© 2021 Floral Spirit. All Rights Reserved..png" alt="rights" class="rights">
                <div class="media">
                    <img src="img/Facebook Icon.svg" alt="facebook" class="facebook">
                    <img src="img/Linkedin Icon.svg" alt="linkedin" class="linkedin">
                    <img src="img/Twitter Icon.svg" alt="twitter" class="twitter">
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>