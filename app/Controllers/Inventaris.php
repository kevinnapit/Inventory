<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ItemModel;
use App\Models\CategoryModel;
use App\Models\LocationModel;

class Inventaris extends BaseController
{
    var $model, $category, $locationModel;
    function __construct()
    {
        $this->model = new ItemModel();
        $this->category = new CategoryModel();
        $this->locationModel = new LocationModel();
    }
    public function index()
    {
        $data['tes'] = $this->model->findAll();
        return view('web/inventaris/index', $data);
    }
    public function fetchData()
    {
        $itemModel = new ItemModel();
        $data = $itemModel->findAll();
        return json_encode($data);
    }
    public function add()
    {
        $data = [
            'categories' => $this->category->findAll(),
            'locations' => $this->locationModel->findAll()

        ];
        return view('web/inventaris/addinventaris', $data);
    }


    public function create()
    {

        return view('web/addcategory');
    }

    public function inventaris_store()
    {
        $itemModel = new ItemModel();
        $session = session();

        // Validasi input
        $rules = [
            'ItemName' => 'required',
            'CategoryID' => 'required',
            'LocationID' => 'required',
            'Quantity' => 'required',
            'PurchaseDate' => 'required',
            'Price' => 'required',
        ];

        if (!$this->validate($rules)) {
            $session->setFlashdata('errors', $this->validator->getErrors());
            return redirect()->back()->withInput();
        }

        // Simpan data kategori
        $data = [
            'ItemName' => $this->request->getVar('ItemName'),
            'CategoryID' => $this->request->getVar('CategoryID'),
            'LocationID' => $this->request->getVar('LocationID'),
            'Quantity' => $this->request->getVar('Quantity'),
            'PurchaseDate' => $this->request->getVar('PurchaseDate'),
            'Price' => $this->request->getVar('Price')
        ];

        $itemModel->save($data);
        $session->setFlashdata('success', 'Inventaris added successfully!');
        return redirect()->to('inventaris');
    }
    public function category_store()
    {

        $categoryModel = new CategoryModel();
        $session = session();

        // Validasi input
        $rules = [
            'CategoryName' => 'required|min_length[3]|max_length[255]'
        ];

        if (!$this->validate($rules)) {
            $session->setFlashdata('errors', $this->validator->getErrors());
            return redirect()->back()->withInput();
        }
        $data = [
            'CategoryName' => $this->request->getVar('CategoryName')
        ];

        $categoryModel->save($data);
        $session->setFlashdata('success', 'Category added successfully!');
        return redirect()->to('/');
    }
    public function location()
    {
        return view('web/addlocation');
    }
    public function delete()
    {
        $model = new ItemModel();
        $id = $this->request->getPost('ItemID');
        $model->delete($id);

        return redirect()->to('inventaris/index');
    }
    public function edit($id)
    {
        $data['inventaris'] = $this->model->find($id);
        return view('web/inventaris/edit', $data);
    }

    public function inventaris_update($id)
    {
        $data = [
            'ItemName' => $this->request->getPost('ItemName'),
            'CategoryID' => $this->request->getPost('CategoryID'),
            'LocationID' => $this->request->getPost('LocationID'),
            'Quantity' => $this->request->getPost('Quantity'),
            'PurchaseDate' => $this->request->getPost('PurchaseDate'),
            'Price' => $this->request->getPost('Price'),
        ];

        $this->model->update($id, $data);

        return redirect()->to(base_url('inventaris'));
    }
}
