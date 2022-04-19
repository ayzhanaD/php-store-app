<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Редактированть товар</h1>
           
                <?=isset($error) ? $error : '' ?>
                <?=validation_errors()?>
                <?=form_open_multipart(base_url('manager/edit_item/' . $item->id))?>
                    <div class="mb-3">
                        <label for="title">Название</label>
                        <input type="text" class="form-control" id="title" 
                        name="title" value="<?=set_value('title', $item->title)?>">
                    </div>
                    <div class="mb-3">
                        <label for="price">Цена</label>
                        <input type="number" class="form-control" min="0" step="0.01" id="price" 
                        name="price" value="<?=set_value('price', $item->price)?>">
                    </div>
                    <div class="mb-3">
                        <label for="image">Картинка</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <img src="<?=base_url('uploads/' .$item->image)?>" class="img-thumbnail"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description">Описание</label>
                        <textarea class="form-control" id="description" 
                        name="description"><?=set_value('description', $item->description)?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Сохранить</button>
                <?=form_close()?>
            </div>
        </div>
    </div> 
