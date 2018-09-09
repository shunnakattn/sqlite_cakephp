<?php
use Migrations\AbstractMigration;

class Tasks extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('tasks');
        $table
            ->addColumn('title', 'string')
            ->addColumn('created', 'datetime')
            ->create();
    }
}
