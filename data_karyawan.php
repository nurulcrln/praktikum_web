<?php
    abstract class Karyawan{
        private $nama;
        private $jenis_kelamin;
        private $ttl;///tempat tanggal lahir
        private $level;
        private $status;

        public function __construct($nama, $jenis_kelamin, $ttl){
            $this->nama = $nama;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->ttl = $ttl;
        }
        
        public function getNama(){
            return $this->nama;
        }

        public function getJenisKelamin(){
            return $this->jenis_kelamin;
        }

        public function getTTL(){
            return $this->ttl;
        }

        
        abstract public function setLevel($level);
        abstract public function setStatus($status);
        
    }
    
    interface Level {
        public function hitungGaji();
    }

    class Fulltime extends Karyawan implements Level{
        private $status;
        private $level;
        private $gaji;

        ///penggunaan abstract method
        public function setStatus($status){
            $this->status = $status;
        }
        public function getStatus(){
                return $this->status;
        }
        public function setLevel($level){
            $this->level = $level;
        }
        public function getLevel(){
            return $this->level;
        }

        public function hitungGaji(){
            if($this->level == "Junior" && $this->status == "Fulltime"){
                $this->gaji = 2000000;
            }
            else if($this->level == "Amateur" && $this->status == "Fulltime"){
                $this->gaji = 3500000;
            }
            else if($this->level == "Senior" && $this->status == "Fulltime"){
                $this->gaji = 5000000;
                
            }
        }
        public function getGaji(){
            return $this->gaji;
        }

    }

    class Parttime extends Karyawan implements Level{
        private $status;
        private $level;
        private $gaji;

        ///penggunaan abstract method

        public function setStatus($status){
            $this->status = $status;
        }
        public function getStatus(){
                return $this->status;
        }
        public function setLevel($level){
            $this->level = $level;
        }
        public function getLevel(){
            return $this->level;
        }

        public function hitungGaji(){
            if($this->level == "Junior"){
                $this->gaji = 2000000;
                if($this->status== "Parttime"){
                    $this->gaji /= 2;
                }else{
                    $this->gaji = 2000000;
                }

            }
            else if($this->level == "Amateur"){
                $this->gaji = 3500000;
                if($this->status== "Parttime"){
                    $this->gaji /= 2;
                }else{
                    $this->gaji = 3500000;
                }
            }
            else if($this->level == "Senior"){
                $this->gaji = 5000000;
                if($this->status== "Parttime"){
                    $this->gaji /= 2;
                }else{
                    $this->gaji = 5000000;
                }
            }
        }
        public function getGaji(){
            return $this->gaji;
        }

    }
?>