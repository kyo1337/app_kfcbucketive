<?php

$id = $_POST['id_provinsi'];
$curl = curl_init();
$api = "820706e8019b56acc3d9cd2ab4d33715aee13c723304ef886e2d68b2a00191e9";

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.binderbyte.com/wilayah/kabupaten?api_key=$api&id_provinsi=$id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Cookie: ci_session=4b4af586651b3e04934e6917f2f8927f55eb5328'
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
    $data_kota = $array_response["value"];

    echo "<option value=''> --- Pilih Kota --- </option>";
    foreach ($data_kota as $data) {
        echo "<option value='" . $data["name"] . "'>" . $data["name"] . " </option>";
    }
}
