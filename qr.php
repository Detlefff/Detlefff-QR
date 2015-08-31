<?php
require_once 'scripts/script.php';

class qr extends Script
{
    public function run()
    {
        return $this->send($this->message->number, 'https://chart.googleapis.com/chart?chs=547x547&cht=qr&chl=' . urlencode($this->matches[1]), 'image');
    }
}
