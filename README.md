# QR

This is the QR-Plugin for Detleff.

It listens for `QR <to-be-encoded-text>` and sends back the image containing the QR-Code.

The regEx, that must be added to `config/regEx.php` is:

```
'qr' => '/qr (.*)$/i'
```
