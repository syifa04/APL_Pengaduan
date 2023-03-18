<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardpetugas extends BaseController
{
	public function index()
	{
		$data['intro']='<div class="jumbotron mt-5">
		<h1>Selamat Datang, '.session()->get('username').'</h1>
		<p>Silahkan gunakan halaman ini untuk menampilkan informasi Pengaduan Masyarakat Kelurahan Winduherang !</p>
	  </div>';
		return view ('dashboard', $data);
	}
}
