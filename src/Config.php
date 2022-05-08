<?php
namespace App;
class Config
{
    public static function getConfig(){
        $config['displayErrorDetails'] = true;
        $config['addContentLengthHeader'] = false;

        $config['db']['host']   = 'localhost';
        $config['db']['user']   = 'Intra';
        $config['db']['pass']   = 'work';
        $config['db']['dbname'] = 'db1';
        return $config;
    }
}