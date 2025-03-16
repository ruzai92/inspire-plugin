<?php

namespace Ruzai\Inspire;

use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InspirePluginServiceProvider extends PackageServiceProvider
{
    public static string $name = 'inspire';

    public static string $viewNamespace = 'inspire';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews(static::$viewNamespace);

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }
    }

    public function packageBooted(): void
    {
        Livewire::component('inspire-widget', InpsireWidget::class);
    }
}
