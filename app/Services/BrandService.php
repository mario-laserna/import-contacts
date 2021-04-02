<?php


namespace App\Services;


class BrandService
{
    public static function getBrand($card_number){
        $brand = 'Unknow';
        $visa_pattern = "/^4[0-9]{6,}$/";
        $mastercard_pattern = "/^5[1-5][0-9]{5,}|222[1-9][0-9]{3,}|22[3-9][0-9]{4,}|2[3-6][0-9]{5,}|27[01][0-9]{4,}|2720[0-9]{3,}$/";
        $american_pattern = "/^3[47][0-9]{5,}$/";
        $diners_pattern = "/^3(?:0[0-5]|[68][0-9])[0-9]{4,}$/";
        $discover_pattern = "/^6(?:011|5[0-9]{2})[0-9]{3,}$/";
        $jcb_pattern = "/^(?:2131|1800|35[0-9]{3})[0-9]{3,}$/";

        if(preg_match($visa_pattern, $card_number)){
            $brand = 'visa';
        }else if(preg_match($mastercard_pattern, $card_number)){
            $brand = 'mastercard';
        }else if(preg_match($american_pattern, $card_number)){
            $brand = 'american express';
        }else if(preg_match($diners_pattern, $card_number)){
            $brand = 'diners';
        }else if(preg_match($discover_pattern, $card_number)){
            $brand = 'discover';
        }else if(preg_match($jcb_pattern, $card_number)){
            $brand = 'jcb';
        }

        return $brand;
    }
}
