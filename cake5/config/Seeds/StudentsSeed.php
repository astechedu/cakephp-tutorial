<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Students seed.
 */
class StudentsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            ["name" => "ajay", "description" => "This is desc1.","created"=>now(),"modified"=>now()],
            ["name" => "amit", "description" => "This is desc2.","created"=>now(),"modified"=>now()],
        ];

        $table = $this->table('students');
        $table->insert($data)->save();
    }
}
