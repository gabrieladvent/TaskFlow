<?php // config/flasher.php

return [
    'plugins' => [
        'toastr' => [
            'scripts' => [
                '/vendor/flasher/jquery.min.js',
                '/vendor/flasher/toastr.min.js',
                '/vendor/flasher/flasher-toastr.min.js',
            ],
            'styles' => [
                '/vendor/flasher/toastr.min.css',
            ],
            'options' => [
                // Optional: Add global options here
                // 'closeButton' => true
            ],
        ],
    ],
];

/*
 * This file is part of the yoeunes/toastr package.
 * (c) Younes KHOUBZA <younes.khoubza@gmail.com>
 */

return array(
    'scripts' => array(
        'cdn' => array(
            'https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js',
            'https://cdn.jsdelivr.net/npm/@flasher/flasher-toastr@1.2.4/dist/flasher-toastr.min.js',
        ),
        'local' => array(
            '/vendor/flasher/jquery.min.js',
            '/vendor/flasher/flasher-toastr.min.js',
        ),
    ),
);
