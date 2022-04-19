<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Редактировать пользователя</h1>           
                <?=validation_errors()?>
                <?=form_open(base_url('manager/edit_user/' . $user->id))?>
                    <div class="mb-3">
                        <label for="email">Почта</label>
                        <input type="email" class="form-control" id="email" 
                        name="email" value="<?=set_value('email', $user->email)?>">
                    </div>
                    <div class="mb-3">
                        <label for="level">Статус</label>
                        <input type="number" min="0" step="1" class="form-control" id="level" 
                        name="level" value="<?=set_value('level', $user->level)?>">
                    </div>
                    <div class="mb-3">
                        <label for="first_name">Имя</label>
                        <input type="text" class="form-control" id="first_name" 
                        name="first_name" value="<?=set_value('first_name', $user->first_name)?>">
                    </div>
                    <div class="mb-3">
                        <label for="last_name">Фамилия</label>
                        <input type="text" class="form-control" id="last_name" 
                        name="last_name" value="<?=set_value('last_name', $user->last_name)?>">
                    </div>
                    <div class="mb-3">
                        <label for="password">Пароль</label>
                        <input type="text" class="form-control" id="password" 
                        name="password" value="<?=set_value('password')?>">
                    </div> 
                    <button type="submit" class="btn btn-success">Сохранить</button>
                <?=form_close()?>
            </div>
        </div>
    </div> 
