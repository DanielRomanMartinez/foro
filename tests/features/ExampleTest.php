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

        $user = factory(\App\User::class)->create([
            'name' => 'Dani Roman',
            'email' => 'admin@dani.com'
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Dani Roman')
            ->see('admin@dani.com');
    }
}
