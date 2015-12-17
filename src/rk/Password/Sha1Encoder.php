<?php
    namespace rk\Password;

    class Sha1Encoder {
        private $encodeFunc;

        public function __construct(EncodeFunc $encodeFunc){
            $this -> encodeFunc = $encodeFunc;
        }

        public function sha1Encode($plainText){
            return $this -> encodeFunc -> encode($plainText);
        }
    }