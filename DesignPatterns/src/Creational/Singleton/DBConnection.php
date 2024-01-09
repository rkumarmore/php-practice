<?php

namespace App\Creational\Singleton;
// class DB{
//     private static $_instance = null;
//     private $_pdo;

//             private function __construct(){
//                 try{
//                     $this->_pdo = new PDO('mysql:host ='yourhost'; dbname = 'your_database','username','password);
//                     echo 'connected';

//                 }catch(PDOException $e){
//                     die($e->getMessage());
//                 }
//             }
//           public static function getInstance(){
//               if(!isset(self::$_instance)){
//                   self::$_instance = new DB();
//         }
//         return self::$_instance; 
//          }
// }

class DBConnection
{
    /**
     * Returns the *Singleton* instance of this class.
     *
     * @staticvar Singleton $instance The *Singleton* instances of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}

class SingletonChild extends DBConnection
{
}

$obj = DBConnection::getInstance();
var_dump($obj === DBConnection::getInstance());             // bool(true)

$anotherObj = SingletonChild::getInstance();
var_dump($anotherObj === DBConnection::getInstance());      // bool(false)

var_dump($anotherObj === SingletonChild::getInstance()); // bool(true)
