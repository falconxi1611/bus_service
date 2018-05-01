<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 01-May-18
 * Time: 10:03
 */
//DELETE
$code = $_GET['code'];

$service_url = "http://busmap.somee.com/api/Route/DeleteRoute/{$code}";

$ch = curl_init($service_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
$response = curl_exec($ch);
curl_close($ch);
if($response == true)
{
    echo "<script>alert('Xóa thành công'); window.location.assign(\"list.php\")</script>";
}



