<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<div class="back">
    <header class="container">
        <div class="first">
            <a class="venzo-a" href="index.html">VenZo.</a>
            <ul>
                <li><a href="#new">Новинки <img width="15px" height="15px" src="img/Arrow-down.png" alt=""></a></li>
                <li><a href="/index.php?r=page/listproduct">Товары <img width="15px" height="15px" src="img/Arrow-down.png" alt=""></a></li>
                <li><a href="https://youtu.be/tz_k8azJlGA?si=_ZZ1PTT6ax0Hnaca">Блог <img width="15px" height="15px" src="img/Arrow-down.png" alt=""></a></li>
            </ul>
            <form class="form1">
                <input type="text" placeholder="Найти">
            </form>
        </div>
        <div class="second">
            <button class="cart" id="like">
                <img class="cart__image" src="img/Heart.png" alt="" />
            </button>
            <!-- <a href=""><img src="img/Heart.png" alt=""></a> -->
            <button class="cart" id="cart">
                <img class="cart__image" src="img/Cart.png" alt="" />
            </button>
            <!-- <a href="cart.html"><img src="img/Cart.png" alt=""></a> -->
            <button class="cart" id="regist">
                <img class="card__image" src="img/vxod.png" alt="">
            </button>
        </div>
    </header>
    <section class="container2">
        <div class="about">
            <h2>Более 1000<br> растений
                <br>нашли свой<br> дом
            </h2>
            <p class="about-p">Широкий выбор различных<br> растений. Каждое растение<br> выращено индивидуальным<br> способом.
            </p>
            <a class="btn1" href="https://youtu.be/ci_BqyITDrM?si=V7hzOola9OYXrLTz">Подробнее</a>
        </div>
    </section>
    <section class="container2">
        <div class="flora-btn">
            <div class="owl-prev"><img src="img/l.svg" alt=""></div>
            <div class="owl-next"><img src="img/r.svg" alt=""></div>
        </div>
    </section>
    <section>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img width="296px" height="300px" src="img/1.png" alt="">
            </div>
            <div class="item">
                <img width="296px" height="300px" src="img/2.png" alt="">
            </div>
            <div class="item">
                <img width="296px" height="300px" src="img/3.png" alt="">
            </div>
            <div class="item">
                <img width="296px" height="300px" src="img/4.png" alt="">
            </div>
            <div class="item">
                <img width="296px" height="300px" src="img/5.jpg" alt="">
            </div>
            <div class="item">
                <img width="296px" height="300px" src="img/6.jpg" alt="">
            </div>
            <div class="item">
                <img width="296px" height="300px" src="img/7.jpg" alt="">
            </div>
            <div class="item">
                <img width="296px" height="300px" src="img/8.jpg" alt="">
            </div>
        </div>
    </section>
</div>

<main class="container2">
    <section class="item">
        <div href="item1.html" class="item-block card">
            <div class="new-item">
                <a name="new" class="new-text">Новинка!</a>
            </div>
            <a class="card__image" href="http://venzo.sag/index.php?r=page/item1"><img class="item-img" width="215px" height="270px" src="img/fl1.svg" alt=""></a>
            <div class="item-text">
                <div class="item-text1">
                    <p class="name1 card__title">Редукс Бланголс</p>
                    <p class="name2">Descripción Product</p>
                </div>
                <div class="item-text2">
                    <p class="name1 card__price--common">13$</p>
                    <a class="btn2 card__add" href="">В корзину</a>
                    <a class="card__like" href=""><img width="32px" height="32px" src="img/like.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="item-block card">
            <a class="card__image" href="http://venzo.sag/index.php?r=page/item2"><img class="item-img" style="margin-left: 30px;" src="img/fl2.svg" alt=""></a>
            <div class="item-text">
                <div class="item-text1">
                    <p class="name1 card__title">Вернин Долголетний</p>
                    <p class="name2">Descripción Product</p>
                </div>
                <div class="item-text2">
                    <p class="name1 card__price--common">13$</p>
                    <a class="btn2 card__add" href="">В корзину</a>
                    <a class="card__like" href=""><img width="32px" height="32px" src="img/like.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="item-block card">
            <a class="card__image" href="http://venzo.sag/index.php?r=page/item3"><img class="item-img2" src="img/fl3.svg" alt=""></a>
            <div class="item-text">
                <div class="item-text1">
                    <p class="name1 card__title">Прондиан</p>
                    <p class="name2">Descripción Product</p>
                </div>
                <div class="item-text2">
                    <p class="name1 card__price--common">13$</p>
                    <a class="btn2 card__add" href="">В корзину</a>
                    <a class="card__like" href=""><img width="32px" height="32px" src="img/like.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section class="item2">
        <div class="item-block card">
            <a class="card__image" href="http://venzo.sag/index.php?r=page/item4"><img class="item-img" src="img/fl4.svg" alt=""></a>
            <div class="item-text">
                <div class="item-text1">
                    <p class="name1 card__title">Намблел Зеленый</p>
                    <p class="name2">Descripción Product</p>
                </div>
                <div class="item-text2">
                    <p class="name1 card__price--common">13$</p>
                    <a class="btn2 card__add" href="">В корзину</a>
                    <a class="card__like" href=""><img width="32px" height="32px" src="img/like.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="item-block card">
            <a class="card__image" href="http://venzo.sag/index.php?r=page/item5"><img class="item-img" src="img/fl5.svg" alt=""></a>
            <div class="item-text">
                <div class="item-text1">
                    <p class="name1 card__title">Линдиас</p>
                    <p class="name2">Descripción Product</p>
                </div>
                <div class="item-text2">
                    <p class="name1 card__price--common">13$</p>
                    <a class="btn2 card__add" href="">В корзину</a>
                    <a class="card__like" href=""><img width="32px" height="32px" src="img/like.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="item-block card">
            <a class="card__image" href="http://venzo.sag/index.php?r=page/item6"><img class="item-img" src="img/fl6.svg" alt=""></a>
            <div class="item-text">
                <div class="item-text1">
                    <p class="name1 card__title">Пальма</p>
                    <p class="name2">Descripción Product</p>
                </div>
                <div class="item-text2">
                    <p class="name1 card__price--common">13$</p>
                    <a class="btn2 card__add" href="">В корзину</a>
                    <a class="card__like" href=""><img width="32px" height="32px" src="img/like.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="container line">ㅤ</div>

<footer class="container">
    <div class="end">
        <div>
            <p class="venzo">VenZo.</p>
            <p>Мировой цветочный магазин с<br> 2020 года. На нашем сайте мы<br> продаем более 100+ растений</p>
            <p><img src="img/where.png" alt=""> Москва, Россия</p>
            <p><img src="img/call.png" alt=""> +7 (123) 456 78 90</p>
            <p>www.venzo.com</p>
        </div>
        <div class="menu">
            <p class="about-footer">Меню</p>
            <p><a href="#new">Товары</a></p>
            <p><a href="shop.html">Новинки</a></p>
            <p><a href="https://youtu.be/tz_k8azJlGA?si=_ZZ1PTT6ax0Hnaca">Блог</a></p>
        </div>
        <div class="acc">
            <p class="about-footer">Аккаунт</p>
            <p><a href="">Мой аккаунт</a></p>
            <p><a href="">Оплата</a></p>
            <p><a href="">Моя корзина</a></p>
        </div>
        <div class="us">
            <p class="about-footer">Оставайтесь с нами</p>
            <p><a href="https://ru.wikipedia.org/wiki/Facebook">Facebook</a></p>
            <p><a href="https://ru.wikipedia.org/wiki/Instagram">Instagram</a></p>
            <p><a href="https://en.wikipedia.org/wiki/Twitter,_Inc.">Twitter</a></p>
        </div>
        <div>
            <p class="about-footer">Оставайтесь с нами</p>
            <div>
                <form class="form2">
                    <input class="input2" type="text" placeholder="Ваш email">
                    <a class="input-btn" href=""><img src="img/send.svg" alt=""></a>
                </form>
            </div>
        </div>
    </div>
</footer>

<div class="popup">
    <div class="popup__container" id="popup_container">
        <div class="popup__item2">
            <h1 class="popup__title">Корзина</h1>
        </div>
        <div class="popup__item" id="popup_product_list">
            <div class="popup__product">
                <div class="popup__product-wrap">
                    <img
                            src="img/fl1.svg"
                            alt=""
                            class="popup__product-image"
                    />
                    <h2 class="popup__product-title">
                        Редукс Бланголс
                    </h2>
                </div>
                <div class="popup__product-wrap">
                    <div class="popup__product-price">13$</div>
                    <button class="popup__product-delete">✖</button>
                </div>
            </div>
        </div>
        <div class="popup__item">
            <div class="popup__cost">
                <h2 class="popup__cost-title">Итого</h2>
                <output class="popup__cost-value" id="popup_cost">13$</output>
            </div>
            <div class="popup__cost">
                <h2 class="popup__cost-title">Скидка</h2>
                <output class="popup__cost-value" id="popup_discount">2$</output>
            </div>
            <div class="popup__cost">
                <h2 class="popup__cost-title">Итого со скидкой</h2>
                <output class="popup__cost-value" id="popup_cost_discount">11$</output>
            </div>
        </div>
        <button class="popup__close" id="popup_close">✖</button>
    </div>
</div>


<div class="reg" id="reg">
    <div class="form-popup" id="myForm">
        <form class="form-container">
            <h1>Вход</h1>

            <label for="email"><b>Почта</b></label>
            <input type="text" placeholder="Введите почту здесь" name="email">

            <label for="psw"><b>Пароль</b></label>
            <input type="password" placeholder="Введите пароль здесь" name="psw">

            <div class="btns">
                <button class="btn">Войти</button>
                <button class="cancel" id="hider">✖</button>
            </div>
        </form>
    </div>
</div>


<div class="popup2">
    <div class="popup__container" id="popup_container">
        <div class="popup__item2">
            <h1 class="popup__title">Нравится</h1>
        </div>
        <div class="popup__item" id="popup_product_list">
            <div class="popup__product">
                <div class="popup__product-wrap">
                    <img
                            src="img/fl1.svg"
                            alt=""
                            class="popup__product-image"
                    />
                    <h2 class="popup__product-title">
                        Редукс Бланголс
                    </h2>
                </div>
                <div class="popup__product-wrap">
                    <button class="popup__product-delete">✖</button>
                </div>
            </div>
        </div>
        <button class="popup__close" id="popup_close2">✖</button>
    </div>
</div>

<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest
//                ? ['label' => 'Login', 'url' => ['/site/login']]
//                : '<li class="nav-item">'
//                    . Html::beginForm(['/site/logout'])
//                    . Html::submitButton(
//                        'Logout (' . Yii::$app->user->identity->username . ')',
//                        ['class' => 'nav-link btn btn-link logout']
//                    )
//                    . Html::endForm()
//                    . '</li>'
//        ]
//    ]);
//    NavBar::end();
//    ?>


<!--    <div class="container">-->
<!--        --><?php ////if (!empty($this->params['breadcrumbs'])): ?>
<!--           --><?php ////= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
<!--       --><?php ////endif ?>
<!--        --><?php //= Alert::widget() ?>
<!--        --><?php //= $content ?>
<!--    </div>-->

<!--<footer id="footer" class="mt-auto py-3 bg-light">-->
<!--    <div class="container">-->
<!--        <div class="row text-muted">-->
<!--            <div class="col-md-6 text-center text-md-start">&copy; My Company --><?php //= date('Y') ?><!--</div>-->
<!--            <div class="col-md-6 text-center text-md-end">--><?php //= Yii::powered() ?><!--</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
