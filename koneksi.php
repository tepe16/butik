<?php

class database{
 
    var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "butik";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

    function list_menu_shop(){
        $query ="SELECT * from kategori_barang";
        $result= $this->koneksi->query($query) or die($this->koneksi->error);
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $hasil[] = $a;
        }
        return $hasil;
    }
    function daftar_produk_all(){
        $query ="SELECT * from barang";
        $result= $this->koneksi->query($query) or die($this->koneksi->error);
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $hasil[] = $a;
        }
        return $hasil;
    }

    function daftar_produk_kategori($id_kategori){
        $query ="SELECT a.id_barang,a.id_kategori,a.nama_barang,a.harga,a.jumlah_barang,a.keterangan,a.gambar,b.nama_kategori from barang a join kategori_barang b on a.id_kategori=b.id_kategori  where a.id_kategori='$id_kategori'";
        $result= $this->koneksi->query($query) or die($this->koneksi->error);
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $hasil[] = $a;
        }
        return $hasil;
    }

}