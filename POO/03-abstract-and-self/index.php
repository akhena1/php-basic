<?php 
    abstract class Teste{
        public function func1() {
            echo 'Chamando função 1';
        }

        abstract function func2();
    }

    class Principal extends Teste{
        public function func2() {
            echo 'estou declarando oficialmente um método abstrato';
        }

        public static function staticMethod(){
            echo 'metodo estático';
        }

        public function funcao() {
            self::staticMethod();
        }
    }

    $principal = new  Principal();
    $principal->funcao();

    // Principal::staticMethod();

    // $principal->func1();
    // $principal->func2();
?>