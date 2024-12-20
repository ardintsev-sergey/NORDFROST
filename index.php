<?php $utmmark = "?utm_source=pryamoy_marketing&utm_medium=rassilki&utm_campaign=email_marketing&utm_content=landing_yarkaya_zhizn&utm_term=november_2024" ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NORDFROST Official</title>
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="css/swiper.min.css" />

    <link rel="stylesheet" href="/css/style.css" />

    <script src="js/swiper.min.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="container header__container">
        <div class="header__logo-wrap">
          <a class="header__logo" href="#">
            <img src="img/nf-logo.png" alt="" />
          </a>
        </div>
        <nav class="header__nav main_nav">
          <ul class="header__nav-list">
            <li class="header__nav-item">
              <a href="https://nordfrost.ru/catalog/<?= $utmmark ?>" target="_blank">Каталог</a>
            </li>
            <li class="header__nav-item">
              <a href="https://nordfrost.ru/news/<?= $utmmark ?>" target="_blank">Новости</a>
            </li>
            <li class="header__nav-item">
              <a href="https://nordfrost.ru/brand/<?= $utmmark ?>" target="_blank">О бренде</a>
            </li>
            <li class="header__nav-item">
              <a href="https://nordfrost.ru/<?= $utmmark ?>" target="_blank">Наш сайт</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <section>
        <h1 class="visually-hidden">NORDFROST - сохраняя лучшее</h1>        
         <video class="banner__img" src="img/IMG_6197.MP4" poster="img/images/banner.webp" autoplay muted loop></video>        
      </section>

      <section class="advantages container">
        <h2 class="visually-hidden">Преимущества NORDFROST</h2>
        <p class="advantages__descr">
          Покупка бытовой техники одного проверенного бренда, такого как <b>NORDFROST,&nbsp;—</b>
          <br />
          это оптимальное и продуманное решение. У него есть несколько плюсов:
        </p>
        <ul class="advantages__list">
          <li class="advantages__item">
            <img class="advantages__img" src="img/icons/design.svg" alt="Дизайн" />
            <h3 class="advantages__item-title">Единая стилистика и дизайн всех приборов</h3>
          </li>
          <li class="advantages__item">
            <img class="advantages__img" src="img/icons/service.svg" alt="Сервис" />
            <h3 class="advantages__item-title">Гарантия и сервисное обслуживание в одном центре</h3>
          </li>
          <li class="advantages__item">
            <img class="advantages__img" src="img/icons/discount.svg" alt="Скидка" />
            <h3 class="advantages__item-title">Скидки и особые условия обслуживания</h3>
          </li>
        </ul>
        <p class="advantages__descr-bottom">
          А если вы сделаете выбор в пользу цветных моделей, то сможете сделать привычные ежедневные
          занятия ярче! Вот несколько ведущих позиций из ассортимента бренда
          <b>NORDFROST,</b> которые помогут вам оформить свою кухню и ванную «под ключ» — быстро,
          легко и с удовольствием.
        </p>
      </section>

      <section class="fridges">
        <h2 class="section-title fridges__title">Жизнь в цвете</h2>
        <div class="container">
          <p class="good-descr fridges__descr">
            Надежные холодильники, которые сохраняют свежесть продуктов и поднимают настроение
            своими жизнерадостными оттенками. Классический набор функций в авангардном цветовом
            исполнении!
          </p>

          <div class="good-list fridges__goods-list">
            <div class="good-list-wrap fridges__list-wrap">
              <a
                class="good-item-link fridges__item-link"
                href="https://nordfrost.ru/catalog/kbt/refrigerators/combi/nordfrost-nrb-164nf-or/<?= $utmmark ?>"
                target="_blank">
                <img src="img/images/fridge1.webp" alt="Холодильник NORDFROST NRB 164NF Or" />
                <p>Холодильник NORDFROST NRB 164NF Or</p>
              </a>
              <a
                class="good-item-link fridges__item-link"
                href="https://nordfrost.ru/catalog/kbt/refrigerators/combi/nordfrost-nrb-162nf-r/<?= $utmmark ?>"
                target="_blank">
                <img src="img/images/fridge2.webp" alt="Холодильник NORDFROST NRB 162NF R" />
                <p>Холодильник NORDFROST NRB 162NF R</p>
              </a>
            </div>
            <a
              class="good-link fridges__link"
              href="https://nordfrost.ru/catalog/kbt/refrigerators/<?= $utmmark ?>"
              target="_blank"
              >ПОДРОБНЕЕ</a
            >
          </div>
        </div>
        <div class="swiper fridges__swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="img/images/fridges-slide-1.webp" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="img/images/fridges-slide-2.webp" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="img/images/fridges-slide-3.webp" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="img/images/fridges-slide-4.webp" alt="" />
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-btn-fridge-prev swiper-button-prev swiper-btn"></div>
          <div class="swiper-btn-fridge-next swiper-button-next swiper-btn"></div>
        </div>
      </section>

      <section class="washeres">
        <h2 class="section-title washeres__title">ВРАЩАЙТЕ БАРАБАН</h2>
        <div class="container">
          <p class="good-descr washeres__descr">
            Удобные стиральные машины с инверторным двигателем, которые идеально отстирывают вещи,
            бесшумно работают и экономят ваши ресурсы.
          </p>
          <div class="good-list washeres__goods-list">
            <div class="good-list-wrap washeres__list-wrap">
              <a
                class="good-item-link washeres__item-link"
                href="https://nordfrost.ru/catalog/kbt/stiralnie-mashiny/nordfrost-i-wq4-10712-w/<?= $utmmark ?>"
                target="_blank">
                <img
                  src="img/images/washer1.webp"
                  alt="Стиральная машина NORDFROST i-WQ4 10712 W с функцией сушки" />
                <p>Стиральная машина NORDFROST i-WQ4 10712 W с функцией сушки</p>
              </a>
              <a
                class="good-item-link washeres__item-link"
                href="https://nordfrost.ru/catalog/kbt/stiralnie-mashiny/nordfrost-i-ddq4-10120-w/<?= $utmmark ?>"
                target="_blank">
                <img
                  src="img/images/washer2.webp"
                  alt="Стиральная машина с прямым приводом NORDFROST i-DDQ4 10120 W" />
                <p>Стиральная машина с прямым приводом NORDFROST i-DDQ4 10120 W</p>
              </a>
            </div>
            <a
              class="good-link washeres__link"
              href="https://nordfrost.ru/catalog/kbt/stiralnie-mashiny/<?= $utmmark ?>"
              target="_blank"
              >ПОДРОБНЕЕ</a
            >
          </div>
          <div class="good-banner washeres__banner">
            <img src="img/images/washers-banner.webp" alt="" />
          </div>
        </div>
      </section>

      <section class="dishwasheres">
        <h2 class="section-title dishwasheres__title">НЕ СПОРЬТЕ, КТО БУДЕТ МЫТЬ ПОСУДУ!</h2>
        <div class="container">
          <p class="good-descr dishwasheres__descr">
            Надежные встраиваемые посудомоечные машины, которые отмоют большое количество посуды (до
            14 комплектов) при минимальном расходе воды и энергии.
          </p>
          <div class="good-list dishwasheres__goods-list">
            <div class="good-list-wrap dishwasheres__list-wrap">
              <a
                class="good-item-link dishwasheres__item-link"
                href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/vstraivaemie-posudomoechnye-mashiny/nordfrost-bi6-1463/<?= $utmmark ?>"
                target="_blank">
                <img
                  src="img/images/dishwash1.webp"
                  alt="Посудомоечная машина NORDFROST BI6 1463" />
                <p>Посудомоечная машина NORDFROST BI6 1463</p>
              </a>
              <a
                class="good-item-link dishwasheres__item-link"
                href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/vstraivaemie-posudomoechnye-mashiny/nordfrost-bi4-1063/<?= $utmmark ?>"
                target="_blank">
                <img
                  src="img/images/dishwash2.webp"
                  alt="Посудомоечная машина NORDFROST BI4 1063" />
                <p>Посудомоечная машина NORDFROST BI4 1063</p>
              </a>
            </div>
            <a
              class="good-link dishwasheres__link"
              href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/vstraivaemie-posudomoechnye-mashiny/<?= $utmmark ?>"
              target="_blank"
              >ПОДРОБНЕЕ</a
            >
          </div>
          <div class="good-banner dishwasheres__banner">
            <img src="img/images/dishwash-banner.webp" alt="" />
          </div>
        </div>
      </section>

      <section class="ovens">
        <h2 class="section-title ovens__title">ДУХОВОЙ ОРКЕСТР</h2>
        <div class="container">
          <p class="good-descr ovens__descr">
            Встраиваемые духовые шкафы с функцией конвекции и грилем для создания кулинарных
            шедевров на вашей кухне.
          </p>
          <div class="good-list ovens__goods-list">
            <div class="good-list-wrap ovens__list-wrap">
              <a
                class="good-item-link ovens__item-link"
                href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/dukhovye-shkafy/nordfrost-hm-65130-b/<?= $utmmark ?>"
                target="_blank">
                <img src="img/images/oven1.webp" alt="Духовой шкаф NORDFROST HM 65130 B" />
                <p>Духовой шкаф NORDFROST HM 65130 B</p>
              </a>
              <a
                class="good-item-link ovens__item-link"
                href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/dukhovye-shkafy/nordfrost-duh-hm-6080-w/<?= $utmmark ?>"
                target="_blank">
                <img src="img/images/oven2.webp" alt="Духовой шкаф NORDFROST HM 6080 W" />
                <p>Духовой шкаф NORDFROST HM 6080 W</p>
              </a>
            </div>
            <a
              class="good-link ovens__link"
              href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/dukhovye-shkafy/<?= $utmmark ?>"
              target="_blank"
              >ПОДРОБНЕЕ</a
            >
          </div>
          <div class="good-banner ovens__banner">
            <img src="img/images/oven-banner.webp" alt="" />
          </div>
        </div>
      </section>

      <section class="cooktop">
        <h2 class="section-title cooktop__title">ГОТОВЬТЕ С ОГОНЬКОМ</h2>
        <div class="container">
          <p class="good-descr cooktop__descr">
            Варочные поверхности с 4 газовыми конфорками и автоматическим электророзжигом — чтобы вы
            готовили любимые блюда с огоньком! За вашу безопасность будет отвечать надежная система
            «Газ-контроль».
          </p>
          <div class="good-list cooktop__goods-list">
            <div class="good-list-wrap cooktop__list-wrap">
              <a
                class="good-item-link cooktop__item-link"
                href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/varochnye-poverkhnosti/nordfrost-hm-6044-b/<?= $utmmark ?>"
                target="_blank">
                <img
                  src="img/images/cooktop1.webp"
                  alt="Варочная поверхность NORDFROST HM 6044 B" />
                <p>Варочная поверхность NORDFROST HM 6044 B</p>
              </a>
              <a
                class="good-item-link cooktop__item-link"
                href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/varochnye-poverkhnosti/nordfrost-hs-6043-w/<?= $utmmark ?>"
                target="_blank">
                <img
                  src="img/images/cooktop2.webp"
                  alt="Варочная поверхность NORDFROST HS 6043 W" />
                <p>Варочная поверхность NORDFROST HS 6043 W</p>
              </a>
            </div>
            <a
              class="good-link cooktop__link"
              href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/varochnye-poverkhnosti/<?= $utmmark ?>"
              target="_blank"
              >ПОДРОБНЕЕ</a
            >
          </div>
          <div class="good-banner cooktop__banner">
            <img src="img/images/cooktop-banner.webp" alt="" />
          </div>
        </div>
      </section>

      <section class="microwave">
        <h2 class="section-title microwave__title">КТО СЕГОДНЯ НА РАЗОГРЕВЕ?</h2>
        <div class="container">
          <p class="good-descr microwave__descr">
            Встраиваемая микроволновая печь объемом 20 л в черном и белом цвете, которая разогреет,
            разморозит и приготовит продукты и блюда к вашему столу. Дополнительные полезные функции
            — «Очистка», «Память» и «Замок от детей».
          </p>
          <div class="good-list microwave__goods-list">
            <div class="good-list-wrap microwave__list-wrap">
              <a
                class="good-item-link microwave__item-link"
                href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/vstraivaemie-mikrovolnovye-pechi/nordfrost-bmw-2071-b/<?= $utmmark ?>"
                target="_blank">
                <img
                  src="img/images/microwave1.webp"
                  alt="Микроволновая печь NORDFROST BMW 2071 B" />
                <p>Микроволновая печь NORDFROST BMW 2071 B</p>
              </a>
              <a
                class="good-item-link microwave__item-link"
                href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/vstraivaemie-mikrovolnovye-pechi/nordfrost-bmw-2071-w/<?= $utmmark ?>"
                target="_blank">
                <img
                  src="img/images/microwave2.webp"
                  alt="Микроволновая печь NORDFROST BMW 2071 W" />
                <p>Микроволновая печь NORDFROST BMW 2071 W</p>
              </a>
            </div>
            <a
              class="good-link microwave__link"
              href="https://nordfrost.ru/catalog/vstraivaemaya-tekhnika/vstraivaemie-mikrovolnovye-pechi/<?= $utmmark ?>"
              target="_blank"
              >ПОДРОБНЕЕ</a
            >
          </div>
        </div>
        <div class="good-banner microwave__banner">
          <img src="img/images/microwave-banner.webp" alt="" />
        </div>
      </section>

      <section class="advantages-bottom container">
        <h2 class="visually-hidden">Преимущества NORDFROST</h2>
        <p class="advantages-bottom__descr">
          Надежная и функциональная техника <b>NORDFROST</b> станет помощником в решении бытовых
          задач, и вы получите удовольствие от привычных домашних дел!
        </p>
        <ul class="advantages-bottom__list">
          <li class="advantages-bottom__item">
            <img class="advantages-bottom__img" src="img/icons/guarantee.svg" alt="Гарантия" />
            <h3 class="advantages-bottom__item-title">
              Официальная гарантия  на всю бытовую технику
            </h3>
          </li>
          <li class="advantages-bottom__item">
            <img
              class="advantages-bottom__img"
              src="img/icons/centers.svg"
              alt="Сервисные центры" />
            <h3 class="advantages-bottom__item-title">Более 130 сервисных центров</h3>
          </li>
        </ul>
      </section>
    </main>

    <footer class="footer">
      <div class="container footer__container">
        <div class="footer__logo-wrap">
          <a class="footer__logo" href="#">
            <img src="img/nf-logo.png" alt="" />
          </a>
        </div>
        <div class="footer__tel-wrap">
          <p class="footer__tel-title">Телефон</p>
          <p class="footer__tel-descr">Поддержка NORDFROST по России</p>
          <a class="footer__tel-number" href="tel:+78007001225">8 800 700-12-25</a>
          <p class="footer__tel-time">пн-пт: с 9 до 18 часов, сб и вс - выходной</p>
        </div>
        <div class="footer__mail-wrap">
          <a class="footer__mail-title" href="mailto:nordfrost.ru">Вопросы и предложения</a>
          <a class="footer__mail-post" href="mailto:nordfrost.ru">nordfrost.ru</a>
        </div>
      </div>
    </footer>

    <div id="modal-content">
      <p>Контент модалки</p>
      <button type="button" id="modal-close" href="#close">Закрыть</button>
    </div>

    <script>
      const swiper = new Swiper(".fridges__swiper", {
        loop: true,
        centeredSlides: true,

        autoplay: {
          delay: 5000,
        },

        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },

        navigation: {
          nextEl: ".swiper-btn-fridge-next",
          prevEl: ".swiper-btn-fridge-prev",
        },
      });
      
    </script>
  </body>
</html>
