<?php

return [
    'sitekey' => env('RECAPTCHA_SITE_KEY'),
    'secret' => env('RECAPTCHA_SECRET'),
    'options' => [
        'timeout' => 30,
    ],
];
