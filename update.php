<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 01-May-18
 * Time: 11:16
 */
$code         = $_POST['code'];
$name         = $_POST['name'];
$routeAB      = $_POST['routeAB'];
$routeBA      = $_POST['routeBA'];
$agencies     = $_POST['agencies'];
$type         = $_POST['type'];
$distance     = $_POST['distance'];
$vehicleType  = $_POST['vehicleType'];
$time         = $_POST['time'];
$basicPrice   = $_POST['basicPrice'];
$studentPrice = $_POST['studentPrice'];
$monthlyPrice = $_POST['monthlyPrice'];
$totalTrips   = $_POST['totalTrips'];
$tripTime     = $_POST['tripTime'];
$tripSpacing  = $_POST['tripSpacing'];

$data        = array("code"         => $code,
                     "name"         => $name,
                     "routeAB"      => $routeAB,
                     "routeBA"      => $routeBA,
                     "agencies"     => $agencies,
                     "type"         => $type,
                     "distance"     => $distance,
                     "vehicleType"  => $vehicleType,
                     "time"         => $time,
                     "basicPrice"   => $basicPrice,
                     "studentPrice" => $studentPrice,
                     "monthlyPrice" => $monthlyPrice,
                     "totalTrips"   => $totalTrips,
                     "tripTime"     => $tripTime,
                     "tripSpacing"  => $tripSpacing
);

$data_string = json_encode($data);

$curl = curl_init('http://busmap.somee.com/api/Route/UpdateRoute');

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($curl);
if($result == true)
{
    echo "<script>alert('Cập nhật thành công'); window.location.assign(\"list.php\")</script>";
}