<?php

class Request
{
    /*
     * left intentionally, replace it
     * */
    protected $appId = "9b25649d";
    protected $appKey = "176169540f69a845b6041ca9565dc750";
    protected $result;
    
    public function fetch($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "app_id: {$this->appId}",
            "app_key: {$this->appKey}",
        ]);

        $this->result = curl_exec($ch);

        curl_close($ch);

        return $this;
    }

    public function parsed()
    {
        $result = json_decode($this->result);

        if (isset($result->error)) {
            exit( $result->error . "\n" );
        }

        $lexicalEntries = $result->results[0]->lexicalEntries;

        $definitions = [];

        foreach ($lexicalEntries as $entries) {
            foreach ($entries->entries as $entry) {
                foreach ($entry->senses as $sense) {
                    foreach ($sense->definitions as $definition) {
                        array_push($definitions, $definition);
                    }
                }
            }
        }

        $this->result = $definitions;
        return $this;
    }

    public function raw()
    {
        return $this->result;
    }

    public function get()
    {
        return $this->result;
    }
}