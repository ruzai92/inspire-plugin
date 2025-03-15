<?php

namespace Ruzai\Inspire;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InspirePluginServiceProvider extends PackageServiceProvider
{
    public static string $name = 'inspire';

    public static string $viewNamespace = 'inspire';

    public function configurePackage(Package $package): void
    {
        $package
            ->name('ruzai-inspire-plugin');
    }

    public function packageBooted(): void
    {
        Livewire::component('inspire-widget', InspireWidget::class);
    }
}