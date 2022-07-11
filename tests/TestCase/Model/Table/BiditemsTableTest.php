<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BiditemsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BiditemsTable Test Case
 */
class BiditemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BiditemsTable
     */
    protected $Biditems;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Biditems',
        'app.Users',
        'app.Bidinfo',
        'app.Bidrequest',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Biditems') ? [] : ['className' => BiditemsTable::class];
        $this->Biditems = $this->getTableLocator()->get('Biditems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Biditems);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BiditemsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BiditemsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
