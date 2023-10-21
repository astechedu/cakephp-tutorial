<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Emps seed.
 */
class EmpsSeed extends AbstractSeed
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
        $data = ['name' => 'ajay', 'address' => 'address1'];

        $table = $this->table('emps');
        $table->insert($data)->save();
    }
}
