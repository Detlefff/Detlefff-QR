<?php
class qr extends Script
{
    protected static $helpMessage = "'qr STRING'\n";
    protected static $description = 'Returns a QR-code representing the given string';

    public function run()
    {
        return $this->send('https://chart.googleapis.com/chart?chs=547x547&cht=qr&chl=' . urlencode($this->matches[1]), 'image');
    }
}
