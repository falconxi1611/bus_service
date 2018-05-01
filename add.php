<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 30-Apr-18
 * Time: 22:00
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

$curl = curl_init('http://busmap.somee.com/api/Route/AddRoute');

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($curl);
curl_close($curl);
if($result == true)
{
    echo "<script>alert('Thêm thành công'); window.location.assign(\"list.php\")</script>";
}

