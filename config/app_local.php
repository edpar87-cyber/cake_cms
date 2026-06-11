<?php
declare(strict_types=1);

use function Cake\Core\env;

/*
 * Local configuration file to provide any overrides to your app.php configuration.
 * Copy and save this file as app_local.php and make changes as required.
 * Note: It is not recommended to commit files with credentials such as app_local.php
 * into source code version control.
 */
return [
    /*
     * Debug Level:
     *
     * Production Mode:
     * false: No error messages, errors, or warnings shown.
     *
     * Development Mode:
     * true: Errors and warnings shown.
     */
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    /*
     * Security and encryption configuration
     *
     * - salt - A random string used in security hashing methods.
     *   The salt value is also used as the encryption key.
     *   You should treat it as extremely sensitive data.
     */
    'Security' => [
        'salt' => env('SECURITY_SALT', '036302959d632f36aac8fd061764f7d1f376128f86c6723f6e7877ea78ba0103'),
    ],

    /*
     * Connection information used by the ORM to connect
     * to your application's datastores.
     *
     * See app.php for more configuration options.
     */
    'Datasources' => [
    'default' => [
        'className' => \Cake\Database\Connection::class,
        'driver' => \Cake\Database\Driver\Mysql::class,
        'persistent' => false,

        'host' => 'mysql.railway.internal',
        'port' => '3306',
        'username' => 'root',
        'password' => 'rGPBoBQWdbHhqLGRXWqzmXHJFMYtMprD',
        'database' => 'railway',

        'encoding' => 'utf8mb4',
        'timezone' => 'UTC',
        'flags' => [],
        'cacheMetadata' => true,
        'quoteIdentifiers' => false,
        ],

        /*
         * The test connection is used during the test suite.
         */
        'test' => [
            'host' => env('MYSQL_TEST_HOST', 'localhost'),
            //'port' => 'non_standard_port_number',
            'username' => env('MYSQL_TEST_USER', 'root'),
            'password' => env('MYSQL_TEST_PASSWORD', ''),
            'database' => env('MYSQL_TEST_DATABASE', 'cake_cms'),
            //'schema' => 'myapp',
            'port' => env('MYSQL_TEST_PORT', '3306'),
            //'url' => env('DATABASE_TEST_URL', 'sqlite://127.0.0.1/tmp/tests.sqlite'),
        ],
    ],

    /*
     * Email configuration.
     *
     * Host and credential configuration in case you are using SmtpTransport
     *
     * See app.php for more configuration options.
     */
    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
