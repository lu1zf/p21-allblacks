<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use \Config\Database;

class UpdateFansTable extends Migration
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function up()
    {
        $seeder = $this->db->seeder()->call('FansSeeder');
    }

    public function down()
    {
        $conn      = $this->db->connect();
        $builder = $conn->table('fans');
        $builder->emptyTable('fans');
    }
}
