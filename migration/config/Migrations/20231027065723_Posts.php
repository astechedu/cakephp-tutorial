<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Posts extends AbstractMigration
{
    
    public function change(): void
    {
        $table = $this->table('posts');

        $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 255,
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
