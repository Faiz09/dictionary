<?php

class Output
{
    protected $arr;

    public function __construct($out)
    {
        $this->arr = $out;
    }

    private function output()
    {
        echo "\nMeanings:\n";
        foreach ($this->arr as $index => $line) {
            echo ++$index . ": " . $line . "\n";
        }
    }
}