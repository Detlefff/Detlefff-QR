<?php
class qr extends Script
{
    protected $helpMessage = "'qr STRING'\n";
    protected $description = 'Returns a QR-code representing the given string';

    public function run()
    {
        return $this->send('https://chart.googleapis.com/chart?chs=547x547&cht=qr&chl=' . urlencode($this->matches[1]), 'image');
    }
}
