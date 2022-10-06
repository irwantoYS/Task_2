<?php
    $produk = array(
        array(
            "id" => "1" , 
            "nama" => "JACKET HARINGTON SCREAMOUS" ,
            "gambar" => "https://cf.shopee.co.id/file/2bb360661d6a6db716efc5cac44ba065" ,
            "harga" => "170.000,-" ,
        ) ,
        array(
            "id" => "2" , 
            "nama" => "HODIE SCREAMOUS COWOK KEREN" ,
            "gambar" => "https://cf.shopee.co.id/file/6438e6eceb6b92441e4ac83390734e62" ,
            "harga" => "166.000,-" ,
        ) ,
        array(
            "id" => "3" , 
            "nama" => "HOODIE SCREAMOUS PUTIH" ,
            "gambar" => "https://cf.shopee.co.id/file/99d2fc08085dac0aa4f8ab66aea5f91c_tn" ,
            "harga" => "160.000,-" ,
        ) ,
    ) ;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pencarian Produk</title>
    </head>
    <style>
        h2 {
            color: rgb(0, 128, 119);
        }
        .box {
                border: 1px solid;
                
        }
        .desain-layout {
            width: 200px;
            margin: 20px;
            
        }
        .gambar {
            display: flex;
            
        }
        .teks {
            padding: 10px;
        }
    </style>
    <body>
        <center><h2>Detail Produk</h2></center>

            <div class="gambar">

            <?php
                for($i = 0; $i < count($produk); $i++ ) {
            ?>
            <div class="desain-layout">
                <div  class="box">
                    <img width="200" src="<?php echo $produk[$i]["gambar"] ?>" alt="">
                    <div class="teks">
                    <h3><?= $produk[$i]["nama"] ?></h3>
                    <h4> Rp.<?= $produk[$i]["harga"] ?></h4>
                    </div>
                </div>
            </div>
            
            <?php
                }
            ?>

    </body>
</html>