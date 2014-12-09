<?php

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'moonyy@abv.bg',
            'username' => 'FamousCake',
            'password' => '$2y$10$t.TjM2vcJsoWI9uC0soeM.DLd.ZJ59vdhG4edfHmkVy.BTXuNcJCa'
        ));

        User::create(array(
            'email' => 'EpicBro@epic.com',
            'username' => 'someoneUnimportatn',
            'password' => '$2y$10$t.TjM2vcJsoWI9uC0soeM.DLd.ZJ59vdhG4edfHmkVy.BTXuNcJCa'
        ));

        User::create(array(
            'email' => 'suchEmail',
            'username' => 'someone',
            'password' => '$2y$10$t.TjM2vcJsoWI9uC0soeM.DLd.ZJ59vdhG4edfHmkVy.BTXuNcJCa'
        ));
    }

}