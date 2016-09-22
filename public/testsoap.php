<?php
phpinfo();
exit;
//header('Content-Type:text/html;charset=utf-8');
////libxml_disable_entity_loader(false); //adding this worked for me
//$client = new SoapClient("http://10.81.6.161:7002/ShieldPlatform/service/BcScoreTaskService.ws");
//exit;
//var_dump($client->__getTypes());
//try {
//    $response = $client->GetPhoneBook('zhang');
//    var_dump($response);
//}catch (SoapFault $sf){
//    var_dump($sf);
//    print ($client->__getLastRequest());
//    print ($client->__getLastResponse());
//}
$aHTTP['http']['header'] =  "User-Agent: PHP-SOAP/5.5.11\r\n";

$aHTTP['http']['header'].= "username: XXXXXXXXXXX\r\n"."password: XXXXX\r\n";

$context = stream_context_create($aHTTP);

$client=new SoapClient("https://ocppws-cert.extra.bcv.org.ve:443/AltoValor/BancoUniversal?WSDL",array('trace' => 1,"stream_context" => $context));

$result = $client->jornadaActiva();
var_dump($result);
?>