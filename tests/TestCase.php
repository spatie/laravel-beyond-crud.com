<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Mix;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication,
        DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutExceptionHandling();

        $this->swap(Mix::class, function () {
            return '';
        });
    }

    protected function authenticate()
    {
        $user = User::factory()->create();

        $this->actingAs($user);
    }

    public function getJsonStubContent(string $payloadName): array
    {
        $path = __DIR__ . "/stubs/{$payloadName}.json";

        $content = file_get_contents($path);

        return json_decode($content, true);
    }
}
