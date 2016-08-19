<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $user1 = new App\User();
    $user1->email = 'user1@codeup.com';
    $user1->name = 'Jay';
    $user1->password = Hash::make('randomnumber89345');
    $user1->save();

    $user2 = new App\User();
    $user2->email = 'user2@codeup.com';
    $user2->name = 'Alison';
    $user2->password = Hash::make('somethingsomething3432');
    $user2->save();

    $user3 = new App\User();
    $user3->email = 'user3@codeup.com';
    $user3->name = 'Bob';
    $user3->password = Hash::make('morenumbers73845');
    $user3->save();

    $user4 = new App\User();
    $user4->email = 'user4@codeup.com';
    $user4->name = 'Matt';
    $user4->password = Hash::make('blahblahblah8977');
    $user4->save();

    $user5 = new App\User();
    $user5->email = 'user5@codeup.com';
    $user5->name = 'Alex';
    $user5->password = Hash::make('weakpassword');
    $user5->save();

    $user6 = new App\User();
    $user6->email = 'user6@codeup.com';
    $user6->name = 'Erik';
    $user6->password = Hash::make('readcanismajor');
    $user6->save();

    $user7 = new App\User();
    $user7->email = 'user7@codeup.com';
    $user7->name = 'Max';
    $user7->password = Hash::make('readbookofsuburbia');
    $user7->save();

    $user8 = new App\User();
    $user8->email = 'user8@codeup.com';
    $user8->name = 'Amy';
    $user8->password = Hash::make('reademilysmilesforapril');
    $user8->save();

    $user9 = new App\User();
    $user9->email = 'user9@codeup.com';
    $user9->name = 'Kathy';
    $user9->password = Hash::make('readtheslathering');
    $user9->save();

    $user10 = new App\User();
    $user10->email = 'user10@codeup.com';
    $user10->name = 'Rebecca';
    $user10->password = Hash::make('readmonkeybars');
    $user10->save();
        //
    }
}
