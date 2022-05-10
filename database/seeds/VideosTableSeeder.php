<?php

use Illuminate\Database\Seeder;
use App\Video;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = [
            [
                "titolo" => "La Vangata",
                "slug" => "La-Vangata-1",
                "commenti" => "Il pescatore di frodo ep.2",
                "anno" => "2018",
                "url" => "mBsioqGNIxI"
            ],
            [
                "titolo" => "Nulla",
                "slug" => "Nulla",
                "commenti" => "",
                "anno" => "2021",
                "url" => "EYtgCTB-fD0"
            ]
        ];

        foreach($videos as $video) {
            $newVideo = new Video();
            $newVideo->titolo = $video["titolo"];
            $newVideo->slug = $video["slug"];
            $newVideo->commenti = $video["commenti"];
            $newVideo->anno = $video["anno"];
            $newVideo->url = $video["url"];
            $newVideo->save();
        }
    }
}
