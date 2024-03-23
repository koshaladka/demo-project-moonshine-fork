<?php

namespace App\MoonShine\Fields;

use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Field;

class ItemAmount extends Field
{
protected static string $view = 'moonshine.fields.item-amount';

protected bool $group = true;

public function formViewValue(Model $item): mixed
{
    return [
        'amount' => $item->id,
        'qty' => $item->id,
    ];
}

public function indexViewValue(Model $item, bool $container = true): string
{
    return view('moonshine::ui.table', [
        'columns' => [
            'amount' => 'Сумма',
            'qty' => 'Кол-во',
            'sum' => 'Итого',
        ],
        'values' => [
            [
                'amount' => $item->id,
                'qty' => $item->id,
                'sum' => 2000,
            ]
        ]
    ])->render();
}

}
