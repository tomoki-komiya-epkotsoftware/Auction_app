<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BidrequestTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BidrequestTable Test Case
 */
class BidrequestTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BidrequestTable
     */
    protected $Bidrequest;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Bidrequest',
        'app.Biditems',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Bidrequest') ? [] : ['className' => BidrequestTable::class];
        $this->Bidrequest = $this->getTableLocator()->get('Bidrequest', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Bidrequest);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BidrequestTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BidrequestTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
