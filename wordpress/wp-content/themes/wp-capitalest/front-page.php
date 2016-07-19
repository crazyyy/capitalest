<!doctype html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <!-- css + javascript -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" media="all">
  <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.js"></script>
    <script type="text/javascript" src="js/selectivizr.js"></script>
    <script type="text/javascript" src="js/respond.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><!-- wrapper -->
  <div class="wrapper">

    <header role="banner" data-slide="1" class="current-slide">
      <div class="container">


        <div class="row head-logo-tel">

          <div class="col-md-4 col-sm-6">
            <a class="logo" href="#" title="">
              <?php $image = get_field('site_logo'); if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            </a>
          </div>

          <div class="col-md-4 col-md-offset-4 tel-content col-sm-6">

                <div class="row">
                  <a class="tel" href="tel:+7000000"><?php the_field('phone'); ?></a>
                </div>
                <div class="row">
                  <a class="mail" href="mailto:capitalest@info.ru"><?php the_field('email'); ?></a>
                  <button class="btn-green btn-recall">ЗАКАЗАТЬ ЗВОНОК</button>
                </div>

          </div>

        </div><!-- row -->

        <div class="row">
          <div class="col-md-12">
            <div class="title-container">
              <h3><?php the_field('first_block_title'); ?></h3>
              <h4><?php the_field('second_slogan_block_1'); ?></h4>
            </div><!-- title-container -->
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="col-md-12">
            <ul class="headnav">
              <?php if( have_rows('another_blocks') ): while ( have_rows('another_blocks') ) : the_row(); ?>
              <li>
                <a href="#">
                  <img src="<?php the_sub_field('block_image'); ?>" />
                  <span><?php the_sub_field('block_name'); ?></span>
                </a>
              </li>
             <?php endwhile; endif; ?>
            </ul>
          </div>
        </div><!-- row -->
      </div><!-- /.container -->
    </header><!-- /header -->


    <section role="main">

      <!-- ABOUT -->
      <div class="block-about" data-slide="2">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <?php the_field('first_text'); ?>
            </div>
            <div class="col-md-6">
              <?php the_field('second_text'); ?>
            </div>
          </div><!-- /.row -->

          <div class="row">

            <div class="col-md-6">
              <?php the_field('third_text_second_block'); ?>
            </div>
            <div class="col-md-6">
              <?php the_field('fourth_text_second_block'); ?>
            </div>
          </div><!-- row -->
        </div><!-- /.container -->
      </div><!-- /.block-about -->

      <!-- PAGE 1 -->
      <div class="block-page-1" data-slide="3">
        <div class="container">

          <div class="row title-page-1">
            <div class="col-md-7 title-no-pading">
              <?php the_field('3rd_block_title'); ?>
            </div>
            <div class="col-md-5 title-no-pading">
              <h6 class="blueText"><?php the_field('blue_title'); ?></h6>
            </div>
          </div><!-- /.row title-page-1 -->

          <div class="row">
            <div class="col-md-12 page1-icon1">

              <div class="row">
                <div class="col-md-12">
                  <h6 class="blueText subtitle">
                    <?php the_field('first__expertise'); ?>
                  </h6>
                </div>
                <div class="col-md-6">
                  <ul class="list-dekor">
                      <?php if( have_rows('expertision_work') ): while ( have_rows('expertision_work') ) : the_row(); ?>
                    <li><?php the_sub_field('expertision_step'); ?></li>
                      <?php endwhile; endif; ?>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-dekor">
                      <?php if( have_rows('expertision_second_block') ): while ( have_rows('expertision_second_block') ) : the_row(); ?>
                    <li><?php the_sub_field('second_expertision_step'); ?></li>
                      <?php endwhile; endif; ?>
                  </ul>
                </div>
              </div><!-- /.row -->


            </div><!-- /.col-md-12 -->

            <div class="col-md-12 page1-icon2">
              <div class="row">
                <div class="col-md-12">

                  <h6 class="blueText subtitle">
                        <?php the_field('history_research'); ?>
                      </h6>
                </div>
                <div class="col-md-12">
                  <ul class="list-dekor">
                    <?php if( have_rows('research_steps') ): while ( have_rows('research_steps') ) : the_row(); ?>
                    <li><?php the_sub_field('step'); ?></li>
                    <?php endwhile; endif; ?>
                  </ul>
                </div>

                <div class="col-md-12">
                  <button class="btn btn-green">ЗАКАЗАТЬ УСЛУГУ</button>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
            <div class="col-md-12">
              <p class="end-page-text">
                <?php the_field('3rd_block_warning'); ?>
              </p>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.block-page-1 -->

      <div class="block-page-2" data-slide="4">
        <div class="container">
          <div class="row title-page-2">
            <div class="col-md-3 title-no-pading">
              <?php the_field('first_slogan_4th_block'); ?>
            </div>
            <div class="col-md-5 title-no-pading">
              <h5><?php the_field('second_slogan'); ?></h5>
            </div>
            <div class="col-md-4 title-no-pading">
              <h6 class="blueText">
                <?php the_field('third_slogan'); ?>
              </h6>
            </div>
          </div><!-- /.row title-page-2 -->


          <div class="row page2-icon">
            <div class="co-md-10 col-md-offset-2 ">
              <ul class="list-dekor p2-list">
                <?php if( have_rows('block_steps') ): while ( have_rows('block_steps') ) : the_row(); ?>
                <li><?php the_sub_field('guardian_step'); ?></li>
                <?php endwhile; endif; ?>
              </ul>
              <button class="btn btn-green">ЗАКАЗАТЬ УСЛУГУ</button>
            </div>
            <div class="col-md-12">
              <p class="end-page-text"><?php the_field('warning'); ?></p>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.block-page-2 -->

      <div class="block-page-3" data-slide="5">
        <div class="container">
          <div class="row title-page-3">
            <div class="col-md-7 title-no-pading">
              <h3>
                СОГЛАСОВАНИЕ ПРОЕКТНОЙ
              </h3>
              <h4>
                ДОКУМЕНТАЦИИ И ГРАНИЦ ТЕРРИТОРИЙ
              </h4>
            </div>
            <div class="col-md-5 title-no-pading">
              <h6 class="blueText">
                МЫ ГАРАНТИРУЕМ ДОСТИЖЕНИЕ ПОЛОЖИТЕЛЬНОГО РЕЗУЛЬТАТА В МИНИМАЛЬНЫЙ СРОК
              </h6>
            </div>
          </div><!-- /.row tittl-page-3 -->

          <div class="row">
            <div class="col-md-12 page3-icon1">

              <div class="row">
                <div class="col-md-12">
                  <h6 class="blueText subtitle">
                    Разработка и согласование проектной документации:
                  </h6>
                </div>
                <div class="col-md-6">
                  <ul class="list-dekor">
                    <li>Разработка проектов реставрации и приспособления для современного использования;</li>
                    <li>Сопровождение прохождения обязательной государственной историко-культурной экспертизы;</li>

                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-dekor">
                    <li>Согласование с соответствующим государственным органом охраны объектов культурного наследия.</li>
                  </ul>
                </div>
              </div><!-- /.row -->
            </div><!-- /.col-md-12 -->
            <div class="col-md-12 page3-icon2">
              <div class="row">
                <div class="col-md-12">

                  <h6 class="blueText  subtitle">
                        Разработка проектов границ территорий и зон охраны:
                      </h6>
                </div>
                <div class="col-md-6">
                  <ul class="list-dekor">
                    <li>Корректировка границ территорий, зон охраны объектов культурного наследия,</li>
                    <li>Внесение изменений в режимы использования земельных участков и градостроительных регламентов в отношении объектов культурного наследия.</li>

                  </ul>
                </div>

                <div class="col-md-12">
                  <button class="btn btn-green">
                    ЗАКАЗАТЬ УСЛУГУ
                  </button>
                </div>
              </div><!-- /.row -->
            </div><!-- /.col-md-12 -->

            <div class="col-md-12">
              <p class="end-page-text">
                Специалисты Компании обладают необходимыми знаниями и опытом работы в области архитектуры, реставрации и проектирования, а также  имеют все необходимые допуски, сертификаты и аккредитации.
              </p>
            </div>


          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.block-page-3 -->

      <!-- HOW-WORK -->
      <div class="block-how-work" data-slide="6">
        <div class="container">

          <div class="row row-how-work">
            <div class="col-md-12 col-xs-12 slogan-work">
              <h3>КАК МЫ РАБОТАЕМ?</h3>
              <h4>Мы выстраиваем оптимальные правовые алгоритмы решения поставленной задачи, а именно:</h4>
            </div>

            <div class="col-md-12">
              <ul class="work-list">
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/libro.png" alt="">
                  <span>
                    Проведение комплексного юридическое исследования
                  </span>
                </li>
                <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/deal.png" alt="">
                  <span>
                    Заключение договора, который гарантирует достижение результата в оговоренный срок
                  </span>
                </li>
                 <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/search.png" alt="">
                  <span>
                    Организация сбора всех необходимых исходных данных, проведение экспертиз и заключений
                  </span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/man.png" alt="">
                  <span>
                   Представление ваших интересов на всех уровнях согласования
                  </span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/pad.png" alt="">
                  <span>
                   Внесение изменений в распорядительные акты, регулирующие предметы охраны объектов культурного наследия
                  </span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="">
                  <span>
                    Принятие решения органом исполнительной власти о согласовании результатов проведённых работ
                  </span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/persent.png" alt="">
                  <span>
                    Мы гарантируем выполнение всех взятых на себя обязательств. При отсутствии ожидаемого результата возвращаем 100% стоимости наших услуг
                  </span>
                </li>
              </ul>
            </div>
          </div><!-- /.row -->


                         <!-- RESULTS -->


          <div class="row row-results">
            <div class="col-md-12 col-xs-12 results">
              <h3>РЕЗУЛЬТАТЫ</h3>
              <p class="our-experience">Наш опыт подсказывает, что удовлетворённость клиентов является лучшим критерием успешности нашей Компании.</p>
              <p>Мы гордимся результатами, которых достигли на сегодняшний день:</p>

              <div class="green-block">
                <h5>Определены</h5>
                <p class="number">42</p>
                <p>предмета охраны обьектов культурного значения</p>
              </div>
              <div class="blue-block">
                <h5>Разработано</h5>
                <p class="number">22</p>
                <p>проекта границ территорий, зон охраны объектов культурного наследия, режимов использования земельных участков и градостроительных регламентов</p>
              </div>
              <div class="block-21">
                <h5>Проведено</h5>
                <p class="number">21</p>
                <p>историко-культурных исследований</p>
              </div>
              <div class="block-67">
                <h5>Проведено</h5>
                <p class="number">67</p>
                <p>государственно историко-культурных экспертиз</p>
              </div>
              <div class="block-30">
                <p><span>Разработана и согласована проектная документация по реставрации и приспособлению</span></p>
                <p class="number">30</p>
                <p class="bold">объектов
                </p>
                <p>культурного наследия для современного использования</p>
              </div>
              <div class="block-percent">
                <img src="<?php echo get_template_directory_uri(); ?>/img/parcent.png" alt="">
                <p>ни один результат нашей работы не был оспорен в порядке надзора</p>
              </div>
            </div><!-- results -->
          </div><!-- .row .row-results-->
        </div><!-- /.container -->
      </div><!-- /.block-how-work -->

      <div class="footer-first-block" data-slide="7">
        <div class="container">
          <div class="row title-first-footer-block">
            <div class="col-md-7 title-no-pading">

              <h4>
                НАШИ КЛИЕНТЫ
              </h4>
            </div>
            <div class="col-md-5 title-no-pading">
                <h5 class="blueText">МЫ ГОРДИМСЯ НАШИМ</h5>
                <h6 class="blueText">СОТРУДНИЧЕСТВОМ С ВАМИ!</h6>
            </div>
          </div><!-- title-first-footer-block -->

          <div class="row">
            <div class="col-md-12 col-xs-12 text-slogan">

              <p class="underslogan-text">«Мы знаем, что удовлетворенность наших клиентов всегда приводит к общему успеху, именно по этому мы сегодня реализуем проекты, которые невыполнимы для большинства наших коллег и готовы сделать еще больше, чтобы завтра открыть перед вами новые возможности».</p>

              <div class="row row-our-clients">
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-1.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-2.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-3.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-4.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-5.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-3.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-1.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-2.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-3.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-4.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-5.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-3.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-1.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-2.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-3.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-4.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-5.png" alt=""></div>
                <div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/img/client-3.png" alt=""></div>
              </div><!-- row-our-clients -->
            </div><!-- text-slogan -->
          </div>
        </div><!-- container -->
      </div><!-- /.footer-first-block -->

      <div class="footer-container-second">
        <div class="container">
          <div class="row">
              <div class="col-md-12 colnsot">
                <h3>БЕСПЛАТАЯ КОНСУЛЬТАЦИЯ</h3>
                <p>* Получите бесплатную консультацию прямо сейчас</p>
                <form class="mail-form" action="input" method="post">
                  <input class="small-input" type="text" placeholder="Ваше имя">
                  <input class="small-input" type="text" placeholder="Телефон">
                  <input type="text" placeholder="E-mail" size="40">
                  <input class="big-input" type="text" placeholder="Сообщение" size="40" align="top">
                  <button class="send-massage">ОТПРАВИТЬ</button>
                </form>
              </div>
          </div>
        </div><!-- /.container -->
      </div><!-- /.footer-container-second -->

      <div class="footer-container-third">
        <div class="map-container">
          <div class="contacts">
            <h5>Контакты</h5>
            <a class="phone" href="tel:+70000000000">+7 000 000 00 00</a>
            <a class="phone" href="tel:+70000000000">+7 000 000 00 00</a>
            <p class="web-search"><span>г. Москва, ул. Нзвание улицы,<br> д.000, корп.00</span></p>
            <button class="feedback">ОБРАТНАЯ СВЯЗЬ</button>
          </div><!-- contacts -->
          <div id='gmap_canvas'></div>
        </div><!-- map-container -->
      </div><!-- /.footer-container-third -->

  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="col-md-12 col-xs-12 last-block">
    <div class="row">
      <div class="col-md-4 col-xs-4 footer footer-image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/capitalest.png" alt="">
      </div>
      <div class="col-md-8 col-xs-8 footer footer-text">
        <h3>Защита данных и конфиденциальность</h3>
        <p>Мы не используем в личных целях и не передаём ваши данные третьим лицам. Вы дополнительно имеете право отозвать своё согласие на использование Ваших персональных данных в любое время по электронной почте либо в личном письменном обращении.
        Информация, указанная на сайте не является публичной офертой</p>
        <p><span>Все права защищены © 2016 | Компания "КапиталИст" "</span></p>
      </div>
    </div>
  </div>
</footer><!-- /footer -->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/vendor.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(55.755826,37.6173),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(55.755826,37.6173)});infowindow = new google.maps.InfoWindow({content:'<strong>google-map</strong><br>Moscow, Russia<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
<script type="text/javascript">

</script>
</body>
</html>


