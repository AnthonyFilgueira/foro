<?php

class ExampleTest extends FeatureTestCase
{
   
    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user,'api')
             ->visit('api/user')
             ->see('Anthony Filgueira')
             ->see('anthonyfilgueira@hotmail.com');
    }
}
