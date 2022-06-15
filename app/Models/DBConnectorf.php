<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DBConnectorf extends Model
{
    const DB_HOSTNAME = '127.0.0.1';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = 'ABBAR2D2Rq1!';
    const DB_NAME = 'PhotoCourses';

    private static $instance;

    private function construct()
    {
    }
    private function __clone()
    {
    }
    public function __sleep()
    {
    }
    public function __wakeup()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__; //создает инстантс своего же класса
            self::$instance = new $c;
        }
        return self::$instance;
    }

    public function connect()
    {
        $db = mysqli_connect(self::DB_HOSTNAME, self::DB_USERNAME, self::DB_PASSWORD, self::DB_NAME);

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        return $db;
    }

}