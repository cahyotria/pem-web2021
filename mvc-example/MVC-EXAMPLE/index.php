<?php 
	/**
	 * Bootstrap page
	 * Require file autoload dari vendor
	 */
	require_once __DIR__ . '/vendor/autoload.php';
	use Controllers\Mahasiswa;

	/**
	 * Buat objek dari kelas Mahasiswa
	 */
	$controller = new Mahasiswa();
	

	//tentukan bagaimana halaman akan di-load
	if(!isset($_GET['act']))
	{
		//pemanggilan method yang akan di-run
		$controller->index();
	}
	else
	{
		switch($_GET['act'])
		{
			case 'home' : 
				$controller->index();  //untuk judul di controller
				break;
			
			case 'simpan' : //sebagai act di index.php views
				$controller->save();  //untuk judul di controller
				break;

			case 'simpan_update': //act di edit.php
				$controller->editSave();  //untuk judul di controller
				break;

			case 'tampil-data' :
				$controller->show_data();  //untuk judul di controller
				break;

			case 'update'://sebagai penyebut di $rs controller dan href
				$controller->updateData();  //untuk judul di controller
				break;

			case 'delete'://sebagai penyebut di $rs controller dan href 
				$controller->hapusData(); //untuk judul di controller
				break;

			default : 
				$controller->index();
				break;
		}
	}


?>