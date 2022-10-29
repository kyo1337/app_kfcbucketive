<?php

$id = $_POST['id_provinsi'];
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=$id",
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "key: cb966aad8822dcafc925cb6c541dc784"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    // echo $response; // get data in json

    // convert json to array
    $array_response = json_decode($response, TRUE);
    $data_kota = $array_response["rajaongkir"]["results"];

    echo "<option value=''> --- Pilih Kota --- </option>";
    foreach ($data_kota as $data) {
        echo "<option value='" . $data["type"] . " " . $data['city_name'] . "'>" . $data["type"] . " " . $data["city_name"] . "</option>";
    }
}
