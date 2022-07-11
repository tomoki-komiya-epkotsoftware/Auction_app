<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BidinfoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BidinfoTable Test Case
 */
class BidinfoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BidinfoTable
     */
    protected $Bidinfo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Bidinfo',
        'app.Biditems',
        'app.Users',
        'app.Bidmessage',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Bidinfo') ? [] : ['className' => BidinfoTable::class];
        $this->Bidinfo = $this->getTableLocator()->get('Bidinfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Bidinfo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BidinfoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BidinfoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
