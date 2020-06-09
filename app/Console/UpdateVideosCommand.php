<?php

namespace App\Console;

use App\Models\Chapter;
use App\Support\Vimeo\Vimeo;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class UpdateVideosCommand extends Command
{
    protected $signature = 'video-course:update-videos';

    protected $description = 'Update the videos with the latest from Vimeo.';

    public function handle(Vimeo $vimeo)
    {
        $this->info('Start updating videos...');

        $videos = collect($vimeo->getVideos());

        $currentChapterSlugs = array_flip(Chapter::all()->pluck('slug')->toArray());

        foreach (config('videos.chapters') as $sort => $chapter) {
            /** @var Chapter $chapterModel */
            $chapterModel = Chapter::firstOrCreate([
                'slug' => Str::slug($chapter['title']),
            ], [
                'title' => $chapter['title'],
                'sort' => $sort,
            ]);

            $currentVideoSlugs = array_flip($chapterModel->videos->pluck('slug')->toArray());

            foreach ($chapter['videos'] as $videoSort => $video_id) {
                $video = $videos->first(fn ($video) => $video['uri'] === '/videos/'.$video_id);
                $slug = Str::slug($video['name']);

                $this->comment("Imported Video: {$video['name']}");
                $chapterModel->videos()->updateOrCreate([
                    'vimeo_id' => $video_id,
                ], [
                    'slug' => $slug,
                    'title' => $video['name'],
                    'description' => $video['description'],
                    'sort' => $videoSort,
                    'runtime' => $video['duration'],
                    'thumbnail' => $video['pictures']['sizes'][1]['link'],
                ]);

                unset($currentVideoSlugs[$slug]);
            }

            unset($currentChapterSlugs[$chapterModel->slug]);

            $chapterModel->videos()->whereIn('slug', array_flip($currentVideoSlugs))->delete();
        }

        Chapter::whereIn('slug', array_flip($currentChapterSlugs))->delete();

        $this->info('All done!');
    }
}
