<?php

$curl = curl_init();
$api = "820706e8019b56acc3d9cd2ab4d33715aee13c723304ef886e2d68b2a00191e9";

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.binderbyte.com/wilayah/provinsi?api_key=$api",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Cookie: ci_session=a41bfaa9fa3dfcfbd9e461d3b4ee700cd70b0c33'
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    // echo $response; // get data in json

    // // convert json to array
    $array_response = json_decode($response, TRUE);
    $data_provinsi = $array_response["value"];

    echo "<option value=''> --- Pilih Provinsi --- </option>";
    foreach ($data_provinsi as $data) {
        echo "<option value='" . $data['name'] . "' id_provinsi='" . $data['id'] . "'>" . $data["name"] . "</option>";
    }
}
