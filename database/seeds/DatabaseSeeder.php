<?php

use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (glob(base_path('database/articles/*.md')) as $filepath) {
            list($dummy, $meta, $contents) = explode("---\n", file_get_contents($filepath));
            $yamlMeta = Yaml::parse($meta);
            App\Post::create([
                'title' => $yamlMeta['title'],
                'content' => $contents,
            ]);
        }
    }
}
