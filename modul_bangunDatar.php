<?php
    class BangunDatar{

        const PI = 3.14;    

        public function persegi_L($sisi){
            return $sisi * $sisi;
        } 
        
        public function persegi_K($sisi){
            return 4 * $sisi;
        } 

        public function persegiPanjang_L($panjang,$lebar){
            return $panjang * $lebar;
        }

        public function persegiPanjang_K($panjang,$lebar){
            return 2 * ($panjang + $lebar);
        }

        public function jajarGenjang_L($alas,$tinggi){
            return 2 * ($alas + $tinggi);
        }

        public function jajarGenjang_K($panjang,$lebar){
            return 2 * ($panjang + $lebar);
        }

        public function belahKetupat_L($diagonal){
            return ($diagonal * $diagonal) / 2;
        }

        public function belahKetupat_K($sisi){
            return 4 * $sisi;
        }

        public function layangLayang_L($diagonal){
            return ($diagonal * $diagonal) / 2;
        }

        public function segitigaSamaKaki_L($alas, $tinggi){
            return ($alas * $tinggi) / 2;
        }

        public function lingkaran_L($jari){
            return  self::PI * $jari * $jari;
        }

        public function lingkaran_K($jari){
            return 2 * self::PI * $jari;
        }

        public function limasSegiTiga_L($alas, $tinggi){
            return 2 * ($alas + $tinggi);
        }

        public function limasSegiTiga_V($luasAlas, $tinggi){
            return $luasAlas * $tinggi / 3;
        }
    }
?>