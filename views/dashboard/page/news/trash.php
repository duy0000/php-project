<p>
    <a href="<?= URL ?>index.php/admin/newsList/1"><button type="button" class="btn btn-secondary">Quay Lại</button></a>
    <a href=""><button type="button" class="btn btn-primary">Trash(<?=  count($data['trash'])?>)</button></a>
</p>
<table class="table table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Sort_Des</th>
        <th>Content</th>
        <th>avatar</th>
        <th>retore</th>
        <th>Delete</th>
    </tr>

    <?php foreach ($data['news'] as $value):?>
    <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['title'] ?></td>
        <td><?= $value['short_description'] ?></td>
        <td><?= $value['content'] ?></td>
        <td><img style="width: 100px;" src="<?= URL?>public/img/news/<?= $value['avatar'] ?>" alt=""></td>

        <td><a onclick="actionChange('Khôi phục','<?=URL ?>index.php/admin/retoreTempNews/<?= $value['id']?>')">Khôi
                Phục<img class="icon" style="width:15px;"
                    src="<?=URL ?>public\backend\images\rotate-right-solid.svg" /></a></td>
        <td><a onclick="actionChange('Xóa','<?=URL ?>index.php/admin/deleteNews/<?= $value['id']?>')">Xóa <img
                    class="icon" style="width:15px;" src="<?=URL ?>public\backend\images\trash-solid.svg" /></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<?= $data['paginator'] ?>