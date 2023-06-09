<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;

class UsersChart extends BarChartWidget
{
    protected static ?string $heading = 'Users';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }
}
// protected function getData(): array
// {
//     $users = User::select('created_at')->get()->groupBy(function($users){
//         return Carbon::parse($users->created_at)->format('F');
//     });
//     $quantities = [];
//     foreach ($users as $user => $value) {
//         array_push($quantities, $value->count());
//     }
//     return [
        
//     ];
// }
