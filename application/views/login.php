<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-4 offset-md-4 text-center">
                <h1>Вход</h1>
                <?if(isset($error)):?>
                    <div class="alert alert-danger"><?=$error?></div>
                <?endif;?>
                <?=validation_errors()?>
                <?=form_open_multipart(base_url('home/login'))?>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="почта" required 
                        name="email" value="<?=set_value('email')?>">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="пароль" required 
                         name="password" value="<?=set_value('password')?>">
                    </div>
                    <button type="submit" class="btn btn-block btn-dark">Войти</button>
                <?=form_close()?>
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-warning mt-4" href="<?=base_url('home/register')?>">Зарегистрироваться</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 