<?php
    namespace rk\Password\Method;

    use Jkan\Component\Password\EncodingMethod;

    class Sha1 implements EncodingMethod{

        public function encode($plainText){
            return sha1($plainText);
        }
    }