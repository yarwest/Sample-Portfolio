<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PortfolioItemSeeder::class);
    }
}

class UserSeeder extends Seeder
{
    /**
     * Run the User seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=>'admin',
            'password'=>Hash::make('admin01'),
            'email'=>'yarnoboelens@gmail.com'
        ]);
    }

}

class PortfolioItemSeeder extends Seeder
{
    /**
     * Run the Portfolio Item seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PortfolioItem::create([
            'title'=>'Dark Fantasy',
            'description'=>'This cake is the dream of every chocolate lover',
            'image'=>'dark_fantasy'
        ]);

        \App\PortfolioItem::create([
            'title'=>'Strawberry Paradise',
            'description'=>'This is a tropical coctail with strawberry as its main ingredient',
            'image'=>'strawberry_paradise'
        ]);

        \App\PortfolioItem::create([
            'title'=>'Angels Dream',
            'description'=>'A piece of heaven for every white chocolate enthausiast',
            'image'=>'angels_dream'
        ]);

        \App\PortfolioItem::create([
            'title'=>'Sweet Surprise',
            'description'=>'A fresh lemon cake for everyone that likes it to be sweet',
            'image'=>'sweet_surprise'
        ]);
    }

}
