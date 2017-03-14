<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "NIM: ";echo $obj->nim;
echo "<br>";
echo "Program Studi: ";echo $obj->prodi;
echo "<br>";
echo "Mata kuliah pertama: ";echo $obj->matkul[0];
echo "<br>";
echo "Mata kuliah kedua: ";echo $obj->matkul[1];
echo "<br>";
echo "Mata kuliah ketiga: ";echo $obj->matkul[2];
echo "<br>";
echo "Mata kuliah keempat: ";echo $obj->matkul[3];
?>