<?php
/*
*	HDEV SMS Gateway 
*	@email :  info@hdevtech.cloud
*	@link : https://sms-zm.hdevtech.cloud
*
*/

/*
	Master SMS controller
*/
if (!defined('hdev_sms_zm')) {
  class hdev_sms_zm
  {
    private static $api_id = null;
    private static $api_key = null;
    public static function  api_key($value='')
    {
      self::$api_key = $value;
    }
    public static function api_id($value='')
    {
      self::$api_id = $value;
    }
    public static function send($sender_id,$tel,$message,$link=''){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://sms-zm.hdevtech.cloud/api_pay/api/'.self::$api_id.'/'.self::$api_key,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('ref'=>'sms','sender_id' => $sender_id,'tel' => $tel,'message' => $message,'link'=>$link),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      return json_decode($response);
    }
  }

}
?>
