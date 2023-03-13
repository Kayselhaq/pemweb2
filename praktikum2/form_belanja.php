<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body class="comtainer">
    <div class="row">
        <div class="col-8">
            <h2>Belanja Online</h2>
            <hr>
<form methode="POST" action="form_belanja.php">
    <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
        <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">
            <i class="fa fa-address-card"></i>
            </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
        </div>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-4">Pilih produk</label> 
    <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Mesin cuci"> 
        <label for="radio_2" class="custom-control-label">Mesin cuci</label>
        </div>
    </div>
    </div>
    <div class="form-group row">
    <label for="" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
        <input id="" name="" type="text" class="form-control">
    </div>
    </div> 
    <div class="form-group row">
    <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
</form>
</div>
    <div class="col-4">
        <ul>
            <li class="list-group-item active">Daftar harga</li>
            <li class="list-group-item">TV: 4.200.000</li>
            <li class="list-group-item">Kulkas: 3.000.000</li>
            <li class="list-group-item">Mesin cuci: 2.000.000</li>
            <li class="list-group-item active">Harga dapat berubah setiap saat</li>
        </ul>
    </div>
</body>
</html>