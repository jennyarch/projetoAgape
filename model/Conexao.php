<?php

class Conexao  {
    public static $instance;

    public static function get_instance(){
        if(!isset(self::$instance)){
            try{
                
                $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF-8');
            
                self::$instance = new PDO("mysql:host=localhost;dbname=syscadastro", "root",  );
                /* self::$instance = new PDO($host, $dbname, $dbusername, $dbpassword); */
                    }catch(PDOException $err){
                        print $err->getMessage();
                    }
                    return self::$instance;
                }
        }
        
    }

