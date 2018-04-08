<?php

class MinhNhut {
    public function __toString() {
        return "I am handsome";
    }
}

$instance = new MinhNhut();

echo $instance;