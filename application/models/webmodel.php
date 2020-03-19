<?php
class Webmodel extends CI_Model {
	function __construct()
	{
	  parent::__construct();
    }
	
	function test()
	{
		return 'Data untuk test model';
	}
	
	function proses_register($arr)
	{
		$id      = $arr['no_id'];
		$nama    = $arr['nama'];
		$alamat  = $arr['alamat'];
		$email   = $arr['email'];
		$telp    = $arr['telepon'];
		
		$data    = 'Nomor ID : '.$id.'<br/>'.
		           'Nama : '.$nama.'<br/>'.
				   'Alamat : '.$alamat.'<br/>'.
				   'Email : '.$email.'<br/>'.
				   'Telp : '.$telp;
		return $data;
	}
}