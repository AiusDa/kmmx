<?php
    namespace App\controllers;

    class HomeController extends \App\Core\BaseController {
        public function getMessage() {
            return 'Some message';
        }
    }