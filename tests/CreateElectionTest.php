<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateElectionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testBasicExample()
    {
        $this->visit('/elections/create')
            ->select('2016', 'year')
            ->select('State', 'status')
            ->select('West Bengal', 'state')
            ->type('2016-05-11', 'start')
            ->type('2016-05-13', 'end')
            ->press('Create')
            ->seePageIs('/elections');
    }
   
     /*  public function testNewElectionCreate()
       {
           $this->visit('/elections/create')
               ->select('2016', 'year')
               ->select('State', 'status')
               ->select('West Bengal', 'state')
               ->type('2016-05-11', 'start')
               ->type('2016-05-13', 'end')
               ->press('Create')
               ->seePageIs('/elections');
       } 
*/
    public function testElectiosDatabase()
    {
        // Make call to application...

        $this->seeInDatabase('elections', ['state' => 'bihar']);
    }
}
