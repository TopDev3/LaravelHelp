<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\File;
use Tests\TestCase;

class StaticSiteBuildTest extends TestCase
{
    private string $output;

    protected function setUp(): void
    {
        parent::setUp();

        $this->output = sys_get_temp_dir().'/laravelhelp-build-'.uniqid();
    }

    protected function tearDown(): void
    {
        File::deleteDirectory($this->output);

        parent::tearDown();
    }

    public function test_build_publishes_crawler_and_agent_entry_points(): void
    {
        $this->artisan('site:build', ['--base' => 'https://laravelhelp.com', '--output' => $this->output])
            ->assertSuccessful();

        $robots = File::get($this->output.'/robots.txt');
        $this->assertStringContainsString('Allow: /', $robots);
        $this->assertStringContainsString('Sitemap: https://laravelhelp.com/sitemap.xml', $robots);

        $sitemap = simplexml_load_string(File::get($this->output.'/sitemap.xml'));
        $this->assertSame('https://laravelhelp.com/', (string) $sitemap->url->loc);

        $llms = File::get($this->output.'/llms.txt');
        $this->assertStringStartsWith('# LaravelHelp', $llms);
        $this->assertStringContainsString('https://cal.com/laravel-help/30min', $llms);
    }
}
