<?php

return [
    'App\Contracts\AuthService' => [
        'class' => 'App\Services\AuthServiceImpl',
        'shared' => false,
        'singleton' => true,
    ],
    'App\Contracts\BaseService' => [
        'class' => 'App\Services\BaseServiceImpl',
        'shared' => false,
        'singleton' => true,
    ],
    'App\Contracts\ExpenseService' => [
        'class' => 'App\Services\ExpenseServiceImpl',
        'shared' => false,
        'singleton' => true,
    ],
    'App\Contracts\ShopService' => [
        'class' => 'App\Services\ShopServiceImpl',
        'shared' => false,
        'singleton' => true,
    ],
    'App\Contracts\ProfitService' => [
        'class' => 'App\Services\ProfitServiceImpl',
        'shared' => false,
        'singleton' => true,
    ],
];
