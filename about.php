<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|
        Roboto:400,500&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery.formstyler.css">
    <link rel="stylesheet" href="css/about-style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>

    <!-------------- Header(Верхняя часть сайта) -------------->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__contacts">
                    <a class="header__phone" href="tel:78888880101">+7(888)888-01-01</a>
                    <a class="header__email" href="#">manager@vita.ru</a>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">Бесплатная
                        консультация</a>
                </div>
            </div>
        </div>
        <div class="header__content">
            <div class="container">
                <div class="header__content-inner">
                    <div class="header__logo">
                        <a href="#">
                            <img src="img/logo-d.png" alt="">
                        </a>
                    </div>
                    <nav class="menu">
                        <div class="header__btn-menu">
                            <span class="icon-bars"></span>
                        </div>
                        <ul>
                            <li><a class="menu-main" href="index.php">Главное</a></li>
                            <li><a class="menu-about" href="about.php">О компании</a></li>
                            <li><a class="menu-srv" href="services.php">Услуги</a></li>
                            <li><a class="menu-med" href="medic.php">Врачи</a></li>
                            <li><a class="menu-cal" href="call.php">Контакты</a></li>
                            <li><a class="menu-prf" href="profile.php">Личный кабинет</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-------------- /////////////////////////// -------------->


    <!-------------- About(О компании) -------------->
    <section class="about">
        <div class="about__company">
            <div class="container">
                <div class="about__inner">
                    <div class="about__title">
                        О компании
                    </div>
                    <div class="about__title-second">
                        Добро пожаловать на сайт частной стоматологической клиники «Дантист».
                    </div>
                    <div class="about__text">
                        <p class="about__text-p">Основной направленностью и философией нашего учреждения мы считаем
                            оказание как можно большему числу жителей города высококачественной квалифицированной
                            стоматологической помощи на уровне мировых стандартов, с использованием современных
                            технологий и по доступным ценам. Наша ценовая политика ориентирована на пациентов с
                            достатком среднего и выше среднего уровня. Однако мы не забываем о людях, которые желают
                            лечиться дешевле. Для этого имеется система скидок и ценовая ниша для услуг, выполняемых
                            недорогими качественными материалами предыдущих поколений и по более низким ценам.</p>

                        <p class="about__text-p">В стоматологии практикуют 5 врачей, имеющих сертификаты по
                            специальности и опыт работы 15 и более лет по специальности. Сейчас мы с уверенностью можем
                            сказать, что у нас работают специалисты грамотные, читающие, любящие свое дело, и, что
                            немаловажно в нашей работе, с хорошими руками. Наличие высококвалифицированных специалистов,
                            наряду с использованием современного оборудования, внедрением передовых технологий позволяет
                            нам быстро развиваться. Об этом свидетельствуют постоянно растущее количество и
                            положительные отзывы пациентов. У нас лечатся семьями, нас рекомендуют друзьям, что, по
                            нашему мнению, является основным критерием качества оказываемых услуг.</p>

                        <p class="about__text-p">Надоело искать хорошего стоматолога? Выбор за Вами. Желаем Вам здоровья
                            и улыбайтесь снами!</p>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------- ///////////////// -------------->

    <!-------------- Footer(Нижняя часть сайта) -------------->
    <footer class="footer">
        <div class="footer__copy">
            <div class="container">
                <div class="copy__text">
                    © 2020 Template by Plisko Vladimir. Все права защищены.
                </div>
            </div>
        </div>
    </footer>
    <!-------------- ////////////////////////// -------------->


    <div id="modal">
        <form>
            <input type="text" placeholder="Ваше имя">
            <input type="text" placeholder="Ваш телефон">
            <input type="submit" value="Отправить">
        </form>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.formstyler.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>