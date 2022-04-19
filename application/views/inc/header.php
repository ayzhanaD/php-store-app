<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Магазин КТ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=site_url()?>">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">О нас</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Контакты</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Виды товаров
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?foreach($categories as $category):?>
              <li><a class="dropdown-item" href="<?=base_url('category/'.$category->id)?>"><?=$category->title?></a></li>
            <?endforeach;?>
          </ul>
        </li>
      </ul>
     
      <?if(isset($user['logged']) && $user['logged']):?>
        <div class="dropdown col-1">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?=$user['first_name']?>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="<?=base_url('cart')?>">Корзина</a></li>
            <?if($user['level'] >= 1):?>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?=base_url('manager/items')?>">Товары</a></li>
            <li><a class="dropdown-item" href="<?=base_url('manager/categories')?>">Виды товаров</a></li>
            <?endif;?>
            <?if($user['level'] == 2):?>
            <li><a class="dropdown-item" href="<?=base_url('manager/users')?>">Пользователи</a></li>
            <?endif;?>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?=base_url('home/logout')?>">Выйти</a></li>
          </ul>
        </div> 
      <?else:?>
        <a class="nav-link" style="color: white;" href="<?=base_url('home/login')?>">Войти</a>
      <?endif;?>
      <form class="d-flex" action="" method="get">
        <input class="form-control me-2" type="search" placeholder="поиск.." aria-label="Поиск" name="search">
        <button class="btn btn-light bi bi-search-heart-fill" type="submit"></button>
      </form>
    </div>
  </div>
</nav>

<? if(isset($alert) && is_array($alert)):?>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="alert alert-<?=$alert['type']?>"><?=$alert['message']?></div>
      </div>
    </div>
  </div>
<? endif;?>