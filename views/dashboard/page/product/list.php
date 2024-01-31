<p>
    <a href="<?= URL ?>index.php/admin/addProduct"><button type="button" class="btn btn-primary">Tạo Mới</button></a>
    <a href="<?= URL ?>index.php/admin/trashProduct/1"><button type="button" class="btn btn-primary">Thùng
            Rác(<?=  count($data['trash'])?>)</button></a>
</p>
<table class="table table-bordered table-hover">
    <tr>
        <th>id</th>
        <th>Product name</th>
        <th>Brand</th>
        <th>Category</th>
        <th>Image</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Sale</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Trash</th>
    </tr>
    <?php foreach ($data['product'] as $value):?>
    <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['product_name'] ?></td>
        <td>
            <?php
						foreach ($data['allBrand'] as $p) {
							if ($value['brand_id'] == $p['id']) {
								echo $p['brand_name'];
							}
						}
					?>

        </td>
        <td>
            <?php
						foreach ($data['allCate'] as $p) {
							if ($value['category_id'] == $p['id']) {
								echo $p['category_name'];
							}
						}
					?>

        </td>
        <td><img src="<?= URL?>public/img/<?= $value['image'] ?>" style="width: 50px;" alt=""></td>
        <td><?= $value['quantity'] ?></td>
        <td><?=number_format($value["price"], 0, '', ',')  ?>VND</td>
        <td>
            <?php
					if ($value['sale']==1) { ?>
            Có

            <?php } else { ?>
            Không
            <?php } ?>
        </td>
        <td>
            <?php
					if ($value['status']==0) { ?>

            <a onclick="actionChange('Ẩn Sản phẩm','<?=URL ?>index.php/admin/delStatusProduct/<?= $value['id'] ?>')"
                class="showcursor"> <img class="icon" style="width:15px;"
                    src="<?=URL ?>public\backend\images\eye-regular.svg" alt=""></a>

            <?php } else { ?>
            <a onclick="actionChange('Hiện Sản phẩm','<?=URL ?>index.php/admin/retoreStatusProduct/<?= $value['id'] ?> class= "
                showcursor" href="<?=URL ?>index.php/admin/retoreStatusProduct/<?= $value['id'] ?>"> <img class="icon"
                    style="width:15px;" src="<?=URL ?>public\backend\images\eye-slash-regular.svg" alt=""></a>
            <?php } ?>
        </td>
        <td><a href="<?=URL ?>index.php/admin/editProduct/<?= $value['id'] ?>"><img class="icon" style="width:15px;"
                    src="<?=URL ?>public\backend\images\pen-to-square-solid.svg" alt=""></a></td>
        <td><a onclick="actionChange('Chuyển vào trash','<?=URL ?>index.php/admin/delTempProduct/<?= $value['id'] ?>')"><img
                    class="icon" style="width:15px;" src="<?=URL ?>public\backend\images\trash-solid.svg" /></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<?= $data['paginator'] ?>