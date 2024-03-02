<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Retrieve the Git tag
        $gitTag = exec('git describe --tags --abbrev=0');

        // Share $gitTag with all views
        view()->share('gitTag', $gitTag);

        // You can also use Blade directives to create more dynamic content
        Blade::directive('gitTag', function () {
            return "<?php echo htmlentities(\$gitTag); ?>";
        });
    }
}
