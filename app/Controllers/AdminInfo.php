<?php

namespace App\Controllers;

use App\Models\InfoModel;

class AdminInfo extends BaseController
{
    public function index()
    {
        $infoModel = new InfoModel();
        $data = [
            'title' => 'Info',
            'info' => $infoModel->findAll()
        ];
        return view('admin/info', $data);
    }

    public function save($id = NULL)
    {
        $infoModel = new InfoModel();
        $data = [
            'tgl_awal' => $this->request->getPost('tgl_awal'),
            'tgl_ahir' => $this->request->getPost('tgl_ahir'),
            'prioritas' => 0,
            'bagian' => $this->request->getPost('bagian'),
            'tentang' => $this->request->getPost('tentang'),
            'detail' => $this->request->getPost('detail'),
            'ket' => $this->request->getPost('ket')
        ];
        if ($id == NULL) {
            $infoModel->save($data);
            flash('Berhasil', 'Menyimpan data Informasi');
        } else {
            $infoModel->update($id, $data);
            flash('Berhasil', 'Mengubah data Informasi');
        }
        return redirect()->to('/data/info');
    }

    public function get($id)
    {
        $infoModel = new InfoModel();
        $data = ['info' => $infoModel->find($id)];
        echo json_encode($data);
    }

    public function delete($id)
    {
        $infoModel = new InfoModel();
        $infoModel->delete($id);
        flash('Berhasil', 'Menghapus Data Informasi', 'warning');
        return redirect()->to('/data/info');
    }

    public function prioritas($id)
    {
        $infoModel = new InfoModel();
        $info = $infoModel->find($id);
        if ($info['prioritas'] == false) {
            $infoModel->update($id, ['prioritas' => true]);
            $message = true;
        } else {
            $infoModel->update($id, ['prioritas' => false]);
            $message = false;
        }
        return $message;
    }
}
