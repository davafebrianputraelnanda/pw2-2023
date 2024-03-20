<?php
    class Elektronik {
        protected $tipe;
        protected $merek;

        protected function __construct($tipe, $merek) {
            $this->tipe = $tipe;
            $this->merek = $merek;
        }

        protected function getInfo() {
            echo "Jenis Elektronik: " . $this->tipe . "<br>";
            echo "Jenis Merek: " . $this->merek . "<br>";
        }
    }

    class AC extends Elektronik {
        public $Uk;

        public function __construct($tipe, $merek, $Uk) {
            parent::__construct($tipe, $merek);
            $this->Uk = $Uk;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Ukuran: " . $this->Uk . "<br>";
        }
    }

    class Handphone extends Elektronik {
        public $stok;

        public function __construct($tipe, $merek, $stok) {
            parent::__construct($tipe, $merek);
            $this->stok = $stok;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Stok: " . $this->stok . "<br>";
        }
    }

?>