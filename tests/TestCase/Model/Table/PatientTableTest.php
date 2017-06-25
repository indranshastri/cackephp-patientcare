<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PatientTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PatientTable Test Case
 */
class PatientTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PatientTable
     */
    public $Patient;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.patient',
        'app.carriers',
        'app.appointments',
        'app.invoices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Patient') ? [] : ['className' => PatientTable::class];
        $this->Patient = TableRegistry::get('Patient', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Patient);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
