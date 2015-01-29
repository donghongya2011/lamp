<?php
    abstract class Father {
        public function say(){
            print_r("hello world");
        }
    }

    class Jack extends Father {

        public function say(){
            print_r("hello 1");
        }

    }

    $obj = new Jack();
    $obj->say();

   
