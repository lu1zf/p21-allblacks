<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\FansModel;

class FansController extends BaseController
{
    private $fansModel;

    public function __construct()
    {
        $this->fansModel = new FansModel();
    }

    public function index()
    {
        //
    }

    public function add()
    {
        echo view('components/header');
        echo view('components/fan', [
            'fan' => [],
            'url' => base_url("fans/create"),
        ]);
        echo view('components/footer');
    }

    public function create()
    {
        $data = $this->request->getPost();
        $insertedId = $this->fansModel->insert($data);


        return redirect()->to(base_url("fans/$insertedId"));
    }

    public function edit(int $id)
    {
        $fan = $this->fansModel->find($id);

        echo view('components/header');
        echo view('components/fan', [
            'fan' => $fan,
            'url' => base_url("fans/$id"),
        ]);
        echo view('components/footer');
    }

    public function update(int $id)
    {
        $data = $this->request->getPost();

        $updated = $this->fansModel->update($id, $data);

        if ($updated){
            session()->setFlashdata('success', 'Torcedor salvo');
        } else {
            session()->setFlashdata('error', 'Erro ao salvar torcedor');
        }

        return redirect()->to(base_url());
    }

    public function delete(int $id)
    {
        $deleted = $this->fansModel->delete($id);
        if ($deleted) {
            session()->setFlashdata('success', 'Torcedor excluído');
        } else {
            session()->setFlashdata('error', 'Erro ao deletar torcedor');
        }

        return redirect()->to(base_url());
    }

    public function upload()
    {
        echo view('components/header');
        echo view('components/upload_xml');
        echo view('components/footer');
    }

    public function importXML()
    {
        $files = $this->request->getFiles();
        $rawXml = $files['xml'];
        $path = $rawXml->getTempName();
        $torcedores = simplexml_load_file($path);
        foreach ($torcedores as $key => $torcedor) {
            $jsonTorcedor = json_encode($torcedor);    
            $arrayTorcedor = json_decode($jsonTorcedor, TRUE);
            $arrayTorcedorFinal = $arrayTorcedor['@attributes'];
            $arrayTorcedorFinal['ativo'] == 1 ? $arrayTorcedorFinal['ativo'] = 'SIM' : $arrayTorcedorFinal['ativo'] = 'NÃO';
            $this->fansModel->insert($arrayTorcedorFinal);
        }

        return redirect()->to(base_url());
    }
}
