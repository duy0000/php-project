<p>
    <a href="<?= URL ?>index.php/admin/addCate"><button type="button" class="btn btn-primary">Tạo Mới</button></a>
    <a href="<?= URL ?>index.php/admin/trashCate/1"><button type="button" class="btn btn-primary">Thùng
            Rác(<?=  count($data['trash'])?>)</button></a>
</p>
<table class="table table-bordered table-hover">
    <tr>
        <th>id</th>
        <th>Tên Danh Mục</th>
        <th>Cấp độ</th>
        <th>Thao Tác</th>
    </tr>
    <?php foreach ($data['category'] as $value):?>
    <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['category_name'] ?></td>
        <td>
            <?php
					if ($value['parent']==0) {
						echo $value['parent']; 
					}
					else {
						foreach ($data['allCat'] as $p) {
							if ($value['parent'] == $p['id']) {
								echo $p['category_name'];
							}
						}
					}
					
					?>

        </td>

        <td>
            <?php
					if ($value['status']==0) { ?>
            <a style="cursor: pointer"
                onclick="actionChange('Xác nhận ẩn','<?=URL ?>index.php/admin/delStatusCate/<?= $value['id']?>')">
                Hiển Thị <img class="icon" style="width:15px;" src="<?=URL ?>public\backend\images\eye-regular.svg"
                    alt=""></a>

            <?php } else { ?>
            <a style="cursor: pointer;width:15px ;"
                onclick="actionChange('Xác nhận hiện','<?=URL ?>index.php/admin/retoreStatusCate/<?= $value['id']?>')">
                Đang Ẩn <img class="icon" style="width:15px;" src="<?=URL ?>public\backend\images\eye-slash-regular.svg"
                    alt=""></a>
            <?php } ?> |
            <a style="cursor: pointer" href="<?=URL ?>index.php/admin/editCate/<?= $value['id'] ?>">Sửa <img
                    class="icon" style="width:15px;" src="<?=URL ?>public\backend\images\pen-to-square-solid.svg"
                    alt=""></a>
            | <a style="cursor: pointer"
                onclick="actionChange('Chuyển vào trash','<?=URL ?>index.php/admin/delTempCate/<?= $value['id']?>')">
                Thêm Vào Thùng Rác <img class="icon" style="width:15px;"
                    src="<?=URL ?>public\backend\images\trash-solid.svg" /></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?= $data['paginator'] ?>