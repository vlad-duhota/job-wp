<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Find our job</title>
  <!-- animate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  

  <?php wp_head(); ?>
</head>

<header class="header wow animate__animated animate__fadeInDown">
    <div class="container">
      <a href="#" class="logo">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="logo icon" />
        FindYour<span>Job</span>
      </a>

      <input type="checkbox" name="" id="togle" />
      <label for="toggle">
        <span class="toggle-btn"></span>
      </label>

      <nav class="menu">
        <ul class="menu-list">
          <li class="menu-item">
            <a class="menu-link" href="#"> Главная </a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#"> Вакансии </a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#"> Компании </a>
          </li>
        </ul>
      </nav>

      <div class="account">
        <a class="login" href="#">Войти</a>
        <a class="register" href="#">Регистрация</a>
      </div>
    </div>
  </header>