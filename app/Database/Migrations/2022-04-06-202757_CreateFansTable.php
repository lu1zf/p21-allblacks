<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFansTable extends Migration
{
    public function up()
	{
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
				'constraint' => '255',
            ],
            'documento' => [
                'type' => 'VARCHAR',
				'constraint' => '50',
            ],
            'cep' => [
                'type' => 'INT',
                'constraint' => 8,
            ],
            'endereco' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'bairro' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'cidade' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'uf' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'ativo' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'created_at datetime not null default current_timestamp()',
            'updated_at datetime not null default current_timestamp()',
        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('fans', TRUE);
	}

	public function down()
	{
        $this->forge->dropTable('fans');
	}
}
