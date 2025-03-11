<?php

namespace Ruzai\Inspire;

use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Widgets\AccountWidget;

class InspireWidget extends AccountWidget implements HasActions, HasForms
{
    use InteractsWithActions;
    use InteractsWithForms;

    protected static string $view = 'greeter::widget';

    public function action()
    {
        return InspirePlugin::get()->getAction();
    }

    public static function canView(): bool
    {
        return InspirePlugin::get()->isVisible();
    }

    public static function getSort(): int
    {
        return InspirePlugin::get()->getSort();
    }

    public function getColumnSpan(): int | string | array
    {
        return InspirePlugin::get()->getColumnSpan();
    }
}
