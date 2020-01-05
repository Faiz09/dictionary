<?php

class Input
{
    protected $input;
    protected $word;

    public function __construct()
    {
        global $argv;
        $this->input = array_slice($argv, 1, count($argv));
        $this->showHelp();
        $this->word = $this->input[0];
    }

    /**
     * @return mixed
     */
    public function getWord()
    {
        return str_replace(" ", "_", $this->word);
    }

    private function showHelp()
    {
        $help = isset($this->input[0]) ?
            $this->input[0] == "-h" ? 1: 0 : 0;

        if ($help) {
            echo(
            "\n=======================================================
                        \nDefine
\n=======================================================\n
Define is a terminal dictionary.

Usage:
define 'Hello world'
\n\n  
");
        }
    }


}