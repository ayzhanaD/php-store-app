<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Пользователи</h1>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Почта</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Управлять</th>
                    </tr>
                </thead>
                <tbody>
                    <?foreach($items as $item):?>
                        <tr>
                            <th scope="row"><?=$item->id?></th>
                            <td><?=$item->email?></td>
                            <td><?=$item->first_name?> <?=$item->last_name?></td>
                            <td><?=$item->level?></td>
                            <td>
                                <a class="btn btn-secondary delete" href="<?=base_url('manager/delete_user/' . $item->id)?>"><i class="bi bi-x-circle-fill"></i></a>
                                <a class="btn btn-dark" href="<?=base_url('manager/edit_user/' . $item->id)?>"><i class="bi bi-pen-fill"></i></a>
                            </td>
                        </tr>
                    <?endforeach;?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-12 m-auto">
                <?=$pagination?>
            </div>
        </div>
    </div>