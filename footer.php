<footer class="footer">
    <div class="container">
      <div class="copyright-block wow animate__animated animate__fadeInLeft">
        <a href="#" class="logo">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="logo icon" />
          FindYour<span>Job</span>
        </a>
        <p>
          Сайт с вакансиями для тех, кто ищет удаленную работу
          <span>&copy; 2021</span>
        </p>
      </div>

      <div class="footer-block wow animate__animated animate__fadeInLeft">
        <h3>Свяжитесь с нами</h3>
        <ul>
          <li>
            <a href="tel:88002020300">8 800 20 20 300</a>
          </li>
          <li>
            <a href="mailto:info@findyourjob.net">info@findyourjob.net</a>
          </li>
        </ul>
      </div>

      <div class="footer-block wow animate__animated animate__fadeInRight">
        <h3>Информация</h3>
        <ul>
          <li>
            <a href="#">Обработка данных</a>
          </li>
          <li>
            <a href="#">Конфиденциальность</a>
          </li>
          <li>
            <a href="#">Публичная оферта</a>
          </li>
        </ul>
      </div>

      <div class="footer-block wow animate__animated animate__fadeInRight">
        <h3>Навигация по сайту</h3>
        <ul>
          <li>
            <a href="#">Вакансии</a>
          </li>
          <li>
            <a href="#">Компании</a>
          </li>
          <li>
            <a href="#">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <div class="login-modal">
      <form action="#">
        <a class="close-btn">+</a>
        <h2>Login</h2>
        <input type="text" class="name-input" placeholder="Имя:">
        <input type="password" class="password-input" placeholder="Пароль:">
        <input type="submit" value="Войти">
      </form>
  </div>

  <div class="register-modal">
    <form action="#">
      <a class="close-btn">+</a>
      <h2>Register</h2>
      <input type="text" class="name-input" placeholder="Имя:">
      <input type="password" class="password-input" placeholder="Пароль:">
      <input type="password" class="password-input" placeholder="Потвердите пароль:">
      <input type="submit" value="Зарегистрироваться">
    </form>
  </div>

  <?php wp_footer() ?>
  <!-- scripts -->
  <!-- <script src="" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <!-- <script src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script> -->
  <!-- <script src="<?php echo get_template_directory_uri();?>/assets/js/bvambient.js"></script> -->
  
    <script>

      new WOW().init();
    </script>
    <script>
    $('.login').click(function(){
        $('.login-modal').addClass('open');
        $('.page').addClass('no-scroll');
    });

    $('.register').click(function(){
        $('.register-modal').addClass('open');
        $('.page').addClass('no-scroll');
    });

    $('.close-btn').click(function(){
        $('.register-modal').removeClass('open');
        $('.login-modal').removeClass('open');
        $('.page').removeClass('no-scroll');
    });
    document.addEventListener("DOMContentLoaded", function() {
      var demo1 = new BVAmbient({
            selector: "#ambient",
            fps: 60,
            max_transition_speed: 11000,
            min_transition_speed: 8000,
            particle_number: 10,
            particle_maxwidth: 40,
            particle_minwidth: 10,
            particle_radius: 50,
            particle_opacity: true,
            particle_colision_change: true,
            particle_background: "#1A75E8"
      });
  });
  </script>

</body>
</html>