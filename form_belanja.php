<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja</title>
</head>
<body>

<nav style="background-color: lightgrey;" class="navbar navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Belanja Online</a>
  </div>
</nav>


<div class="container mt-5">
    <div class="row justify-content-between">
      <div class="col-7">
        <form method="post" action="form_belanja.php">
          <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
              <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="Kipas Angin"> 
                <label for="produk_0" class="custom-control-label">KIPAS ANGIN</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="Kulkas"> 
                <label for="produk_1" class="custom-control-label">KULKAS</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="Mesin Cuci"> 
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
              <input id="text" name="jumlah" type="text" class="form-control" placehorder="Jumlah Barang">
            </div>
          </div> 

          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-success">Kirim</button>
            </div>
          </div>
        </form>

        <br>

        <?php
            $nama_customer = $_POST['customer'];
            $produk_pilihan = $_POST['produk'];
            $jumlah_beli = $_POST['jumlah'];
            
            if ($produk_pilihan == "Kipas Angin") {
                $total_belanja = $jumlah_beli * 1200000;
            }elseif ($produk_pilihan == "Kulkas") {
                $total_belanja = $jumlah_beli * 3100000;
            }elseif ($produk_pilihan == "Mesin Cuci") {
                $total_belanja = $jumlah_beli * 3800000;
            }

            echo '<hr>';
            echo '<br/>Nama Customer: '.$nama_customer;
            echo '<br/>Produk Pilihan: '.$produk_pilihan;
            echo '<br/>Jumlah Beli: '.$jumlah_beli;
            echo '<br/>Total Belanja: Rp '.$total_belanja;
        ?>
        
      </div>
    </div>
</div>

  <footer style="background-color: lightgrey;" class="fixed-bottom">
        <div class="mt-3 ml-4">
          <p> Created with by Arhaq <a class="text-black fw-bold" href="#"></a></p>
        </div>
  </footer>
    
</body>
</html>