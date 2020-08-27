<?php 
       // Classe que não pode ser herdada
    final class Filha extends Pai{
        public function mostrarOla() {
            echo 'Ola';
        }

        protected function funcaoTeste() {
            echo 'Chamando função teste';
        }
    }

    class Pai{
        public function mostrarTchau() {
            echo 'Tchau mundo';
            echo  '<hr>';
            $this->funcaoTeste();
        }
    }

    // $pai = new Pai();

    // $pai->mostrarTchau();

    $filha = new Filha();

    $filha->mostrarTchau();

    
?>