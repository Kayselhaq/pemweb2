<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <h1>Belajar Form Handling</h1>
    <form action="belajar_post.php" method="POST">
    <label for="">Nama </label>
    <input type="text" name="nama" id=""><br>
    
    <label for="">Jenis Kelamin</label><br>
    <input type="radio" name="Jenis_Kelamin" value="laki-laki"> <span>Laki-Laki</span><br>
    <input type="radio" name="Jenis_Kelamin" value="Perempuan"> <span>Perempuan</span><br>
    
    <label for="">Hobi</label><br>
    <input type="checkbox" name="hobi[]" value="berenang"><span>Berenang</span><br>
    <input type="checkbox" name="hobi[]" value="basket"><span>Basket<span><br>
    <input type="checkbox" name="hobi[]" value="futsal"><span>Futsal</span><br>
    <input type="checkbox" name="hobi[]" value="badminton"><span>Badminton</span><br>
    
    <label for="">Umur</label><br>
    <input type="number" name="umur" id=""><br><br>
    
    <label for="">Tanggal Lahir</label><br>
    <input type="date" name="lahir" id=""><br><br>
    
    <label for="">Prodi</label><br>
        <select name="Prodi" id=""><
             <option value="Teknik Informatika">Teknik Informatika</option><br>
             <option value="Sistem Informasi">Sistem Informasi</option><br>
        </select><br><br><br><br>
    
        <button type="reset">Reset</button>
    
        <button type="submit">Kirim</button>
    </form>
</body>
</html>