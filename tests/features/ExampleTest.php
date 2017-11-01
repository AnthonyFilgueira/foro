<?php

class ExampleTest extends FeatureTestCase
{

    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
        	'name'=>'Anthony Filgueira',
        	'email'=> 'anthonyfilgueira@hotmail.com'
        ]);

        $this->actingAs($user,'api')
             ->visit('api/user')
             ->see('Anthony Filgueira')
             ->see('anthonyfilgueira@hotmail.com');
    }
}
