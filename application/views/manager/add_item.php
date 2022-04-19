<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Добавить товар</h1>
                <?=isset($error) ? $error : '' ?>
                <?=validation_errors()?>
                <?=form_open_multipart(base_url('manager/add_item'))?>
                    <div class="mb-3">
                        <label for="title">Название</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?=set_value('title')?>">
                    </div>
                    <div class="mb-3">
                        <label for="price">Цена</label>
                        <input type="number" class="form-control" min="0" step="0.01" id="price" name="price" value="<?=set_value('price')?>">
                    </div>
                    <div class="mb-3">
                        <label for="image">Картинка</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="description">Описание</label>
                        <textarea class="form-control" id="description" name="description"><?=set_value('description')?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">добавить</button>
                <?=form_close()?>
            </div>
        </div>
    </div> 
