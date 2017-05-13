<?php
include_once VIEWS.'/includes/admin/header.php';
?>
        <main>
            <h1><?= $title;?></h1>
        </main>
       

<article class='large'>
        <a href="/admin/roles/add" class="add_item"><i class="fa fa-plus fa-2x" aria-hidden="true"></i> Добавить роль
        </a>
        <h4>Список ролей</h4>
        <table>
            <tr>
                <th>ID роли</th>
                <th>Название роли</th>
            </tr>

            <?php foreach ($roles as $role):?>
                <tr>
                    <td><?php echo $role['id']?></td>
                    <td><?php echo $role['name']?></td>
                    <td><a title="Редактировать" href="/admin/roles/edit/<?php echo $role['id']?>">
                        <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                    </td>
                    <td><a title="Удалить" href="/admin/roles/delete/<?php echo $role['id']?>" class="del"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
</article>

<?php

include_once VIEWS.'/includes/admin/footer.php';

