<?php



namespace Database\Factories;

use App\Models\Chapter;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'chapter_id' => Chapter::factory(),
        'vimeo_id' => $this->faker->unique()->randomNumber(),
        'title' => $this->faker->word,
        'slug' => $this->faker->slug,
        'description' => $this->faker->paragraph,
        'sort' => $this->faker->numberBetween(0, 10),
        'runtime' => $this->faker->numberBetween(100, 500),
        'thumbnail' => $this->faker->imageUrl(),
    ];
    }
}
