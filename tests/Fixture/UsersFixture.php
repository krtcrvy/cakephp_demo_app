<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'gender' => 'Lorem ipsum dolor sit amet',
                'contact_number' => 'Lorem ipsum dolor ',
                'address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'zip_code' => 'Lorem ipsum dolor ',
                'country' => 'Lorem ipsum dolor sit amet',
                'marital_status' => 'Lorem ipsum dolor sit amet',
                'educational_status' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-12-04 10:20:32',
                'modified' => '2023-12-04 10:20:32',
            ],
        ];
        parent::init();
    }
}
