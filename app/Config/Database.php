<?php

namespace Config;

use CodeIgniter\Database\Config;

class Database extends Config
{
    public string $filesPath;

    public string $defaultGroup = 'default';

    public array $default = [];

    public array $tests = [
        'DSN'      => '',
        'hostname' => '127.0.0.1',
        'username' => '',
        'password' => '',
        'database' => ':memory:',
        'DBDriver' => 'SQLite3',
        'DBPrefix' => 'db_',
        'pConnect' => false,
        'DBDebug'  => true,
        'charset'  => 'utf8',
        'DBCollat' => '',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 3306,
        'foreignKeys' => true,
        'busyTimeout' => 1000,
        'dateFormat' => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
    ];

    public function __construct()
    {
        parent::__construct();

        $this->filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

        $this->default = [
            'DSN'      => '',
            'hostname' => env('database.default.hostname', 'localhost'),
            'port'     => env('database.default.port', 3306),
            'username' => env('database.default.username', ''),
            'password' => env('database.default.password', ''),
            'database' => env('database.default.database', ''),
            'DBDriver' => env('database.default.DBDriver', 'MySQLi'),
            'DBPrefix' => env('database.default.DBPrefix', ''),
            'pConnect' => false,
            'DBDebug'  => true,
            'charset'  => 'utf8mb4',
            'DBCollat' => 'utf8mb4_unicode_ci',
            'swapPre'  => '',
            'encrypt'  => false,
            'compress' => false,
            'strictOn' => false,
            'failover' => [],
            'numberNative' => false,
            'foundRows' => false,
            'dateFormat' => [
                'date'     => 'Y-m-d',
                'datetime' => 'Y-m-d H:i:s',
                'time'     => 'H:i:s',
            ],
        ];

        if (ENVIRONMENT === 'testing') {
            $this->defaultGroup = 'tests';
        }
    }
}
