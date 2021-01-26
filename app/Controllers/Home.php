<?php

namespace App\Controllers;

use App\Models\voteModel;

class Home extends BaseController
{
	protected $voteModel;
	public function __construct()
	{
		$this->voteModel = new VoteModel();
	}

	public function index()
	{
		//koneksi menghitung jumlah yang di sediakan 
		$db     = \Config\Database::connect();
		$builder = $db->table('vote');
		$builder->countAllResults();  // Produces an integer, like 25

		//menghitung jumlah pria dan wanita
		$builder->like('pilihan', 'rijal');
		$rijal = $builder->countAllResults();
		$builder->like('pilihan', 'ayu');
		$ayu = $builder->countAllResults();
		$builder->like('pilihan', 'hayu');
		$hayu = $builder->countAllResults();
		$builder->like('pilihan', 'rara');
		$rara = $builder->countAllResults();
		$builder->like('pilihan', 'maya');
		$maya = $builder->countAllResults();

		$data = [

			'title' => 'Rijal-eVote',
			'rijal' => $rijal,
			'ayu' => $ayu,
			'hayu' => $hayu,
			'rara' => $rara,
			'maya' => $maya


		];
		return view('beranda/index', $data);
	}
	public function vote()
	{
		//validasi input
		if (!$this->validate([
			'nik' => 'required|is_unique[vote.nik,nik]',
			'nama' => 'required',
			'pilihan' => 'required'
		])) {
			session()->setFlashdata('eror', 'NIK sudah melakukan Pemilihan, Gunakan NIK Berbeda');


			return redirect()->to('/home')->withInput();
		}

		$this->voteModel->save([
			'nik' => $this->request->getVar('nik'),
			'nama' => $this->request->getVar('nama'),
			'pilihan' => $this->request->getVar('pilihan')
		]);

		session()->setFlashdata('pesan', 'Selamat anda telah melakukan Pemilihan');

		return redirect()->to('/home');
	}
	public function riwayat()
	{
		$data = [
			'title' => 'Riwayat Pemilihan',
			'data' => $this->voteModel->findAll()
		];

		return view('riwayat/index', $data);
	}
}
	//--------------------------------------------------------------------