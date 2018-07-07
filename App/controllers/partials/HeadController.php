<?php
    namespace App\controllers\partials;

    class HeadController extends \App\Core\BaseController {
        private $_title = 'Title';
        private $_description = 'Description';

        public function getTitle(): string {
            return $this->_title;
        }

        public function getDescription(): string {
            return $this->_description;
        }
    }
