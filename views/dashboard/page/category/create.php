<form action="<?= URL ?>index.php/admin/postaddcate" method="post">
    <div class="form-group">
        <label>Tên danh mục</label>
        <input type="text" name="category_name" class="form-control" placeholder="">
    </div>
    <div class="form-group">
        <label>Cấp Độ</label>
        <select class="form-control" name="parent">
            <option value="0">0</option>
            <?php 
    foreach($data['category'] as $val){
        echo "<option value='".$val['id']."'>".$val['category_name']."</option>";
    }
    
    ?>
        </select>
    </div>
    <div class="form-group">
        <label>Trang Thái</label>
        <select class="form-control" name="status">
            <option value="0">Hiển thị</option>
            <option value="1">Ẩn</option>

        </select>
    </div>
    <a href="<?=URL?>index.php/admin/cateList/1"><button type="button;border: 1px solid darkblue"
            class="btn btn-secondary">quay
            Lại</button></a>
    <button type="submit" class="btn btn-primary">Tạo Mới</button>
</form>