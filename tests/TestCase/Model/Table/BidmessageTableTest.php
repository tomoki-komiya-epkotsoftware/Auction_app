<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BidmessageTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BidmessageTable Test Case
 */
class BidmessageTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BidmessageTable
     */
    protected $Bidmessage;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Bidmessage',
        'app.Bidinfos',
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
        $config = $this->getTableLocator()->exists('Bidmessage') ? [] : ['className' => BidmessageTable::class];
        $this->Bidmessage = $this->getTableLocator()->get('Bidmessage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Bidmessage);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BidmessageTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BidmessageTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
