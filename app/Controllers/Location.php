<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ItemModel;
use App\Models\LocationModel;
use App\Models\CategoryModel;

class Location extends BaseController
{
    var $model, $locationModel;
    function __construct()
    {
        $this->model = new ItemModel();
        $this->locationModel = new LocationModel();
    }

    public function index()
    {
        $data['tes'] = $this->locationModel->findAll();
        return view('web/location/location', $data);
    }

    public function create()
    {
        return view('web/location/addlocation');
    }
    public function location_store()
    {
        if ($this->validate([
            'LocationName' => 'required|min_length[3]',
            'LocationDescription' => 'required|min_length[5]',
        ])) {
            $data = [
                'LocationName' => $this->request->getPost('LocationName'),
                'LocationDescription' => $this->request->getPost('LocationDescription'),
            ];

            $this->locationModel->save($data);

            return redirect()->to(base_url('location/create'))->with('status', 'Data successfully added');
        } else {
            return redirect()->to(base_url('location/create'))->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    // Show edit form
    public function edit($id)
    {
        $data['location'] = $this->locationModel->find($id);

        if (!$data['location']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Location not found');
        }

        return view('web/location/edit', $data);
    }

    // Update location data
    public function location_edit($id)
    {
        if ($this->validate([
            'LocationName' => 'required|min_length[3]',
            'LocationDescripsion' => 'required|min_length[5]',
        ])) {
            $data = [
                'LocationName' => $this->request->getPost('LocationName'),
                'LocationDescripsion' => $this->request->getPost('LocationDescripsion'),
            ];

            $this->locationModel->update($id, $data);

            return redirect()->to(base_url('location/edit/' . $id))->with('status', 'Data successfully updated');
        } else {
            return redirect()->to(base_url('location/edit/' . $id))->withInput()->with('errors', $this->validator->getErrors());
        }
    }
    public function delete()
    {
        $model = new LocationModel();
        $id = $this->request->getPost('LocationID');
        $model->delete($id);

        return redirect()->to('location/index');
    }
    public function location_update($id)
    {
        $data = [
            'LocationID' => $this->request->getPost('LocationID'),
            'LocationName' => $this->request->getPost('LocationName'),
        ];

        $this->locationModel->update($id, $data);

        return redirect()->to(base_url('location'));
    }
}
