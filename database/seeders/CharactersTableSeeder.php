<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Character;
use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config("db_lotr");
        // dd($data);
        foreach ($data as $item) {
            $newCharacter = new Character();
            $newCharacter->name = $item['name'];
            $newCharacter->wikiUrl = $item['wikiUrl'] ?? null;
            $newCharacter->race = $item['race'] ?? null;
            $newCharacter->birth = $item['birth'] ?? null;
            $newCharacter->gender = $item['gender'] ?? null;
            $newCharacter->death = $item['death'] ?? null;
            $newCharacter->hair = $item['hair'] ?? null;
            $newCharacter->height = $item['height'] ?? null;
            $newCharacter->realm = $item['realm'] ?? null;
            $newCharacter->spouse = $item['spouse'] ?? null;
            $newCharacter->save();
        }
    }
}
