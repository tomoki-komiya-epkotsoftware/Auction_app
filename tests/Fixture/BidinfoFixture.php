<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BidinfoFixture
 */
class BidinfoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'bidinfo';
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
                'biditem_id' => 1,
                'user_id' => 1,
                'price' => 1,
                'created' => '2022-07-11 15:19:24',
            ],
        ];
        parent::init();
    }
}
