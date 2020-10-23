<?php
require "db.php";
$all = R::exportAll(R::find('news', 'ORDER BY `id` DESC'));
//dump($all);
$title = "Конcультации и анализ в сфере финансов и бизнеса";
$meta = "Профессиональная поддержка и консультация торговли
на бирже и предоставление инструментов для торговли.";
?>
<?php require 'template/header.php' ?>
        <main class="page-main">
        <h1 class="visuallyHidden">Consulting Group</h1>


        <svg style="display: none;">
          <symbol viewBox="0 0 70 93" id="base-icon">
            <path d="M64.7875 14.5312C55.3875 7.55625 56.5625 0 56.5625 0H0.75V72.6562C0.75 83.7 13.0875 93 24.25 93H71.25V17.4375C71.25 17.4375 66.55 16.275 64.7875 14.5312ZM30.125 36.6188C24.8375 34.875 16.6125 31.9688 16.6125 25.575C17.2 20.925 24.25 17.4375 24.25 16.275V11.625H30.125V15.6938C36 16.275 40.7 18.0187 41.2875 18.0187L39.525 23.25C39.525 23.25 35.4125 21.5063 30.7125 21.5063C26.6 21.5063 24.25 23.25 23.6625 26.1562C23.6625 27.9 26.6 29.6438 31.3 31.3875C40.1125 34.2938 42.4625 37.7812 42.4625 42.4313C42.4625 46.5 41.875 51.7313 30.125 52.8938V58.125H24.25V53.475C24.25 52.8937 16.025 50.5687 15.4375 50.5687L18.375 45.3375C18.375 45.3375 24.8375 48.2437 30.125 47.6625C35.4125 47.0812 37.7625 44.175 37.7625 41.85C38.35 40.1062 35.4125 38.3625 30.125 36.6188ZM65.375 87.1875H24.25C18.375 87.1875 13.675 83.7 12.5 79.6312C11.9125 77.8875 12.5 75.5625 14.85 75.5625H53.625V15.6938C59.5 19.1812 65.375 22.0875 65.375 23.25V87.1875Z"/>
          </symbol>
          <symbol viewBox="0 0 80 94" id="pro-icon">
            <path d="M28.7021 -1.06208e-05C28.1774 0.0780198 27.6762 0.270574 27.2342 0.563989C27.2342 0.563989 22.6608 3.44184 17.7439 6.55468C12.8269 9.66391 7.35685 13.0913 6.10593 13.7855C6.02877 13.8189 5.9528 13.8551 5.87816 13.8939C1.33724 16.6958 0.393624 21.2729 0.230932 23.8398C0.220086 23.9591 0.230932 24.0568 0.230932 24.1833C0.191163 25.145 0.230932 25.7632 0.230932 25.7632V72.991C0.230932 79.853 8.23178 83.1538 15.8241 83.1538C18.3549 83.1538 20.8856 82.7453 23.0549 82.0222C24.501 81.2991 25.5386 79.853 25.5386 78.4068V40.4453C25.5386 32.1299 27.3463 28.2253 32.7694 24.9715C34.2155 24.2484 49.3785 13.7818 49.3785 13.7818C50.1015 13.0588 50.8463 11.5909 50.8463 10.5063V10.1665C50.8463 8.7203 50.1232 7.61399 49.0386 6.89091C47.954 6.16784 46.5079 6.16784 45.4232 6.89091C45.0617 7.25245 23.0079 22.1008 18.3079 24.6316C13.6079 27.5239 9.22239 28.2217 8.13778 26.7755C7.80155 26.4393 7.5087 25.4089 7.4617 24.4038V24.2918V24.1761C7.46532 23.1927 7.71839 21.3416 9.72132 20.1088C11.7532 18.9771 16.7966 15.7558 21.6991 12.6538C23.7707 11.3415 24.0274 11.2005 25.6507 10.1665C25.8644 11.0497 26.4028 11.82 27.1589 12.3242C27.9149 12.8283 28.833 13.0293 29.7305 12.8871C30.628 12.7449 31.4391 12.2699 32.0022 11.5567C32.5653 10.8435 32.8392 9.94446 32.7694 9.03845V3.61537C32.7734 3.10005 32.6673 2.58983 32.458 2.11889C32.2487 1.64796 31.9412 1.2272 31.556 0.884831C31.1709 0.542461 30.717 0.286389 30.2248 0.133781C29.7325 -0.0188268 29.2134 -0.0644434 28.7021 -1.06208e-05ZM57.6252 12.6538C57.0502 12.7495 56.507 12.9826 56.0416 13.3335C56.0416 13.3335 37.8418 25.5788 34.6892 27.6794C34.6509 27.7171 34.6136 27.7557 34.5771 27.7951C31.9595 29.7582 30.4085 32.0938 29.718 34.2304C29.2299 35.7453 29.1576 36.9818 29.154 37.9615V39.0931C29.1488 39.2052 29.1488 39.3174 29.154 39.4294V83.1538C29.154 90.0231 37.0645 94 44.2952 94C47.5491 94 50.4848 93.2986 52.654 91.8524C56.9925 89.3217 77.9617 72.9874 77.9617 72.9874C79.0463 72.2643 79.7694 71.2448 79.7694 70.1601V23.1601C79.7694 21.3525 79.068 20.2678 77.6219 19.5448C76.5372 18.8217 74.7549 19.1615 73.6702 19.8846C67.8856 24.2231 52.3142 36.472 48.6988 38.6412C43.6372 41.5335 38.8685 42.2566 37.0609 40.4489C36.3378 39.7258 36.3848 39.0461 36.3848 37.9615C36.4065 37.3397 36.4752 36.8046 36.6125 36.378C36.815 35.7489 37.2272 34.9752 38.7565 33.7821C38.8288 33.7243 38.7926 33.7279 38.8685 33.6701C41.4825 31.9238 49.4761 26.4755 54.6895 22.9324C54.9848 23.7248 55.5486 24.3885 56.2827 24.8082C57.0169 25.228 57.8749 25.3771 58.7076 25.2296C59.5402 25.0822 60.2949 24.6475 60.8402 24.0012C61.3856 23.3549 61.6872 22.5379 61.6925 21.6923V16.2692C61.6965 15.7539 61.5903 15.2437 61.3811 14.7727C61.1718 14.3018 60.8643 13.881 60.4791 13.5387C60.094 13.1963 59.64 12.9402 59.1478 12.7876C58.6556 12.635 58.1365 12.5894 57.6252 12.6538ZM72.5386 39.0931V46.3239L54.4617 60.3299V53.0991L72.5386 39.0931Z"/>
          </symbol>
          <symbol viewBox="0 0 105 94" id="trade-icon">
            <path d="M20.4195 11.75H2.92095C1.31691 11.75 0.0045166 13.0719 0.0045166 14.6875V79.3125C0.0045166 80.9281 1.31691 82.25 2.92095 82.25H20.4195C22.0236 82.25 23.336 80.9281 23.336 79.3125V14.6875C23.336 13.0719 22.0236 11.75 20.4195 11.75ZM17.5031 29.375H5.83738V23.5H17.5031V29.375Z"/>
            <path d="M49.5838 11.75H32.0853C30.4812 11.75 29.1688 13.0719 29.1688 14.6875V79.3125C29.1688 80.9281 30.4812 82.25 32.0853 82.25H49.5838C51.1879 82.25 52.5003 80.9281 52.5003 79.3125V14.6875C52.5003 13.0719 51.1879 11.75 49.5838 11.75ZM46.6674 29.375H35.0017V23.5H46.6674V29.375Z"/>
            <path d="M69.7301 16.2914L54.1038 24.2226C53.4156 24.575 52.8934 25.187 52.6509 25.9253C52.4084 26.6635 52.4652 27.4684 52.8089 28.1647L79.0568 80.6285C79.4067 81.3217 80.0142 81.8477 80.7472 82.0919C81.4802 82.3362 82.2793 82.279 82.9707 81.9327L98.5969 74.0015C99.2851 73.6491 99.8073 73.0371 100.05 72.2988C100.292 71.5606 100.236 70.7557 99.8918 70.0594L73.6439 17.5956C73.294 16.9024 72.6865 16.3764 71.9535 16.1322C71.2205 15.8879 70.4214 15.9451 69.7301 16.2914Z"/>
            <path d="M84.581 79.3125C84.581 80.0916 84.2738 80.8387 83.7268 81.3896C83.1799 81.9405 82.4381 82.25 81.6646 82.25C80.8911 82.25 80.1493 81.9405 79.6024 81.3896C79.0554 80.8387 78.7482 80.0916 78.7482 79.3125C78.7482 78.5334 79.0554 77.7863 79.6024 77.2354C80.1493 76.6845 80.8911 76.375 81.6646 76.375C82.4381 76.375 83.1799 76.6845 83.7268 77.2354C84.2738 77.7863 84.581 78.5334 84.581 79.3125Z"/>
          </symbol>
          <symbol viewBox="0 0 640 640" id="arrow-icon">
            <path d="M604.501,134.782c-9.999-10.05-26.222-10.05-36.221,0L306.014,422.558L43.721,134.782c-9.999-10.05-26.223-10.05-36.222,0s-9.999,26.35,0,36.399l279.103,306.241c5.331,5.357,12.422,7.652,19.386,7.296c6.988,0.356,14.055-1.939,19.386-7.296l279.128-306.268C614.5,161.106,614.5,144.832,604.501,134.782z"/>
          </symbol>
        </svg>
        <main class="page-main">
            <section class="learn-nav">
              <h2 class="learn-nav__h2">Выбери то, что подходит именно тебе</h2>
              <hr class="learn-nav__h2-line">
              <p class="learn-nav__title">Выберите вариант участия в зависимости от своего опыта и необходимого количества индивидуальной работы</p>
            </section>
            <div class="learn-nav__btn-wrp">
              <label class="learn__radio-label">
                <input class="learn__input-radio" type="radio" name="course-radio" checked onclick="check_trade()"/>
                <svg width="45" height="46" class="base-icon"><use xlink:href ="#base-icon"></use></svg>
                <svg width="50" height="30" class="learn-nav__arrow"><use xlink:href ="#arrow-icon"></use></svg>
                <div class="learn-nav__text-wrp">
                  <span>БАЗОВЫЙ</span>
                  <p>Начни уже сейчас и<br> бесплатно</p>
                </div>
              </label>
              <label class="learn__radio-label">
                <input class="learn__input-radio" type="radio" name="course-radio" onclick="check_trade()"/>
                <svg width="40" height="50" class="pro-icon"><use xlink:href ="#pro-icon"></use></svg>
                <svg width="50" height="30" class="learn-nav__arrow"><use xlink:href ="#arrow-icon"></use></svg>
                <div class="learn-nav__text-wrp">
                  <span>ФИБПРО</span>
                  <p>Будь новичком и<br> зарабатывай</p>
                </div>
              </label>
              <label class="learn__radio-label">
                <input class="learn__input-radio" type="radio" name="course-radio" onclick="check_trade()"/>
                <svg width="45" height="45" class="trade-icon"><use xlink:href ="#trade-icon"></use></svg>
                <svg width="50" height="30" class="learn-nav__arrow"><use xlink:href ="#arrow-icon"></use></svg>
                <div class="learn-nav__text-wrp">
                  <span>Я - ТРЕЙДЕР</span>
                  <p>Готовые решения<br> инвестиционных портфелей</p>
                </div>
              </label>
            </div>
            <section class="course"  id="course-base">
              <h2 class="course__h2">Курс «Базовый»</h2>
              <div class="course__text-wrp">
                <p class="course__nmbr">01</p>
                <hr class="course__hr">
                <p class="course__text">Эффективный алгоритм по обучению с первых шагов и консультированию начинающих, но перспективных специалистов не имеющих опыта торговли на финансовом рынке.
                  <br>Готовый практический курс по введению в сферу финансов - “Построение торговой системы”.</p>
              </div>
              <div class="learn__adv-wrp">
                <h3 class="learn__h3">Данный курс рассчитан на тех, кто хочет</h3>
                <ul class="learn__adv">
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv1.svg">
                    <p class="learn__adv-descr">Научиться финансовой грамотности</p>
                  </li>
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv2.svg">
                    <p class="learn__adv-descr">Организовать себе пассивный доход</p>
                  </li>
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv3.svg">
                    <p class="learn__adv-descr">Узнать варианты инвестирования денежных средств</p>
                  </li>
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv4.svg">
                    <p class="learn__adv-descr">Гарантировать финансовую свободу</p>
                  </li>
                </ul>
              </div>
              <div class="learn__info">
                <h3 class="learn__h3 learn__h3--info">НА ДАННОМ КУРСЕ ВЫ УЗНАЕТЕ</h3>
                <ul class="learn__info-list">
                  <li class="learn__info-item">
                    <img  width="68" height="73" src="/img/info-check.svg">
                    <p>Как без кредитов и долгов накопить на квартиу, машину в 2-3 раза быстрее</p>
                  </li>
                  <li class="learn__info-item">
                    <img  width="68" height="73" src="/img/info-check.svg">
                    <p>ЧТО ТАКОЕ РАСПРЕДЕЛЕНИЕ АКТИВОВ, И КАК ОНО ПОЗВОЛЯЕТ СНИЗИТЬ РИСК И УВЕЛИЧИТЬ ДОХОДНОСТЬ</p>
                  </li>
                  <li class="learn__info-item">
                    <img width="68" height="73" src="/img/info-check.svg">
                    <p>Где открыть брокерский счет и как работать с торговой программой</p>
                  </li>
                  <li class="learn__info-item--btn">
                    <a href="#" class="learn__info-btn">Записаться</a>
                  </li>
                </ul>
              </div>
              <h2 class="learn-nav__h2 learn-nav__h2--title">Программа обучения<br>курса «Базовый»</h2>
              <p class="learn-nav__title">длительность курса 7-10 часов </p>
              <ul class="cd-gallery">
                <li>
                    <ul class="cd-item-wrapper">
                      <li class="selected">
                        <p class="gallery__title">Модуль 1</p>
                        <h3 class="gallery__h3">Психология торговли</h3>
                        <p class="gallery__descr">Психология работы на рынке. Особенности психологического анализа</p>
                      </li>

                      <li class="move-right" data-sale="true">
                        <p class="gallery__title">Модуль 2</p>
                        <h3 class="gallery__h3">Природа формирования движений и трендов </h3>
                        <p class="gallery__descr">Определение лучших условий для входа в сделку</p>
                      </li>

                      <li>
                        <p class="gallery__title">Модуль 3</p>
                        <h3 class="gallery__h3">Построение торгового плана</h3>
                        <p class="gallery__descr">Правила управления капиталом</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 4</p>
                        <h3 class="gallery__h3">Фундаментальный анализ</h3>
                        <p class="gallery__descr">Экономические, политические  и другие факторы </p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 5</p>
                        <h3 class="gallery__h3">Технический анализ</h3>
                        <p class="gallery__descr">Основные графические сигналы: анализ тренда, анализ фигур</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 6</p>
                        <h3 class="gallery__h3">Среднесрочная тенденция рынка</h3>
                        <p class="gallery__descr">Основные принципы  и анализ среднесрочной\долгосрочной торговли</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 7</p>
                        <h3 class="gallery__h3">Нестандартная сетка Фибоначчи</h3>
                        <p class="gallery__descr">Значения уровней. Правила построения и открытия сделок</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 8</p>
                        <h3 class="gallery__h3">Биржевые объемы</h3>
                        <p class="gallery__descr">Фильтрация сделок с помощью объемного анализа</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 9</p>
                        <h3 class="gallery__h3">Инструменты Фибоначчи</h3>
                        <p class="gallery__descr">Принцип автономности и комбинирования инстурментов. Построение торговой системы</p>
                      </li>
                    </ul> <!-- cd-item-wrapper -->
                </li>
              </ul>
              <ul class="lessons--desktop">
                <li>
                  <p class="gallery__title">Модуль 1</p>
                  <h3 class="gallery__h3">Психология торговли</h3>
                  <p class="gallery__descr">Психология работы на рынке. Особенности психологического анализа</p>
                </li>

                <li>
                  <p class="gallery__title">Модуль 2</p>
                  <h3 class="gallery__h3">Природа формирования движений и трендов </h3>
                  <p class="gallery__descr">Определение лучших условий для входа в сделку</p>
                </li>

                <li>
                  <p class="gallery__title">Модуль 3</p>
                  <h3 class="gallery__h3">Построение торгового плана</h3>
                  <p class="gallery__descr">Правила управления капиталом</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 4</p>
                  <h3 class="gallery__h3">Фундаментальный анализ</h3>
                  <p class="gallery__descr">Экономические, политические  и другие факторы </p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 5</p>
                  <h3 class="gallery__h3">Технический анализ</h3>
                  <p class="gallery__descr">Основные графические сигналы: анализ тренда, анализ фигур</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 6</p>
                  <h3 class="gallery__h3">Среднесрочная тенденция рынка</h3>
                  <p class="gallery__descr">Основные принципы  и анализ среднесрочной\долгосрочной торговли</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 7</p>
                  <h3 class="gallery__h3">Нестандартная сетка Фибоначчи</h3>
                  <p class="gallery__descr">Значения уровней. Правила построения и открытия сделок</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 8</p>
                  <h3 class="gallery__h3">Биржевые объемы</h3>
                  <p class="gallery__descr">Фильтрация сделок с помощью объемного анализа</p>
                </li>
                <li class="gallery__li-center--last">
                  <p class="gallery__title">Модуль 9</p>
                  <h3 class="gallery__h3">Инструменты Фибоначчи</h3>
                  <p class="gallery__descr">Принцип автономности и комбинирования инстурментов. Построение торговой системы</p>
                </li>
              </ul>
            </section>
            <section class="course"  id="course-fibpro">
              <h2 class="course__h2">Курс «ФИБОНАЧЧИ»</h2>
              <div class="course__text-wrp">
                <p class="course__nmbr">02</p>
                <hr class="course__hr">
                <p class="course__text">Авторский курс математической торговли с использованием инструментов Фибоначчи</p>
              </div>
              <div class="learn__adv-wrp">
                <h3 class="learn__h3">Данный курс рассчитан на тех, кто хочет</h3>
                <ul class="learn__adv">
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv1.svg">
                    <p class="learn__adv-descr">Научиться финансовой грамотности</p>
                  </li>
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv2.svg">
                    <p class="learn__adv-descr">Организовать себе пассивный доход</p>
                  </li>
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv3.svg">
                    <p class="learn__adv-descr">Узнать варианты инвестирования денежных средств</p>
                  </li>
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv4.svg">
                    <p class="learn__adv-descr">Гарантировать финансовую свободу</p>
                  </li>
                </ul>
              </div>
              <div class="learn__info">
                <h3 class="learn__h3 learn__h3--info">НА ДАННОМ КУРСЕ ВЫ УЗНАЕТЕ</h3>
                <ul class="learn__info-list">
                  <li class="learn__info-item">
                    <img  width="68" height="73" src="/img/info-check.svg">
                    <p>Как использовать систему работы по уровням Фибоначчи  на сырьевых активах, валютных парах, индексах, рынке ценных бумаг.  </p>
                  </li>
                  <li class="learn__info-item">
                    <img  width="68" height="73" src="/img/info-check.svg">
                    <p>Как полноценно работать на рынках Forex, срочных и фондовых площадках ММВБ, NYSE а также Криптовалюте с применением индивидуальных стратегий.</p>
                  </li>
                  <li class="learn__info-item--btn">
                    <a href="#" class="learn__info-btn">Записаться</a>
                  </li>
                </ul>
              </div>
              <h2 class="learn-nav__h2 learn-nav__h2--title">Программа обучения<br>курса «Фибоначчи»</h2>
              <p class="learn-nav__title">длительность курса 7-10 часов </p>
              <ul class="cd-gallery">
                <li>
                    <ul class="cd-item-wrapper">
                      <li class="selected">
                        <p class="gallery__title">Модуль 1</p>
                        <h3 class="gallery__h3">Психология торговли</h3>
                        <p class="gallery__descr">Психология работы на рынке. Особенности психологического анализа</p>
                      </li>

                      <li class="move-right" data-sale="true">
                        <p class="gallery__title">Модуль 2</p>
                        <h3 class="gallery__h3">Природа формирования движений и трендов </h3>
                        <p class="gallery__descr">Определение лучших условий для входа в сделку</p>
                      </li>

                      <li>
                        <p class="gallery__title">Модуль 3</p>
                        <h3 class="gallery__h3">Построение торгового плана</h3>
                        <p class="gallery__descr">Правила управления капиталом</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 4</p>
                        <h3 class="gallery__h3">Фундаментальный анализ</h3>
                        <p class="gallery__descr">Экономические, политические  и другие факторы </p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 5</p>
                        <h3 class="gallery__h3">Технический анализ</h3>
                        <p class="gallery__descr">Основные графические сигналы: анализ тренда, анализ фигур</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 6</p>
                        <h3 class="gallery__h3">Среднесрочная тенденция рынка</h3>
                        <p class="gallery__descr">Основные принципы  и анализ среднесрочной\долгосрочной торговли</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 7</p>
                        <h3 class="gallery__h3">Нестандартная сетка Фибоначчи</h3>
                        <p class="gallery__descr">Значения уровней. Правила построения и открытия сделок</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 8</p>
                        <h3 class="gallery__h3">Биржевые объемы</h3>
                        <p class="gallery__descr">Фильтрация сделок с помощью объемного анализа</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 9</p>
                        <h3 class="gallery__h3">Инструменты Фибоначчи</h3>
                        <p class="gallery__descr">Принцип автономности и комбинирования инстурментов. Построение торговой системы</p>
                      </li>
                    </ul> <!-- cd-item-wrapper -->
                </li>
              </ul>
              <ul class="lessons--desktop">
                <li>
                  <p class="gallery__title">Модуль 1</p>
                  <h3 class="gallery__h3">Психология торговли</h3>
                  <p class="gallery__descr">Психология работы на рынке. Особенности психологического анализа</p>
                </li>

                <li>
                  <p class="gallery__title">Модуль 2</p>
                  <h3 class="gallery__h3">Природа формирования движений и трендов </h3>
                  <p class="gallery__descr">Определение лучших условий для входа в сделку</p>
                </li>

                <li>
                  <p class="gallery__title">Модуль 3</p>
                  <h3 class="gallery__h3">Построение торгового плана</h3>
                  <p class="gallery__descr">Правила управления капиталом</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 4</p>
                  <h3 class="gallery__h3">Фундаментальный анализ</h3>
                  <p class="gallery__descr">Экономические, политические  и другие факторы </p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 5</p>
                  <h3 class="gallery__h3">Технический анализ</h3>
                  <p class="gallery__descr">Основные графические сигналы: анализ тренда, анализ фигур</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 6</p>
                  <h3 class="gallery__h3">Среднесрочная тенденция рынка</h3>
                  <p class="gallery__descr">Основные принципы  и анализ среднесрочной\долгосрочной торговли</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 7</p>
                  <h3 class="gallery__h3">Нестандартная сетка Фибоначчи</h3>
                  <p class="gallery__descr">Значения уровней. Правила построения и открытия сделок</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 8</p>
                  <h3 class="gallery__h3">Биржевые объемы</h3>
                  <p class="gallery__descr">Фильтрация сделок с помощью объемного анализа</p>
                </li>
                <li class="gallery__li-center--last">
                  <p class="gallery__title">Модуль 9</p>
                  <h3 class="gallery__h3">Инструменты Фибоначчи</h3>
                  <p class="gallery__descr">Принцип автономности и комбинирования инстурментов. Построение торговой системы</p>
                </li>
              </ul>
              <hr class="learn__hr">
              <div class="learn__pro-vip-wrp">
                <div class="learn__pro">
                  <img class="learn__pro-img" src="/img/pro.svg">
                    <p class="learn__pro-text">+ 3 ИНДИВИДУАЛЬНЫХ ЗАНЯТИЙ<br>
                      + 1 МЕСЯЦ ПОДПИСКИ НА<br>УНИКАЛЬНЫЙ ПЛАТНЫЙ КАНАЛ<br>“LIGHT”</p>
                    <a class="learn__pro-btn" href="#">Хочу</a>
                </div>
                <div class="learn__pro learn__pro--vip">
                  <img class="learn__pro-img" src="/img/vip.svg">
                    <p class="learn__pro-text">+ 10 ИНДИВИДУАЛЬНЫХ ЗАНЯТИЙ<br>
                      + СОСТАВЛЕНИЕ ИНДИВИДУАЛЬНОГО<br>ИНВЕСТИЦИОННОГО ПОРТФЕЛЯ НА<br>ФОНДОВОМ РЫНКЕ<br>
                      + ГРАФИК СЕЗОННОСТИ ДВИЖЕНИЯ<br>АКТИВОВ В ТЕЧЕНИИ 3 МЕСЯЦЕВ</p>
                    <a class="learn__pro-btn learn__vip-btn" href="#">Хочу</a>
                </div>
              </div>
            </section>

            <section class="course"  id="course-trade">
              <h2 class="course__h2">Курс «Я - трейдер»</h2>
              <div class="course__text-wrp">
                <p class="course__nmbr">03</p>
                <hr class="course__hr">
                <p class="course__text">Специальный курс Маржинальной торговли
                  <br>
                  Практическое использование данных с Чикагской товарной биржи, фьючерсов и опционов в торговле на Международных финансовых рынках.</p>
              </div>
              <div class="learn__adv-wrp">
                <h3 class="learn__h3">Данный курс рассчитан на тех, кто хочет</h3>
                <ul class="learn__adv">
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv1.svg">
                    <p class="learn__adv-descr">Научиться финансовой грамотности</p>
                  </li>
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv2.svg">
                    <p class="learn__adv-descr">Организовать себе пассивный доход</p>
                  </li>
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv3.svg">
                    <p class="learn__adv-descr">Узнать варианты инвестирования денежных средств</p>
                  </li>
                  <li class="learn__adv-item">
                    <img class="learn__adv-img" src="/img/learn-adv4.svg">
                    <p class="learn__adv-descr">Гарантировать финансовую свободу</p>
                  </li>
                </ul>
              </div>
              <div class="learn__info">
                <h3 class="learn__h3 learn__h3--info">НА ДАННОМ КУРСЕ ВЫ УЗНАЕТЕ</h3>
                <ul class="learn__info-list">
                  <li class="learn__info-item">
                    <img  width="68" height="73" src="/img/info-check.svg">
                    <p>Как использовать систему работы по маржинальным уровням на сырьевых активах, валютных парах, индексах, рынке ценных бумаг.</p>
                  </li>
                  <li class="learn__info-item">
                    <img  width="68" height="73" src="/img/info-check.svg">
                    <p>Как полноценно работать на рынках Forex, срочных и фондовых площадках ММВБ, NYSE а также Криптовалюте с применением индивидуальных стратегий.</p>
                  </li>
                  <li class="learn__info-item--btn">
                    <a href="#" class="learn__info-btn">Записаться</a>
                  </li>
                </ul>
              </div>
              <h2 class="learn-nav__h2 learn-nav__h2--title">Программа обучения<br>курса «Я - трейдер»</h2>
              <p class="learn-nav__title">длительность курса 15-20 часов </p>
              <ul class="cd-gallery">
                <li>
                    <ul class="cd-item-wrapper">
                      <li class="selected">
                        <p class="gallery__title">Модуль 1</p>
                        <h3 class="gallery__h3">Психология торговли</h3>
                        <p class="gallery__descr">Психология работы на рынке. Особенности психологического анализа</p>
                      </li>

                      <li class="move-right" data-sale="true">
                        <p class="gallery__title">Модуль 2</p>
                        <h3 class="gallery__h3">Природа формирования движений и трендов </h3>
                        <p class="gallery__descr">Определение лучших условий для входа в сделку</p>
                      </li>

                      <li>
                        <p class="gallery__title">Модуль 3</p>
                        <h3 class="gallery__h3">Построение торгового плана</h3>
                        <p class="gallery__descr">Правила управления капиталом</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 4</p>
                        <h3 class="gallery__h3">Фундаментальный анализ</h3>
                        <p class="gallery__descr">Экономические, политические  и другие факторы </p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 5</p>
                        <h3 class="gallery__h3">Технический анализ</h3>
                        <p class="gallery__descr">Основные графические сигналы: анализ тренда, анализ фигур</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 6</p>
                        <h3 class="gallery__h3">Среднесрочная тенденция рынка</h3>
                        <p class="gallery__descr">Основные принципы  и анализ среднесрочной\долгосрочной торговли</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 7</p>
                        <h3 class="gallery__h3">Понятие опционных уровней</h3>
                        <p class="gallery__descr">Расчет и применение опционных уровлей в торговле</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 8</p>
                        <h3 class="gallery__h3">Понятие маржинальности</h3>
                        <p class="gallery__descr">Маржинальные уровни. Торговля от маржинальных уровней</p>
                      </li>
                      <li>
                        <p class="gallery__title">Модуль 9</p>
                        <h3 class="gallery__h3">Биржевые объемы</h3>
                        <p class="gallery__descr">Фильтрация сделок с помощью объемного анализа</p>
                      </li>
                      <li>
                        <p class="gallery__title gallery__title--100">Модуль 10</p>
                        <h3 class="gallery__h3">Инструменты<br>Маржинальной торговли</h3>
                        <p class="gallery__descr">Принцип автономности и комбинирования инстурментов</p>
                      </li>
                      <li>
                        <p class="gallery__title gallery__title--100">Модуль 11</p>
                        <h3 class="gallery__h3">Торговая система</h3>
                        <p class="gallery__descr">Построение торговой системы на основе использования инструментов маржинальной торговли</p>
                      </li>
                    </ul> <!-- cd-item-wrapper -->
                </li>
              </ul>
              <ul class="lessons--desktop">
                <li>
                  <p class="gallery__title">Модуль 1</p>
                  <h3 class="gallery__h3">Психология торговли</h3>
                  <p class="gallery__descr">Психология работы на рынке. Особенности психологического анализа</p>
                </li>

                <li>
                  <p class="gallery__title">Модуль 2</p>
                  <h3 class="gallery__h3">Природа формирования движений и трендов </h3>
                  <p class="gallery__descr">Определение лучших условий для входа в сделку</p>
                </li>

                <li>
                  <p class="gallery__title">Модуль 3</p>
                  <h3 class="gallery__h3">Построение торгового плана</h3>
                  <p class="gallery__descr">Правила управления капиталом</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 4</p>
                  <h3 class="gallery__h3">Фундаментальный анализ</h3>
                  <p class="gallery__descr">Экономические, политические  и другие факторы </p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 5</p>
                  <h3 class="gallery__h3">Технический анализ</h3>
                  <p class="gallery__descr">Основные графические сигналы: анализ тренда, анализ фигур</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 6</p>
                  <h3 class="gallery__h3">Среднесрочная тенденция рынка</h3>
                  <p class="gallery__descr">Основные принципы  и анализ среднесрочной\долгосрочной торговли</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 7</p>
                  <h3 class="gallery__h3">Понятие опционных уровней</h3>
                  <p class="gallery__descr">Расчет и применение опционных уровлей в торговле</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 8</p>
                  <h3 class="gallery__h3">Понятие маржинальности</h3>
                  <p class="gallery__descr">Маржинальные уровни. Торговля от маржинальных уровней</p>
                </li>
                <li>
                  <p class="gallery__title">Модуль 9</p>
                  <h3 class="gallery__h3">Биржевые объемы</h3>
                  <p class="gallery__descr">Фильтрация сделок с помощью объемного анализа</p>
                </li>
                <li class="gallery__li-center">
                  <p class="gallery__title gallery__title--100">Модуль 10</p>
                  <h3 class="gallery__h3">Инструменты<br>Маржинальной торговли</h3>
                  <p class="gallery__descr">Принцип автономности и комбинирования инстурментов</p>
                </li>
                <li class="gallery__li-center gallery__li-center--last">
                  <p class="gallery__title gallery__title--100">Модуль 11</p>
                  <h3 class="gallery__h3">Торговая система</h3>
                  <p class="gallery__descr">Построение торговой системы на основе использования инструментов маржинальной торговли</p>
                </li>
              </ul >
              <hr class="learn__hr">
              <div class="learn__pro-vip-wrp">
                <div class="learn__pro">
                  <img class="learn__pro-img" src="/img/pro.svg">
                    <p class="learn__pro-text">+ 3 ИНДИВИДУАЛЬНЫХ ЗАНЯТИЙ<br>
                      + 1 МЕСЯЦ ПОДПИСКИ НА<br>УНИКАЛЬНЫЙ ПЛАТНЫЙ КАНАЛ<br>“LIGHT”</p>
                    <a class="learn__pro-btn" href="#">Хочу</a>
                </div>
                <div class="learn__pro learn__pro--vip">
                  <img class="learn__pro-img" src="/img/vip.svg">
                    <p class="learn__pro-text">+ 10 ИНДИВИДУАЛЬНЫХ ЗАНЯТИЙ<br>
                      + СОСТАВЛЕНИЕ ИНДИВИДУАЛЬНОГО<br>ИНВЕСТИЦИОННОГО ПОРТФЕЛЯ НА<br>ФОНДОВОМ РЫНКЕ<br>
                      + ГРАФИК СЕЗОННОСТИ ДВИЖЕНИЯ<br>АКТИВОВ В ТЕЧЕНИИ 3 МЕСЯЦЕВ</p>
                    <a class="learn__pro-btn learn__vip-btn" href="#">Хочу</a>
                </div>
              </div>
            </section>


            <section class="mail mail--learn">
              <div class="mail__text mail__text--learn">
                <h2 class="mail__h2 mail__h2--learn">ОСТАЛИСЬ ВОПРОСЫ?<br>ГОТОВ НАЧАТЬ<br>ОБУЧАТЬСЯ УЖЕ СЕЙЧАС? </h2>
                <p class="mail__descr">Вы можете задать любой вопрос или оставить<br>заявку на обучение и с вами в скором времени<br>свяжется специалист.</p>
              </div>
              <form class="mail__btn-wrp mail__btn-wrp--learn">
                <input class="mail__input" id="firstname" required type="text" placeholder="ВАШЕ ИМЯ">
                <input class="mail__input" id="phone" required name="phone" type="tel" placeholder="ВАШ НОМЕР">
                <input class="mail__input" id="question" required type="text" placeholder="ВАШ ВОПРОС">

                <button type="submit" value="Жду звонка" class="mail__btn">Жду звонка</button>
              </form>
            </section>
            <script src="/js/learn.js"></script>
            <?php require 'template/footer.php' ?>


