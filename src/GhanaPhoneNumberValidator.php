<?php

namespace AmbroseTheBuild\GhanaPhoneNumberValidator;

class GhanaPhoneNumberValidator
{
    // Build wonderful things
  

    public static function isValidGhanaNumber( $phone_number ){
        
        $networkCodes = ['024','054','055','023','026','056','027','057','028','020','050'];

        if( empty( $phone_number ) ){
            return "false";
        }else if( strlen($phone_number) < 10 || strlen($phone_number) > 10 ) {
            return "false";
        }else if( $phone_number[0] != "0" ) {
            return "false";
        }
        
        $networkCode = substr($phone_number,0,3);

        if( !in_array($networkCode, $networkCodes, true ) ){
            return "false";
        }else{
            return "true";
        }

        
    }


    public static function whichNetwork( $phone_number ){
        
        $mtn = ["name"=>"MTN","slug"=>"mtn"];
        $glo = ["name"=>"Globacom","slug"=>"glo"];
        $airtelTigo = ["name"=>"AirtelTigo","slug"=>"airteltigo"];
        $expresso = ["name"=>"Expresso","slug"=>"expresso"];
        $vodafone = ["name"=>"Vodafone","slug"=>"vodafone"];
        $inValid = ["name"=>null,"slug"=>null];

        if( self::isValidGhanaNumber($phone_number) ){

            $networkCode = substr($phone_number,0,3);
            
        
            if( in_array($networkCode, ['024','054','055'], true ) ){
                return $mtn;
            }else if( in_array($networkCode, ['023'], true ) ){
                return $glo;
            }else if( in_array($networkCode, ['026','056','027','057'], true ) ){
                return $airtelTigo;
            }else if( in_array($networkCode, ['028'], true ) ){
                return $expresso;
            }else if( in_array($networkCode, ['020','050'], true ) ){
                return $vodafone;
            }else{
                return $inValid;
            }
            

        }

    }




}