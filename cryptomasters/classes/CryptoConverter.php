<?php
class Converter {

}
interface CanConvert {
    public function convert(float $value);
}
class CryptoConverter extends Converter {
    // properties
    // public string $currencyCode;

    function __construct(public string $currencyCode) {
        // $this->currencyCode = $currencyCode;
    }

    // methods
    public function convert(float $value=1): float|bool {
        $code = $this->currencyCode;
        $url = "https://cex.io/api/ticker/$code/USD";
        $json = file_get_contents($url);
        if ($json!=false) {
            $data = json_decode($json, true);
            $last = $data["last"];
            return $value * $last;
        } else {
            return false;
        }
    }
}
