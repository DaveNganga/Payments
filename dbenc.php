<?php
include_once('dbinc.php');
$link = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
if($link->connect_error){
    echo "Please Refresh the page or try again later";
   }
else if(version_compare(phpversion(),'5.3.3','>=')){
        $cipher="AES-256-CTR";
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivlen);
        $key = openssl_random_pseudo_bytes(126);
    function encrpt($text){
        $cipher_text = openssl_encrypt($text,$cipher,$key,$options=OPENSSL_RAW_DATA,$iv);
        $query = "INSERT INTO Encryption (ivlen, iv,encrKey,cipher) 
                  VALUES (".$ivlen.", ".$iv.", ".$key.",".$cipher."); ";
        $result = $link->query($query);
        # $hmac = hash_hmac('sha256',$ciphertext_raw,$key,$as_binary=true);
        # $ciphertext=base64_encode($iv.$hmac.$ciphertext_raw);  
        return $cipher_text;
    }
    function decrypt($text){
        $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
        echo $original_plaintext."\n";
    }
}else{
    echo "Somethings not right";
}
$link->close();
?>