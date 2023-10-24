<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/admin');
            $browser->screenshot('dkkddkdkd');
            $browser
                ->type('email', '3eddk2@mail.com')
                ->type('password', 'password')
                ->press('Login')
                ->assertPathIs('/home');
        });
    }
}
