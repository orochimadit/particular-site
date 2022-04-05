<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Site;
class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $this->createSites();
    }
    private function createSites()
    {
        $this->storeSites('Title 1  ',"https://www.google.com/",);
        $this->storeSites('Title 2',"https://id.yahoo.com/");
        $this->storeSites('Title 3',"https://www.bing.com/");
    }

    private function storeSites($title,$link)
    {
        if(!Site::where('title',$title)->get()->first()){
            \App\Models\Site::factory(Site::class)
            ->create([
                'title'      => $title,
                'link' =>$link,
            ]);
        }
    }
}
