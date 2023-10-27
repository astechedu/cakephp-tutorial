<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Students seed.
 */
class StudentsSeed extends AbstractSeed
{
    
    public function run(): void
    {
        /*
        $data = [
            ["name" => "ajay", "description" => "This is desc1."],
            ["name" => "amit", "description" => "This is desc2."],
        ];
        */

        $table = $this->table('students');

      for($i=0;$i<10;$i++){

         $data = [
             ["name" => "user".$i, "description" => "This is desc.".$i]
         ];

        $table->insert($data)->save();
      }
        

    }
}
