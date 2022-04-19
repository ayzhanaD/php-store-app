<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Товары</h1>
        </div>
    </div>
    <div class="row">
        <?if(count($items) == 0):?>
            <div class="col-6">
                <div class="alert alert-secondary">Товар не найден</div>
            </div>
        <?endif?>
        <?foreach($items as $item): ?>
            <div class="col-4">
                <div class="card" style="padding: 15px; margin: 20px; border-radius: 5px;">
                    <img src="<?=base_url('uploads/'.$item->image)?>" 
                        class="card-img-top" alt="<?=$item->title?>" 
                        style="
                        width: 21rem;
                        height: 21rem;
                        margin: auto;
                        border-radius: 5px;
                        ">
                    <div class="card-body">
                        <h5 class="card-title"><?=$item->title?></h5>
                        <p class="card-text"><?=$item->price?>₽</p>
                        <a href="<?=base_url('add/' . $item->id)?>" class="btn btn-dark">добавить</a>
                    </div>
                </div>
            </div>
        <?endforeach;?>   
    </div>
    <div class="row">
        <div class="col-12 m-auto">
            <?=$pagination?>
        </div>
    </div>
</div>