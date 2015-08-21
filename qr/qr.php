<?php
/**
 *
 */
class qr
{
    //This is holding our matches
    private $matches;

    function __construct($matches)
    {
        $this->matches = $matches;
    }

    public function returnType()
    {
        return 'image';
    }

    public function run()
    {
        return 'https://chart.googleapis.com/chart?chs=178x178&cht=qr&chl=' + urlencode($matches[0]);
    }

	public function help()
	{
		return 'qr <string-to-be-encoded> - Returns an image containing the QR-encoded string';
	}

    function __destruct()
    {

    }
}
