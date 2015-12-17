<?php
    namespace rk\Password;

    interface EncodeFunc{
        public function encode($plainText);
    }