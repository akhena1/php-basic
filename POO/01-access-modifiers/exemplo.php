<?php 
    class Exemplo
    {
        private $var1;
        public $var2;

        public static $var3 =  'static';

        public static function metodoEstatico() {
            echo 'static method';
        }

        public function setVar1($var1){
            $this->var1 = $var1;
        }
        public function getVar1(){
            return $this->var1;
        }
    }
?>