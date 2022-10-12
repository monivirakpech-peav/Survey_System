<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionTypesTable Test Case
 */
class QuestionTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionTypesTable
     */
    protected $QuestionTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.QuestionTypes',
        'app.Questions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('QuestionTypes') ? [] : ['className' => QuestionTypesTable::class];
        $this->QuestionTypes = $this->getTableLocator()->get('QuestionTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->QuestionTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\QuestionTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
