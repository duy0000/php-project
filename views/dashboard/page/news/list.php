<p>
    <a href="<?= URL ?>index.php/admin/addNews"><button type="button" class="btn btn-primary">Tạo Mới</button></a>
    <a href="<?= URL ?>index.php/admin/trashNews/1"><button type="button" class="btn btn-primary">Thùng
            Rác(<?=  count($data['trash'])?>)</button></a>
</p>
<table class="table table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Sort_Des</th>
        <th>Content</th>
        <th>avatar</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($data['news'] as $value):?>
    <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['title'] ?></td>
        <td>
            <div class="limit_text"> <?= $value['short_description'] ?></div>
        </td>
        <td>
            <div class="limit_text"> <?= $value['content'] ?></div>
        </td>
        <td><img style="width: 100px;" src="<?= URL?>public/img/news/<?= $value['avatar'] ?>" alt=""></td>

        <td>

            <?php
					if ($value['status']==0) { ?>

            <a onclick="actionChange('Ẩn Tin tức','<?=URL ?>index.php/admin/delStatusNews/<?= $value['id'] ?>')"
                class="showcursor"> <img class="icon" style="width:15px;"
                    src="<?=URL ?>public\backend\images\eye-regular.svg" alt="">Hiển Thị</a>

            <?php } else { ?>
            <a onclick="actionChange('Hiện Tin Tức','<?=URL ?>index.php/admin/retoreStatusNews/<?= $value['id']?>')"
                class="showcursor"> <img class="icon" style="width:15px;"
                    src="<?=URL ?>public\backend\images\eye-slash-regular.svg" alt="">Đang Ẩn</a>
            <?php } ?>
        </td>

        <td><a href="<?=URL ?>index.php/admin/editNews/<?= $value['id'] ?>">Sửa <img class="icon" style="width:15px;"
                    src="<?=URL ?>public\backend\images\pen-to-square-solid.svg" alt=""></a></td>
        <td><a onclick="actionChange('Chuyển vào trash','<?=URL ?>index.php/admin/delTempNews/<?= $value['id']?>')">Thêm
                Vào Thùng Rác <img class="icon" style="width:15px;"
                    src="<?=URL ?>public\backend\images\trash-solid.svg" /></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<?= $data['paginator'] ?>