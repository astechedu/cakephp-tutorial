<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Students extends AbstractMigration
{

    public function change(): void
    {
        $table = $this->table('students');

        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => true,
        ]);           
        $table->create();     
    }
}
