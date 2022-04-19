<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Добавить вид</h1>
                <?=isset($error) ? $error : '' ?>
                <?=validation_errors()?>
                <?=form_open_multipart(base_url('manager/add_category'))?>
                    <div class="mb-3">
                        <label for="title">Название</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?=set_value('title')?>">
                    </div>
                    <button type="submit" class="btn btn-success">Добавить</button>
                <?=form_close()?>
            </div>
        </div>
    </div> 
