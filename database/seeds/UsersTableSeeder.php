<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Stop checking foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        //reset the users table
        DB::table('users')->truncate();

        //Generate 3 users/author
        DB::table('users')->insert([

            [
                'name'      => "Imrul Kais khan",
                'email'     => "imrulkk69@gmail.com",
                'password'  => bcrypt('levintech4969')
            ],

            [
                'name'      => "Niam Mussabbir",
                'email'     => "niam49@gmail.com",
                'password'  => bcrypt('NIAM....')
            ],

            [
                'name'      => "Joyanta Bonik Joy",
                'email'     => "jbjoy@gmail.com",
                'password'  => bcrypt('jbj69')
            ]

        ]);
    }
}
