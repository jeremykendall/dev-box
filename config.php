<?php

$config = array(
    'slim' => array(
        'templates.path' => __DIR__ . '/templates',
        'log.level' => Slim\Log::DEBUG,
        'log.enabled' => true,
        'log.writer' => new Slim\Extras\Log\DateTimeFileWriter(
            array(
                'path' => __DIR__ . '/logs',
                'name_format' => 'y-m-d'
            )
        )
    ),
    'twig' => array(
        'charset' => 'utf-8',
        'cache' => realpath(__DIR__ . '/templates/cache'),
        'auto_reload' => true,
        'strict_variables' => false,
        'autoescape' => true
    ),
    'cookies' => array(
        'expires' => '20 minutes',
        'path' => '/',
        'domain' => null,
        'secure' => true,
        'httponly' => false,
        'name' => 'slim_session',
        'secret' => 'CHANGE THIS SECRET',
        'cipher' => MCRYPT_RIJNDAEL_256,
        'cipher_mode' => MCRYPT_MODE_CBC
    ),
);

return $config;
