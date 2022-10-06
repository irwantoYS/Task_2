
<?php
    $produk = array(
        array(
            "id" => "1" , 
            "nama" => "sepatu adidas asli" ,
            "gambar" => "https://lzd-img-global.slatic.net/g/p/fe27dcd20b0c81d54efa9f347f5e5a21.jpg_720x720q80.jpg_.webp" ,
            "harga" => "800.000" ,
        ) ,
        array(
            "id" => "2" , 
            "nama" => "celana wanita" ,
            "gambar" => "https://lzd-img-global.slatic.net/g/p/8ed75430b20f95905042558fa0d59506.jpg_720x720q80.jpg_.webp" ,
            "harga" => "110.000" ,
        ) ,
        array(
            "id" => "3" , 
            "nama" => "mouse gaming" ,
            "gambar" => "https://cf.shopee.co.id/file/7796b06ebab3369b2cc9958c0c194aeb" ,
            "harga" => "250.000" ,
        ) ,
    ) ;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>belanja online</title>

    </head>
    <body>

        <center><h1>Produk</h1></center>

        
        <form action="detail-produk.php" method="GET">
            <label for="nama-barang">Nama Barang :</label>
            <input type="text" name="nama-barang"> <br>
            <button type="submit">cari barang</button>
        </form>    

    <p>
        <style>
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
                padding: 30px;
            }
        </style>
   
        <p><center><h3>Rekomendasi Untuk Anda</h3></center><p>
    </p>
        
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