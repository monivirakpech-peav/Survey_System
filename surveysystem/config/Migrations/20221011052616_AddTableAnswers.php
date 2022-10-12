<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddTableAnswers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('answers');
     
        $table->addColumn('question_id', 'integer');
        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => true,
        ]);
        
       
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
