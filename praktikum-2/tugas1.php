<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 mt-5">
        <form method = "POST" action = "">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilihan Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="mesinCuci" min ='0' max = "100"> 
        <label for="radio_0" class="custom-control-label">Mesin Cuci</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_2" class="custom-control-label">TV</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="text1" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>

        
		</div>
		<div class="col-md-4 mt-5">
        <ul class="list-group">
  <li class="list-group-item active" aria-current="true">Daftar Harga</li>
  <li class="list-group-item">TV : 4.200.000</li>
  <li class="list-group-item">Kulkas 3.100.000</li>
  <li class="list-group-item">Mesin Cuci 3.000.000</li>
  <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
</ul>




		</div>
	</div>
</div>



<?php

if(isset($_POST['submit'])  && isset ($_POST['radio'])) : ?>
Nama Customer : <?= $_POST['customer'] ?><br>
Produk Pilihan : <?= $_POST ['radio']?> <br>
Jumlah Unit : <?= $_POST ['jumlah']?> <br>
<?php  
    if($_POST['radio']== "TV" && $_POST ['jumlah'] >= 1 ){
        $harga = 4200000 * $_POST['jumlah'];
        echo 'TOTAL HARGA :  ' . $harga;}
    elseif($_POST['radio']== "Kulkas" && $_POST ['jumlah'] >= 1){
        $harga = 3100000 * $_POST['jumlah'];
        echo 'TOTAL HARGA :  ' . $harga; 
    } elseif($_POST['radio']== "mesinCuci" && $_POST [ 'jumlah'] >= 1){
        $harga = 3000000 * $_POST['jumlah'];
        echo 'TOTAL HARGA  :  ' . $harga;
    }
    

?>


<?php endif ?>
</body>
</html>