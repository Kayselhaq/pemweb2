<?php
class mamalia
{
    public $jumlahkaki;
    public $berekor;
    function menyusui()
    {
        return "Hewan Menyusui";
    }

    function melahirkan()
    {
        return "Hewan Melahirkan";
    }
}

$objekmamalia = new mamalia();
echo $objekmamalia -> melahirkan();
echo "<br>";
echo $objekmamalia -> menyusui();