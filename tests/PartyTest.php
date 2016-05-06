<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PartyTest extends TestCase
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
  /*
    public function testNewPartyRegistration()
    {
        $this->visit('/parties/create')
            ->type('7', 'partyid')
            ->type('ASKP', 'partyname')
            ->type('moon', 'partysymbol')
            ->press('ADD')
            ->seePageIs('/parties');
    } 
*/
    public function testPartiesDatabase()
    {
        // Make call to application...

        $this->seeInDatabase('parties', ['partyname' => 'BJP']);
    }
}
