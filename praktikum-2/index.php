<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="container-fluid">

<div class="row mt-5">

<div class="col-3">


</div>
    <div class="col-6">

    <form  class = "form-horizontal" method = "POST" action = "index2.php"> 
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select" required="required">
        <option value="DDP">Dasar Dasar Pemograman</option>
        <option value="PW">Pemogramman Web</option>
        <option value="BasDat">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="number" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="number" name="uts" placeholder="Nilai UTS" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Number" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="Number" name="uas" placeholder="Nilai UAS" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Number" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="Number" name="tugas" placeholder="Nilai Tugas" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>

  <div class="col-3">



  </div>
</div>
</div>

                        <!-- form ada di dalam sini -->


    
</body>
</html>