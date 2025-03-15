<?php

namespace Ruzai\Inspire;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InspirePluginServiceProvider extends PackageServiceProvider
{
    public static string $name = 'inspire-widget';

    public static string $viewNamespace = 'inspire-widget';

    public function configurePackage(Package $package): void
    {
        $package
            ->name('ruzai-inspire-plugin');
    }

    public function packageBooted(): void
    {
        if (!view()->exists('inspire-widget::widgets.inspire')) {
            dd('View not found: inspire-widget::widgets.inspire');
        }
    }
}