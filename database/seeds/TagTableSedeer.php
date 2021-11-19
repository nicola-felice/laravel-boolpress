<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['frontend', 'backend', 'algorithms', 'data-structures', 'OOP'];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->save();
        }
    }
}
