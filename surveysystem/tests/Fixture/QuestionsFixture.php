<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionsFixture
 */
class QuestionsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-10-12 01:52:10',
                'modified' => '2022-10-12 01:52:10',
                'survey_id' => 1,
                'question_type_id' => 1,
            ],
        ];
        parent::init();
    }
}
