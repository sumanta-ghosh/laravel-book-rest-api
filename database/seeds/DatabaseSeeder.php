<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 10)->create()->each(function ($u) {
            factory(App\Book::class, 15)->create(['user_id' => $u->id])->each(function($book) use($u) {
                factory(App\Rating::class, 5)->create(['user_id' => $u->id, 'book_id' => $book->id]);
            });
        });
    }

}
