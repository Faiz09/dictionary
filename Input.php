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
        $this->word = isset($this->input[0]) ? $this->input[0] : 'nothing';
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
"=======================================================\n
Define
\n=======================================================\n
Define is a terminal dictionary based on oxford Api. Not that much is here right now..

Usage:
define hello\n
");
            exit();
        }
    }


}