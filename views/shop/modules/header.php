<div class="pt-2 container-fluid fixed-top bg-light">

    <nav class=" navbar  navbar-expand-lg">
        <a href="<?= URL ?>index.php/home" class="pb-5 navbar-brand">
            <div class="logo">
                <img src="<?php echo URL; ?>public\img\Ảnh chụp màn hình 2024-01-15 202107.png" alt="">
            </div>
        </a>
        <button class="navbar-toggler menu" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars"></i>
            </span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto header-menu">
                <?php $this->view("shop/modules/menu"); ?>
            </ul>
            <div class="mr-3 cart">

                <?php
                    
                    if (isset($_SESSION['user'])){
                        ?>

                <a>
                    <!-- <i class="fas fa-user"></i> -->
                    <div class="name_user">Xin chào <?= $_SESSION['user'] ?>
                        <div class="_user" style="width:150px">
                            <ul>
                                <?php 
                                        if ($_SESSION['role'] !=0 ){
                                            echo "<li><a href='".URL."index.php/admin'>Trang Quản Lí</a></a></li>";
                                        }
                                        ?>
                                <li><a href="<?= URL ?>index.php/home/detailsUser">Chi Tiết</a></li>

                                <li><a href="<?= URL ?>index.php/home/logout">Đăng Xuất</a></li>
                            </ul>
                        </div>
                    </div>

                </a>
                <!-- echo $_SESSION['user']; -->
                <?php
                    }
                    else{

                   
                    ?>
                <a href="<?= URL ?>index.php/home/login" class="mr-2">
                    <i class="fas fa-user"></i>
                </a>
                <?php 
                        }
                       ?>


                <a class="ml-3 mr-3" href="<?= URL ?>index.php/home/cartview">
                    <i class="fas fa-shopping-cart"></i>
                </a>

            </div>
            <div class="form-inline search col-2 mr-5">
                <input type="text" class="form-control" placeholder="Search..">
                <button type="submit" class="form-control ml-4 btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>

        </div>
    </nav>
</div>