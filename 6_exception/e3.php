<?php

class myException extends Exception {
    public function getDetails() {
        return "Custom Exception";
    }
}

try {
    throw new myException();
} catch (myException $e) {
    echo $e->getDetails();
} finally {
    echo "Finally";
}

?>