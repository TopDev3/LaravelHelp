<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

class BuildStaticSite extends Command
{
    protected $signature = 'site:build {--base=https://laravelhelp.com : Absolute base URL the generated site will be served from}
                                        {--output= : Directory to write the static site into (defaults to dist/)}';

    protected $description = 'Render the landing page into a static site ready for GitHub Pages';

    public function handle(): int
    {
        $base = rtrim((string) $this->option('base'), '/');
        $output = $this->option('output') ?: base_path('dist');

        // Make url()/asset() resolve against the deployment domain, not the request.
        config(['app.url' => $base]);
        URL::forceScheme(parse_url($base, PHP_URL_SCHEME) ?: 'https');
        URL::forceRootUrl($base);

        File::deleteDirectory($output);
        File::ensureDirectoryExists($output);

        // 1. The single page.
        File::put($output.'/index.html', View::make('welcome')->render());

        // 2. Static assets shipped in public/.
        File::copyDirectory(public_path('assets'), $output.'/assets');
        File::copy(public_path('favicon.ico'), $output.'/favicon.ico');

        // 3. The CV, served as /cv.pdf (a real file on a static host).
        File::copy(resource_path('files/Andres-Pineda-CV.pdf'), $output.'/cv.pdf');

        // 4. GitHub Pages plumbing.
        File::put($output.'/CNAME', 'laravelhelp.com');
        File::put($output.'/.nojekyll', '');

        $this->info("Static site built at {$output} (base: {$base})");

        return self::SUCCESS;
    }
}
