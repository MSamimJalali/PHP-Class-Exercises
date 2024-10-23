<?php
class StringManipulator {
    private $string;

    public function __construct($string) {
        $this->string = $string;
    }

    public function toUpper() {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function reverse() {
        $this->string = strrev($this->string);
        return $this;
    }

    public function addPrefix($prefix) {
        $this->string = $prefix . $this->string;
        return $this;
    }

    public function addSuffix($suffix) {
        $this->string = $this->string . $suffix;
        return $this;
    }

    public function getString() {
        return $this->string;
    }
}

// Example usage
$manipulator = new StringManipulator("hello");
$result = $manipulator->toUpper()->reverse()->addPrefix("Start: ")->addSuffix(" :End")->getString();
echo $result;
?>
