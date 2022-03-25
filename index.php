<?php
/* $curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://web-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?convert=BRL&limit=5000&start=1',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);
echo '<pre>';
print_r($response);
echo '</pre>';*/



?>
<div class="file_ready"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

 $(document).ready(function(){
 /*$.get('https://web-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?convert=BRL&limit=5000&start=1',function(response){
  $('.file_ready').html(response);
 })*/
   
   
   $.ajax({
            headers: { "Accept": "application/json"},
            type: 'GET',
            url: 'https://web-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?convert=BRL&limit=5000&start=1',
            crossDomain: true,
            beforeSend: function(xhr){
                xhr.withCredentials = true;
          },
            success: function(data, textStatus, request){
                $('.file_ready').html(response);
            }
 });
   
   
   
 });
</script>
