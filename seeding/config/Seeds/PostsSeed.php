<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
{
    
    public function run(): void
    {
        //$data = [];

        $table = $this->table('posts');


      for($i=0;$i<10;$i++){

         $data = [
             ["title" => "title".$i, "description" => "This is desc post.".$i]
         ];

           $table->insert($data)->save();
        } 
    }
}
