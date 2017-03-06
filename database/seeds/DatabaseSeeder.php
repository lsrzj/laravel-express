<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        factory('App\User')->create(
            [
                'name' => 'admin',
                'email' => 'admin@larablog.com',
                'password' => bcrypt('123456'),
                'remember_token' => str_random(10),
            ]
        );
        
        $user = App\User::find(1);
        Auth::login($user);
        
        $this->call('PostsTableSeeder');
        $this->call('TagTableSeeder');        
        $this->call('PostsTagsTableSeeder');
        $this->call('CommentsTableSeeder');

        Model::reguard();
    }

}
