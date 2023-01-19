<?php

namespace App\Controllers;
use App\Models\BarangModel;
use App\Models\KategoriModel;

class Product extends BaseController
{
    public function __construct()
	{ 
        helper('form'); 
		$this->validation = \Config\Services::validation();
		$this->kategori = new KategoriModel();
        $this->barang = new BarangModel();
	}

	public function index()
	{
		$barang = $this->barang->select('barang.*, kategori.nama AS kategori')->join('kategori', 'barang.id_kategori=kategori.id')->findAll();
		return view('product/index',[
			'products' => $barang,
		]);
	}

    public function create()
	{
        $kategori = $this->kategori->findAll();
		return view('product/create',[
            'categories' => $kategori,
		]);
	} 

	public function store()
	{
		if($this->request->getPost()){
			$data = $this->request->getPost();
			$this->validation->run($data, 'barang');

			$file = $this->request->getFile('gambar');
			$newName = $file->getRandomName();
			$path = $file->move('public/uploads/', $newName);

			$barang = new \App\Entities\Barang();
			$barang->fill($data);
			$barang->gambar = $newName;
			$barang->created_by = session('id');
			$barang->created_date = date("Y-m-d H:i:s");

			$this->barang->save($barang);

				$id = $this->barang->insertID(); 

			return redirect()->to('product');
		}
	}
}