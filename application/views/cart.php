<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
        <div class="col-4" style="margin-bottom: 40px; margin-top: 20px;"> 
            <h1>Корзина: </h1>
        </div>
        <div class="col-10">
            <?if(!isset($items) || count($items) == 0):?>
                <div class="alert alert-secondary">Ваша корзина пуста.</div>
            <?else:?>
            <?foreach($items as $id => $item) : ?>
                <div class="row">
                    <div class="col-2">
                        <img src="<?=base_url('uploads/' . $item->image)?>" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-6"><h3><?=$item->title?></h3></div>
                    <div class="col-3"><h5><?=$item->price?></h5></div>
                    <div class="col-1">
                        <a class="btn btn-secondary bi bi-x-circle-fill delete" href="<?=base_url() . 'cart?delete=' . ($id+1)?>"></a>
                    </div>
                </div>
            <?endforeach;?>
                <hr> 
                <div class="row">
                    <div class="col-8">
                        <h2>Итого: </h2>
                    </div>
                    <div class="col-4 ">
                        <h2><?=$total?> ₽</h2>
                    </div>
                </div> 
            <?endif;?>
        </div>
    </div>
</div>