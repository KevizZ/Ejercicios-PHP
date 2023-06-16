<?php class Alumno {
        private $nombre;
        private $apellido ;
        private $email ;
        private $dir;

        public function  __construct($nombre, $apellido,$email,$dir)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->email = $email;
            $this->dir = $dir;
        }
        
        public function getNombre() {
            return $this->nombre;
        }

        public function getApellido() {
            return $this->apellido;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getDireccion() {
            return $this->dir;
        }
    }
?>