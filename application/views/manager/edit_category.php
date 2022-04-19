<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Редактировать вид</h1>
                <?=isset($error) ? $error : '' ?>
                <?=validation_errors()?>
                <?=form_open_multipart(base_url('manager/edit_category/' . $item->id))?>
                    <div class="mb-3">
                        <label for="title">Название</label>
                        <input type="text" class="form-control" id="title" 
                        name="title" value="<?=set_value('title', $item->title)?>">
                    </div>
                    <button type="submit" class="btn btn-success">Сохранить</button>
                <?=form_close()?>
            </div>
        </div>
    </div> 
