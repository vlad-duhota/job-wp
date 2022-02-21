
<?php
/*
Template Name: Home page
*/
?>


<body class="page">
    <?php get_header(); ?>

  <main>
    <section class="hero">
      <div id="ambient"></div>
      <div class="container">
        <div class="flex-column wow animate__animated animate__fadeInLeft">
          <h1>Найдите удаленную работу вашей мечты</h1>
          <p class="subtitle">
            Создайте резюме или отправьте отклик на вакансию в компании с
            мировым именем и работайте по свободному графику
          </p>
          <form action="#" class="search-form">
            <input type="search" name="" id="" placeholder="Начните поиск" class="input"/>
            <button type="submit" class="btn">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/search.svg" alt="" />
              <span>Искать вакансии</span>
            </button>
          </form>
          <p class="label-block">
            Например:
            <br />
            <span> Front-end</span>
            <span> Back-end</span>
            <span> Designer</span>
          </p>
        </div>
        <div class="flex-column wow animate__animated animate__fadeInRight">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/hero-image.svg" alt="" />
        </div>
      </div>
    </section>
    <section class="category">
      <div class="container">
        <h2>Категории</h2>
        <input type="radio" checked name="tabs" id="tab1"/>
          <label for="tab1" class="wow animate__animated animate__fadeInLeft">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/brush.svg" alt=""/>
          Дизайн
        </label>
        <input type="radio" name="tabs" id="tab2"/>
        <label for="tab2" class="wow animate__animated animate__fadeInLeft">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/brush.svg" alt=""/>
          Разработка
        </label>
        <input type="radio" name="tabs" id="tab3"/>
        <label for="tab3" class="wow animate__animated animate__fadeInLeft">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/brush.svg" alt=""/>
          Копирайтинг
        </label>
        <input type="radio" name="tabs" id="tab4"/>
        <label for="tab4" class="wow animate__animated animate__fadeInRight">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/brush.svg" alt=""/>
          Безопасность
        </label>
        <input type="radio" name="tabs" id="tab5"/>
        <label for="tab5" class="wow animate__animated animate__fadeInRight">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/brush.svg" alt=""/>
          Видео
        </label>
        <input type="radio" name="tabs" id="tab6"/>
        <label for="tab6" class="wow animate__animated animate__fadeInRight">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/brush.svg" alt=""/>
          Образование
        </label>

        <div class="tab tab1 animate__animated animate__fadeInLeft">
          <h2>Свежие вакансии Дизайн</h2>
          <div class="tab-content ">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
        </div>
        <div class="tab tab2 animate__animated animate__fadeInLeft">
          <h2>Свежие вакансии Разработка</h2>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
        </div>
        <div class="tab tab3 animate__animated animate__fadeInLeft">
          <h2>Свежие вакансии Копирайтинг</h2>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
        </div>
        <div class="tab tab4 animate__animated animate__fadeInLeft">
          <h2>Свежие вакансии Безопасность</h2>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
        </div>
        <div class="tab tab5 animate__animated animate__fadeInLeft">
          <h2>Свежие вакансии Видео</h2>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
        </div>
        <div class="tab tab6 animate__animated animate__fadeInLeft">
          <h2>Свежие вакансии Образование</h2>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
          <div class="tab-content">
            <div class="tab-content-wrap">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-company.jpg" alt="company logo" />
              <div>
                <h3>Front-end разработчик</h3>
                <p>Технопарк, Казань</p>
              </div>
              <p class="price">65 000 &#8381;</p>
              <p class="label-block"> Требования: <br>
                <span>React</span>
                <span>Sass</span>
                <span>Figma</span>
              </p>
            </div>
            <a href="#">Подробнее &rarr;</a>
          </div>
        </div>
      </div>
    </section>
    <section class="mailing">
      <h2 class="wow animate__animated animate__fadeInDown">Подпишитесь на рассылку с новыми вакансиями</h2>
      <p class="subtitle wow animate__animated animate__fadeInUp">Мы отправляем по одному письму в неделю с подходящими вам вакансиями</p>
      <form action="#" class="mailing-form wow animate__animated animate__fadeInUp">
        <input type="email" name="" id="" placeholder="Начните поиск" class="input" />
        <button type="submit" class="btn">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/mail.svg" alt="mailing box icon"/>
          <span>Подписаться</span>
        </button>
      </form>
    </section>
  </main>
  
  <?php get_footer(); ?>