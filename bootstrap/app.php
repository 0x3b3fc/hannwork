<?php

use Hannwork\Bootstrap\App;

class Application{
    /*
    * Application Constructor
     *
    */
    private function __construct(){}

    /*
     * Run the application
     *
     * @return void
     * */
    public static function run()
    {
        /*
         * define root path
         * */
        define('ROOT',realpath(__DIR__.'/..'));
        /*
         * directory separator
         * */
        define('DS',DIRECTORY_SEPARATOR);

        /*
         * Run the application
         * */
        App::run();
    }
}