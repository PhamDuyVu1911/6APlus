<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    
</head>
<body>
    <table border="1px solid" style="margin: auto; text-align: center; width:960px">
        <tr class="normal">
            <td colspan="2">
                <img src="../20000445_PhamDuyVu_THCK/img/banner.png" alt="" width=100% height=200px>
            </td>
        </tr>
        <tr class="normal">
            <td>
                <a href="index.php">Trang Chủ</a> |
                <a href="admin.php">Quản lý</a>
            </td>
            <td colspan="2" style="padding-left:500px">
                <form action="#" method="get">
                    <input type="txt" name="txtsearch" value="<?php if(isset($_REQUEST["txtsearch"])) echo $_REQUEST["txtsearch"] ?>">
                    <input type="submit" value="Tìm Kiếm Theo Tên">
                </form>
                <!-- Seacrh theo giá -->
                <form action="" method="get" name = "priceSearch">
                        <input type="search" name="priceSearch" id="">
                        <input type="submit" value="Tìm Kiếm Theo Giá">
                </form> <br>
            </td>

        </tr>
        <tr class="_normal">
            <td id="left">
                <?php
                    include_once("View/vCompany.php");
                    $p = new viewCompany();
                    $p -> viewAllCompany();
                ?>
            </td>
            <td id="main">
                <?php
                    include_once("View/vProduct.php");
                    $p = new viewProduct();
                    if(isset($_REQUEST["Comp"])){
                        $p -> viewAllProductByCompany($_REQUEST["Comp"]);
                    }elseif(isset($_REQUEST["txtsearch"])){
                        $p->viewSearchProduct($_REQUEST["txtsearch"]);
                    }else{
                        $p -> viewAllProduct();
                    }
                ?>
            </td>
        </tr>
        <tr class="normal"style="background-color:yellow">
            <td colspan="2">
                <p>20000445 - PHẠM DUY VŨ</p>
            </td>
        </tr>
    </table>
</body>
</html>