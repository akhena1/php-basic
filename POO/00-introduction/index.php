<?php 
    class Pessoa {

        private $nome = 'Gustavo';
        private $idade = 20;
        private $peso = '70kg';

        public function crescer() {
            $this->comer();
            echo ' estou crescendo';
        }

        private function comer(){
            echo 'estou comendo ';
        } 
    }

    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();
?>