<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'J.K. Rowling',
            'birthdate' => '1965-07-31',
        ]);
        Author::create([
            'name' => 'Stephen King',
            'birthdate' => '1947-09-21',
        ]);
        Author::create([
            'name' => 'George R.R. Martin',
            'birthdate' => '1948-09-20',
        ]);
        Author::create([
            'name' => 'Suzanne Collins',
            'birthdate' => '1962-08-10',
        ]);
        Author::create([
            'name' => 'Rick Riordan',
            'birthdate' => '1964-06-05',
        ]);
        Author::create([
            'name' => 'Veronica Roth',
            'birthdate' => '1988-08-19',
        ]);
        Author::create([
            'name' => 'James Dashner',
            'birthdate' => '1972-11-26',
        ]);
        Author::create([
            'name' => 'Cassandra Clare',
            'birthdate' => '1973-07-27',
        ]);
        Author::create([
            'name' => 'Sarah J. Maas',
            'birthdate' => '1986-03-05',
        ]);
        Author::create([
            'name' => 'Leigh Bardugo',
            'birthdate' => '1975-04-06',
        ]);
    }
}
