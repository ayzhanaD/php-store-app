<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-4 offset-md-4 text-center">
                <h1>Регистрация</h1>
                <?if(isset($success) && $success):?>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success">
                                Вы зарегистрировались успешно.</br>
                                <a href="<?=base_url()?>">Home</a>
                            </div>
                        </div>
                    </div>
                <?else:?>
                <?=validation_errors()?>
                <?=form_open(base_url('home/register'))?>
                    <div class="mb-3">
                        <input type="email" class="form-control" required
                        name="email" value="<?=set_value('email')?>" placeholder="почта..">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" required
                        name="first_name" value="<?=set_value('first_name')?>" placeholder="имя..">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" required
                        name="last_name" value="<?=set_value('last_name')?>" placeholder="фамилия..">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" required
                        name="password" value="<?=set_value('password')?>" placeholder="пароль..">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" required
                        name="passconf" value="<?=set_value('passconf')?>" placeholder="подтвердите пароль">
                    </div>
                    <button type="submit" class="btn btn-block btn-dark">Зарегистрироваться</button>
                <?=form_close()?>

                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-warning mt-4" href="<?=base_url('home/login')?>">Вернуться на страницу входа</a>
                    </div>
                </div>
                <?endif;?>
            </div>
        </div>
    </div> 