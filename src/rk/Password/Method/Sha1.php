<?php
    namespace rk\Password\Method;

    use rk\Password\EncodeFunc;

    class Sha1 implements EncodeFunc{

        public function encode($plainText){
            return sha1($plainText);
        }
    }