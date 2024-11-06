<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'author_id' => 1,
            'published_year' => 1997,
        ]);
        Book::create([
            'title' => 'Harry Potter and the Chamber of Secrets',
            'author_id' => 1,
            'published_year' => 1998,
        ]);
        Book::create([
            'title' => 'Harry Potter and the Prisoner of Azkaban',
            'author_id' => 1,
            'published_year' => 1999,
        ]);
        Book::create([
            'title' => 'Harry Potter and the Goblet of Fire',
            'author_id' => 1,
            'published_year' => 2000,
        ]);
        Book::create([
            'title' => 'Harry Potter and the Order of the Phoenix',
            'author_id' => 1,
            'published_year' => 2003,
        ]);
        Book::create([
            'title' => 'Harry Potter and the Half-Blood Prince',
            'author_id' => 1,
            'published_year' => 2005,
        ]);
        Book::create([
            'title' => 'Harry Potter and the Deathly Hallows',
            'author_id' => 1,
            'published_year' => 2007,
        ]);
        Book::create([
            'title' => 'Fantastic Beasts and Where to Find Them',
            'author_id' => 1,
            'published_year' => 2001,
        ]);
        Book::create([
            'title' => 'Quidditch Through the Ages',
            'author_id' => 1,
            'published_year' => 2001,
        ]);
        Book::create([
            'title' => 'The Tales of Beedle the Bard',
            'author_id' => 1,
            'published_year' => 2008,
        ]);
    }
}
