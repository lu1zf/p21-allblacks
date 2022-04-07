<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use App\Models\FansModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class FansSeeder extends Seeder
{
    private $xlsx;
    private $fansModel;

    function __construct()
    {
        $this->xlsx = new Xlsx();
        $this->fansModel = new FansModel();
    }

    public function run()
    {
        $path = WRITEPATH . 'uploads/clientes.xlsx';
        $this->xlsx->setReadDataOnly(true);
        $spreadsheet = $this->xlsx->load($path);
        $fansData = $spreadsheet->getActiveSheet()->toArray();
        array_shift($fansData);
        foreach ($fansData as $fanData) {
            $data = [
                'nome' => $fanData[0],
                'documento' => $fanData[1],
                'cep' => $fanData[2],
                'endereco' => $fanData[3],
                'bairro' => $fanData[4],
                'cidade' => $fanData[5],
                'uf' => $fanData[6],
                'telefone' => $fanData[7],
                'email' => $fanData[8],
                'ativo' => $fanData[9],
            ];

            $this->fansModel->insert($data);
        }
    }
}
