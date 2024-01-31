<?php 
$r=$data['edit'];
?>
<form action="<?= URL ?>index.php/admin/posteditcate/<?=$r['id']?>" method="post">
    <div class="form-group">
        <label>Tên danh mục</label>
        <input type="text" name="category_name" value="<?= $r['category_name'] ?>" class="form-control" placeholder="">
    </div>
    <div class="form-group">
        <label>cấp độ</label>
        <select class="form-control" name="parent">
            <option value="0">0</option>
            <?php 
    foreach($data['category'] as $val){
        if ($r['parent']==$val['id']){
        echo "<option selected value='".$val['id']."'>".$val['category_name']."</option>";

        }
        else {
        echo "<option value='".$val['id']."'>".$val['category_name']."</option>";

        }
    }
    
    ?>
        </select>
    </div>
    <div class="form-group">
        <label>trạng thái</label>
        <select class="form-control" name="status">
            <?php 
         if ($r['status']==1){
            echo "<option value='0'>Hiển thị</option>";
            echo "<option selected value='1'>Ẩn</option>";
        }
        else{
            echo "<option selected value='0'>Hiển thị</option>";
            echo "<option  value='1'>Ẩn</option>";
        }

    ?>
        </select>
    </div>
    <a href="<?=URL?>index.php/admin/cateList/1"><button type="button;border: 1px solid darkblue"
            class="btn btn-secondary">quay
            Lại</button></a>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>