

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/screen.css" rel="stylesheet">
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="forms.js"></script> <!-- Конфликтовал с js.js (Надо ставить выше)-->
    <script src="js/js.js"></script>
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        (function(){
            if (typeof carrotquest === 'undefined') {
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
                s.src = '//cdn.carrotquest.io/api.min.js';
                var x = document.getElementsByTagName('head')[0]; x.appendChild(s);

                carrotquest = {}; window.carrotquestasync = []; carrotquest.settings = {};
                m = ['connect', 'identify', 'track', 'auth'];
                function Build(name, args){return function(){window.carrotquestasync.push(name, arguments);} }
                for (var i = 0; i < m.length; i++) carrotquest[m[i]] = Build(m[i]);
            }
        })();
        carrotquest.connect('1758-2e30ce1ab118168801855c0305e');
    </script>

</head>
<body>
<div id="wrapper">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="logo col-lg-2 col-md-3 col-sm-3 col-xs-3 hidden-xs">
                    <a href="https://astralm.ru/"> <img src="images/logo.png" alt="logo"></a>
                </div>




                <div id="h-search" class="col-lg-7 col-md-5 col-sm-5 col-xs-5 hidden-xs" >
                    <form action="/search/index.php" id="h-search-form" name="search">
                        <input type="text" id="q" name="q"  value="" placeholder="Поиск по сайту">
                        <input type="submit" id="s" name="s"  value="">
                    </form>
                </div>

                <div class="h-contakt col-lg-3 col-md-4 col-sm-4 col-xs-4 hidden-xs">
                    <div class="h-phone">
                        <p>Телефон в Москве</p>
                        <p>+7 (499) 649-30-42</p>
                    </div>
                    <div class="h-phone">
                        <p>Техподдержка</p>
                        <p>8 (800) 700 86 68</p>
                    </div>
                    <div class="h-phone">
                        <a href="#" class="top-btn" id="top-btn">Заказать звонок</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="row">
        <div class="navbar navbar-inverse" id="menu">
            <div class="container">
                <div class="navbar-header">
                    <a href="https://astralm.ru/" class="navbar-brand hidden-lg hidden-md hidden-sm visible-xs"><img src="images/logo-long.png" height="30" width="100" style="margin-top:-7px;"></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Открыть навигацию</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="/products/">Продукты </a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/esignature/">Электронная подпись</a></li>
                                <li><a href="/products/report/">Астрал Отчет</a></li>
                                <li><a href="/products/1c-accounting/">1С-Отчетность</a></li>
                                <li><a href="/products/security/">Защита информации</a></li>
                                <li><a href="/products/alco/">Росалкоголь регулирование</a></li>
                                <li><a href="/products/otsenka-usloviy-truda_old/">СОУТ</a></li>
                                <li><a href="/products/skrin-astral/">СКРИН.Астрал</a></li>
                                <li><a href="/products/servis-1s-etp/">Сервис 1С-ЭТП</a></li>
                                <li><a href="/bg/">Банковская гарантия</a></li>
                                <li><a href="/sverka_nds/">Сверка НДС</a></li>
                                <li><a href="/1c-navigator/">1С:Бизнес-Навигатор</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/about/partnership/">Партнерам</a>
                        </li>
                        <li class="dropdown">
                            <a href="/news/">Новости</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/news/">Все новости</a></li>
                                <li><a href="/news/electronic-reports/">Электронная отчетность</a></li>
                                <li><a href="/news/certification_center/">Электронная подпись</a></li>
                                <li><a href="/news/astral-report/">1С-Отчетность</a></li>
                                <li><a href="/news/1c-report/">Астрал Отчет</a></li>
                                <li><a href="/news/buh-report/">Бухгалтерская отчетность</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/blog/">Блоги</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/blog/accountant_report/">Бухгалтерская отчетность</a></li>
                                <li><a href="/blog/electronic_reports/">Электронная отчетность</a></li>
                                <li><a href="/blog/astral_report/">Астрал Отчет</a></li>
                                <li><a href="/blog/1c-reports/">1С-Отчетность</a></li>
                                <li><a href="/blog/certification_center/">Электронная подпись</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/about/">О компании</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/about/">О компании</a></li>
                                <li><a href="/about/clients/">Бизнес-партнеры</a></li>
                                <li><a href="/about/reviews/">Отзывы клиентов</a></li>
                                <li><a href="/about/vacancy/">Вакансии</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/contacts/">Контакты</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!--    END MENU    -->


  

    <div class="container">
        <aside class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div id="left-menu-ecp">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>1 test</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">2 test</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">3 test</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">4 test</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">4 test</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">5 test</a><br>
                </div>
                <div class="clear"></div>
            </div>
        </aside>











        <div class="open_menu hidden-lg hidden-md">
        </div>
        <aside id="aside-ecp" class="col-lg-3 col-md-3">
            <a class="ac_popap_close close_menu" href="#"></a>
            <div id="left-menu-ecp" class=" modal_menu">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>ЭЦП</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>ЭЦП для ЕГАИС</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>ВОПРОСЫ И ОТВЕТЫ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>ПРИМЕНЕНИЕ</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">Отчетность</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">Документооборот</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">Торги</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">Закупки</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">Личная подпись</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/ceny/"><span>ЦЕНЫ</span></a><br>
                    <a href="/esignature/ceny/tarify/">Тарифы</a><br>
                    <a href="/esignature/ceny/dopolnitelno/">Дополнительно</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/poryadok-polucheniya/"><span>ПОРЯДОК ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/mesta-polucheniya/"><span>МЕСТА ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/soprovozhdenie-torgov/"><span>СОПРОВОЖДЕНИЕ ТОРГОВ</span></a>
                    <a href=""></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/spisok-ploshchadok/"><span>СПИСОК ПЛОЩАДОК</span></a>
                </div>
                <div class="clear"></div>

            </div>
        </aside>









  <!-- #WORK AREA# -->
        <section id="right-content-ecp" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 clearfix">
            <!-- Navigation in section -->
            <nav>
                <ul class="clearfix">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Электронная отчетность</a></li>
                    <li><a href="#">Общая информация</a></li>
                    <li><a href="#">Законодательство</a></li>
                    <li><a href="#" class="current">ФЗ № 229</a></li>
                </ul>
            </nav><!-- //Navigation in section -->
            <div class="about-law">
                <h2 class="title">Федеральный закон № 229</h2>
                <span>О законе ФЗ № 229</span>
                <div class="law-info clearfix">
                    <div class="thumbnail">
                        <a href="#"><img src="images/podstranizi/EO_TZ-3_podstranizi_15.png" width="83" height="84" alt="ФЗ 229" title="ФЗ 229"></a>
                    </div>
                    <div class="text">
                        <p>Федеральный закон № 229ФЗ от 27.07.2010 «О внесении изменений в часть первую и часть вторую Налогового кодекса Российской Федерации и некоторые другие законодательные акты Российской Федерации, а также о признании утратившими силу отдельных законодательных актов (положений законодательных актов) Российской Федерации в связи с урегулированием задолженности по уплате налогов, сборов, пеней и штрафов и некоторых иных вопросов налогового администрирования» вносит поправки в законодательство, устанавливающие порядок учета налогоплательщиков, предоставления отсрочек по налоговым платежам, а также увеличивающие размер налоговых санкций за нарушения в сфере налогового законодательства.</p>
                        <p>Еще одним изменением, внесенным законом № 229ФЗ, стало появление возможности передачи организациями сведений о счетах в банках, филиалах и т.д. в электронном виде с помощью телекоммуникационных каналов связи.</p>
                        <p>Наибольшее количество поправок, которые внес  закон № 229ФЗ, коснулось налогового законодательства, в том числе ряда процессуальных и правоустанавливающих норм, регулирующих деятельность как организаций, так и индивидуальных предпринимателей.</p>
                    </div>
                </div>
            </div>
            <div class="article-law">
                <h3 class="title">Федеральный закон № 229</h3>
                <span>Статья 1</span>
                <div class="article-info">
                    <p class="articles">Внести в часть первую Налогового кодекса Российской Федерации (Собрание законодательства Российской Федерации, 1998, N 31, ст. 3824; 1999, N 28, ст. 3487; 2001, N 53, ст. 5016; 2002, N 1, ст. 2; 2003, N 22, ст. 2066; N 23, ст. 2174; N 27, ст. 2700; N 52, ст. 5037; 2004, N 27, ст. 2711; N 31, ст. 3231; N 45, ст. 4377; 2005, N 45, ст. 4585; 2006, N 6, ст. 636; N 31, ст. 3436; 2007, N 1, ст. 28, 31; N 22, ст. 2563, 2564; 2008, N 26, ст. 3022; N 30, ст. 3616; N 48, ст. 5500, 5519; 2009, N 29, ст. 3632; N 30, ст. 3739; N 48, ст. 5711, 5733; N 51, ст. 6155; N 52, ст. 6450; 2010, N 1, ст. 4) следующие изменения:</p>
                    <p>4) в статье 23:<br>
                        г) пункт 7 изложить в следующей редакции:<br>
                        «7. Сообщения, предусмотренные пунктами 2 и 3 настоящей статьи, могут быть представлены в налоговый орган лично или через представителя, направлены по почте заказным письмом или переданы в электронном виде по телекоммуникационным каналам связи.</p>
                    <p>Если указанные сообщения переданы в электронном виде, такие сообщения должны быть заверены электронной цифровой подписью лица, представившего их, или электронной цифровой подписью его представителя.
                    Формы и форматы сообщений, представляемых на бумажном носителе или в электронном виде, а также порядок заполнения форм указанных сообщений утверждаются федеральным органом исполнительной власти, уполномоченным по контролю и надзору в области налогов и сборов.</p>
                    <p>Порядок представления сообщений, предусмотренных пунктами 2 и 3 настоящей статьи, в электронном виде по телекоммуникационным каналам связи утверждается федеральным органом исполнительной власти, уполномоченным по контролю и надзору в области налогов и сборов».</p>
                </div>
                <div class="article-info box clearfix">
                    <div class="thumbnail">
                        <a href="#"><img src="images/podstranizi/EO_TZ-3_podstranizi_12.png" width="64" height="60" alt="ФЗ 229 нормы" title="ФЗ 229 нормы"></a>
                    </div>
                    <div class="text">
                        <p>Федеральный закон № 229ФЗ изменяет нормы, установленные Налоговым кодексом и некоторыми другими нормативными актами, регулирующими деятельность предприятий и организаций.</p>
                        <p>В частности, он дополняет перечень прав и обязанностей налогоплательщиков и налоговых инспекторов, определяет размер налоговых санкций, изменяет сроки взыскания недоимок и т.д.</p>
                    </div>
                </div>
                <div class="article-info box clearfix">
                    <div class="thumbnail">
                        <a href="#"><img src="images/podstranizi/EO_TZ-3_podstranizi_14.png" width="64" height="60" alt="ФЗ 229 положения" title="ФЗ 229 положения"></a>
                    </div>
                    <div class="text">
                        <p>Положения закона № 229ФЗ затрагивают деятельность индивидуальных предпринимателей, юридических лиц и налоговых служб, именно поэтому сотрудникам перечисленных организаций особенно важно ознакомиться с его содержанием во избежание нарушения действующего законодательства.</p>
                    </div>
                </div>
            </div>
                <a href="#callback" class="btn fancybox">Заказать ЭО</a>
            <!-- Blok wrapper for form -->
            <div class="hid">
                <!-- Form -->
                <form  id="callback" class="popup-form">
                    <h4 class="title">Для заказа оставьте контактные данные</h4>
                    <input type="text" name="name" placeholder="Ваше Имя*" required />
                    <input type="tel" name="phone" placeholder="Ваш Телефон*" required />
                    <input type="email" name="email" placeholder="Ваш Email*" required />
                    <button class="btn" type="submit">Отправить</button>
                </form><!-- Form -->
                <div class="answer"><p>Спасибо за заявку</p></div>
            </div><!-- //Blok wrapper for form -->

        </section>
    
<!-- # END WORK AREA# -->
















    </div>
    <!--    FOOTER    -->
    <footer id="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Основные разделы</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/products/" class="nav_link"Продукты</a></li>
                                <li><a href="/about/partnership/" class="nav_link">Партнерам</a></li>
                                <li><a href="/news/" class="nav_link">Новости</a></li>
                                <li><a href="/blog/" class="nav_link">Блоги</a></li>
                                <li><a href="/about/" class="nav_link">О компании</a></li>
                                <li><a href="/contacts/" class="nav_link">Контакты</a></li>
                                <li><a href="/privacy_security/" class="nav_link">Конфидициальность</a></li>
                                <li><a href="/feedback/" class="nav_link">Обратная связь</a></li>
                                <li><a href="/about/vacancy/" class="nav_link">Вакансии</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Продукты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/esignature/" class="nav_link">Электронная подпись</a></li>
                                <li><a href="/products/report/" class="nav_link">Астрал Отчет</a></li>
                                <li><a href="/products/1c-accounting/" class="nav_link">1С-Отчетность</a></li>
                                <li><a href="/products/security/" class="nav_link">Защита информации</a></li>
                                <li><a href="/products/alco/" class="nav_link">РАР</a></li>
                                <li><a href="/products/otsenka-usloviy-truda_old/" class="nav_link">СОУТ</a></li>
                                <li><a href="/products/skrin-astral/" class="nav_link">СКРИН.Астрал</a></li>
                                <li><a href="/products/servis-1s-etp/" class="nav_link">Сервис 1С-ЭТП</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Техническая поддержка</h4>
                        <nav class="footer_nav tp">
                            <ul>
                                <li>
                                    <div><span>«Астрал Отчет»</span><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет">+7 (495) 663-73-58, доб. 10</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет"><a href="mailto:#">support@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«1С Отчетность»</span><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность">+7 (495) 663-73-58, доб. 20</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность"><a href="mailto:#">1c@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«Электронные торги»</span><br/></div>
                                    <div><abbr title="Электронные торги">+7 (495) 663-73-58, доб. 11</abbr><br/></div>
                                </li>
                                <li>
                                    <div><span>Техподдержка</span><br/></div>
                                    <div><abbr title="Техподдержка">8 (800) 700-86-68</abbr><br/></div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Контакты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li>
                                    <address id="add-phone">
                                        <b>Остались вопросы?</b><br>
                                        <abbr title="Телефон в Москве"><b>+7 (499) 649-30-42</b></abbr>
                                    </address>
                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">ООО «Астрал-М»</strong><br>
                                        111123, г. Москва, Шоссе Энтузиастов д. 56, стр. 32<br>
                                        офис 211 <br>
                                        <a href="mailto:#">moscow@astralnalog.ru</a>
                                    </address>

                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">Рабочие дни:</strong><br>
                                        Понедельник-Пятница<br>
                                        с 9:00 до 18:00<br>
                                    </address>
                                </li>
                                <li><a href="/contacts/">Все контакты</a></li>
                                <li><a href="/search/map.php">Карта сайта</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
        <!-- ARROW FIXED -->
        <div class="arrow_up_fix_none" id="arrow_up"></div>
        <!-- ARROW FIXED -->
        <div class="social">
            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Рабочие дни:</h5>
                <div class="f-social centered">
                    <p class="footer_span">Понедельник-Пятница<br></p>
                    <p class="footer_span">с 9:00 до 18:00</p>
                </div>
            </div>

            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Телефон</h5>
                <div class="f-social">
                    <abbr title="Phone"><b>+7 (499) 649-30-42</b></abbr>
                </div>
            </div>
            <br/>
            <h5 class="footer_link">Мы в социальных сетях</h5>
            <div class="f-social">
                <a href="http://vk.com/astralm" class="social_link social_link_vk" target="_blank">&nbsp;</a>
                <a href="http://facebook.com/astralmoscow" class="social_link social_link_fb" target="_blank">&nbsp;</a>
                <a href="http://twitter.com/MoscowAstral" class="social_link social_link_google" target="_blank">&nbsp;</a>
                <a href="http://www.youtube.com/channel/UCCzvlCiq1AlX_HiH31LXPvg/" class="social_link social_link_youtube" target="_blank">&nbsp;</a>
            </div>
        </div>
        <!-- <a href="#x" class="overlay" id="win1" style="opacity: 1;z-index: 1 !important;cursor: pointer;"></a> -->
    </footer>

</div>




















    
    <script src="libs/fancybox/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery-css-transform.min.js"></script>
    <script src="js/jquery-animate-css-rotate-scale.min.js"></script>
    <script src="js/jquery.quicksand.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>