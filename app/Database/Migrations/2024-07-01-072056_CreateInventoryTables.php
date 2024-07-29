<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInventoryTables extends Migration
{
    public function up()
    {
        // Create location table
        $this->forge->addField([
            'CategoryID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'CategoryName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('CategoryID', true);
        $this->forge->createTable('Categories');

        // Create Locations table
        $this->forge->addField([
            'LocationID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'LocationName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'LocationDescription' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('LocationID', true);
        $this->forge->createTable('Locations');

        // Create items table
        $this->forge->addField([
            'ItemID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ItemName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'CategoryID' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'LocationID' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'Quantity' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'PurchaseDate' => [
                'type' => 'DATE',
            ],
            'Price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
        ]);
        $this->forge->addKey('ItemID', true);
        $this->forge->addForeignKey('CategoryID', 'Categories', 'CategoryID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('LocationID', 'Locations', 'LocationID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Items');

        // Create InventoryTransactions table
        $this->forge->addField([
            'TransactionID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ItemID' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'TransactionType' => [
                'type'       => 'ENUM',
                'constraint' => ['IN', 'OUT'],
            ],
            'TransactionDate' => [
                'type' => 'DATE',
            ],
            'Quantity' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'Remarks' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('TransactionID', true);
        $this->forge->addForeignKey('ItemID', 'Items', 'ItemID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('InventoryTransactions');
    }

    public function down()
    {
        $this->forge->dropTable('InventoryTransactions');
        $this->forge->dropTable('Items');
        $this->forge->dropTable('Locations');
        $this->forge->dropTable('Categories');
    }
}
