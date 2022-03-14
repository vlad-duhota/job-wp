
<?php
/*
Template Name: Home page
*/
?>

<?php
  $page_id = get_the_ID();
  $label_block = carbon_get_post_meta($page_id, 'label_block');
  $categories = carbon_get_post_meta($page_id, 'categories');
?>


<body class="page">
    <?php get_header(); ?>

  <main>
    <section class="hero">
      <div id="ambient"></div>
      <div class="container">
        <div class="flex-column wow animate__animated animate__fadeInLeft">
          <h1><?php echo carbon_get_post_meta($page_id, 'site_offer')?></h1>
          <p class="subtitle">
          <?php echo carbon_get_post_meta($page_id, 'hero_subtitle')?>
          </p>
          <form action="#" class="search-form">
            <input type="search" placeholder="<?php echo carbon_get_post_meta($page_id, 'search_text')?>" class="input"/>
            <button type="submit" class="btn">
              <img src="<?php echo carbon_get_post_meta($page_id, 'search_btn_img')?>" />
              <span><?php echo carbon_get_post_meta($page_id, 'search_btn_text')?></span>
            </button>
          </form>
          <?php if(! empty($label_block)) : ?>
          <p class="label-block">
            Например:
            <br />
            <?php foreach($label_block as $label) : ?>
            <span><?php echo $label['label'] ?></span>
            <?php endforeach ?>
          </p>
          <?php endif ?>
        </div>
        <div class="flex-column wow animate__animated animate__fadeInRight">
          <img src="<?php echo carbon_get_post_meta($page_id, 'hero_img')?>" />
        </div>
      </div>
    </section>
    <section class="category">
      <div class="container">
        <h2><?php echo carbon_get_post_meta($page_id, 'categories_title')?></h2>
          <?php $category_index = 0; ?>
          <?php foreach($categories as $category) : ?>
          <?php 
            $category_index++;
          ?>
            <input type="radio" name="tabs" id="tab<?php echo $category_index?>"/>
            <label for="tab<?php echo $category_index?>" class="wow animate__animated animate__fadeInDown">
            <img src="<?php echo $category['category_photo']?>"/>
            <?php echo $category['category_name']?>
            </label>
            <?php endforeach ?>
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
      <h2 class="wow animate__animated animate__fadeInDown"><?php echo carbon_get_post_meta($page_id, 'mail_title')?></h2>
      <p class="subtitle wow animate__animated animate__fadeInUp"><?php echo carbon_get_post_meta($page_id, 'mail_subtitle')?></p>
      <form action="#" class="mailing-form wow animate__animated animate__fadeInUp">
        <input type="email" placeholder="<?php echo carbon_get_post_meta($page_id, 'mail_form_text')?>" class="input" />
        <button type="submit" class="btn">
          <img src="<?php echo carbon_get_post_meta($page_id, 'mail_form_btn_img')?>" alt="mailing box icon"/>
          <span><?php echo carbon_get_post_meta($page_id, 'mail_form_btn_text')?></span>
        </button>
      </form>
    </section>
  </main>
  
  <?php get_footer(); ?>