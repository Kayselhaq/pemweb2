<?php
class buah
{
    public $namabuah;
    public $warnakulit;
    public $rasa;
    public $aroma;
    
    function tumbuh()
    {
        return "buah $this->namabuah itu tumbuh !";
    }

    function busuk()
    {
        return "buah $this->namabuah itu busuk !";
    }
}

$objekbuah = new buah;
echo $objekbuah->namabuah = "Jeruk";
echo "<br>";
echo $objekbuah->warnakulit = "orangw";
echo "<br>";
echo $objekbuah->rasa = "manis";
echo "<br>";
echo $objekbuah->aroma= "wangi";
echo '<br>';
echo $objekbuah->tumbuh();
echo "<br>";
echo $objekbuah->busuk();
$objek =  new Buah('sirsak', 'merah', 'manis', 'harum');
echo $objek->tumbuh();
echo"<BR>";
echo $objek->busuk();