<?php

return [
    'name' => 'Store',
    'email' => [
        'store_name' => 'Store name',
        'store_new_order_title' => 'Send order to store',
        'store_new_order_description' => 'Send email to store when a customer an order placed',
    ],
    'current_balance' => 'Current balance',
    'settings' => [
        'name' => 'Settings',
        'title' => 'Settings for store',
        'description' => '...',
        'fee_per_order' => 'Fee per order (%), suggest: 2 or 3',
        'fee_withdrawal' => 'Fee withdrawal (Fixed amount)',
        'check_valid_signature' => 'Check valid signature in vendor\'s earnings',
    ],
    'theme_options' => [
        'name' => 'Store',
        'description' => 'Theme options for Store',
        'logo_vendor_dashboard' => 'Logo in the vendor dashboard (Default is the main logo)',
    ],
];
