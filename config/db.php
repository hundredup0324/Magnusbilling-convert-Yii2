<?php


return [
    'class'    => 'yii\db\Connection',
    'dsn'      => 'mysql:host=127.0.0.1;dbname=mbilling7',
    'username' => 'root',
    'password' => '',
    'charset'  => 'utf8',
    'attributes'       => [
        PDO::MYSQL_ATTR_LOCAL_INFILE => true,
    ],
    'enableSchemaCache' => false,
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
