<?php

namespace App\Controllers;

use App\Core\Controller;

class Pelanggan extends Controller
{
    protected object $model;

    public function __construct() {
        $this->model = new \App\Models\Pelanggan();
    }

	public function index()
	{
		$data['rows'] = $this->model->all();
		$this->home('pelanggan/index', $data);
	}

    public function create()
    {
        $this->home('pelanggan/create');
    }

    public function store()
    {
        $this->model->store();
        header('location:' . URL . '/pelanggan' );
    }

    public function edit($id)
    {
        $data['row'] = $this->model->edit($id);
        $this->home('pelanggan/edit', $data);
    }

    public function update()
    {
        $this->model->update();
        header('location:' . URL . '/pelanggan' );
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location:' . URL . '/pelanggan' );
    }

}
