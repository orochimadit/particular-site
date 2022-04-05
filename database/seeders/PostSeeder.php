<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createPosts();
    }
    private function createPosts()
    {
        $this->storePosts('Post 1  ',"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book,",rand(1,3));
        $this->storePosts('Post 2',"It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",rand(1,3));
        $this->storePosts('Post 3',"It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",rand(1,3));
    }

    private function storePosts($title,$description,$site_id)
    {
        if(!Post::where('title',$title)->get()->first()){
            \App\Models\Post::factory(Post::class)
            ->create([
                'title'      => $title,
                'description' =>$description,
                'site_id'      =>$site_id
            ]);
        }
    }
}
