<?php

require_once("ServiceHandler.php");
require_once("./SimpleRest.php");
require_once("./util.php");

$rest = new SimpleRest();
$util=new util();
//header("Access-Control-Allow-Origin: *");


$view = "";
parse_str(file_get_contents("php://input"), $reqdata);             
$reqdata = (object) $reqdata;
//$reqdata = file_get_contents("php://input");
//$util->printLog($reqdata);
//$reqdata  = json_decode($reqdata);

if (isset($reqdata->view)){
    $view = $reqdata->view;
//    echo $view;
}
else {
    $statusCode = 404;
    $rawData = array('error' => 'Something Went Wrong!');
    $response = array('Success' => false, 'Values' => $rawData);
    $requestContentType = 'application/json';

    $rest->setHttpHeaders($requestContentType, $statusCode);

    header("Access-Control-Allow-Origin: *");

    echo json_encode($response);
}

/*
  controls the RESTful services
  URL mapping
 */
switch ($view) {

    case "get reservations":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getReservations();
        break;
    case "add college stream":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->addCollegeStream($reqdata);
        break;
    case "get SMS":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getSMS();
        break;
    case "update student":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->updateStudentProfile($reqdata);
        break;
    case "update college":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->updateCollege($reqdata);
        break;
    case "get documents":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getStudentsDocuments($reqdata);
        break;
    case "get college streams":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getCollegeStreams($reqdata);
        break;
    case "verify":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->verify($_GET["mobile"]);
        break;
    case "loginResident":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->loginResident($_GET["mobile"]);
        break;
    case "getDates":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getDatesForSummary();
        break;
    case "getYears":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getYearsForSummary();
        break;
    case "todaysTotal":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getTodaysTotal();
        break;
    case "yearsTotal":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getYearsTotal($_GET["year"]);
        break;
    case "yearsSummary":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getYearsSummary($_GET["year"]);
        break;
    case "addressHistory":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getHistoryOfAddress($_GET["aid"]);
        break;
    case "signup":
        // to handle REST Url /mobile/users/
//       echo $user->name;
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->signUp($reqdata);
        break;
    case "sendNotification":
        // to handle REST Url /mobile/users/
        $postdata = file_get_contents("php://input");
        $notification = json_decode($postdata);
        //   echo $notification->title.' '.$notification->message;
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->sendNotification($notification);
        break;
    case "registerResident":
        // to handle REST Url /mobile/users/
        $postdata = file_get_contents("php://input");
        $resident = json_decode($postdata);
//       echo $user->name;
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->registerResident($resident);
        break;
    case "addHistory":
        // to handle REST Url /mobile/users/
        $postdata = file_get_contents("php://input");
        $address = json_decode($postdata);
//       echo $user->name;
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->addHistory($address);
        break;
    case "donation":            //Make donation
        // to handle REST Url /mobile/users/
        $postdata = file_get_contents("php://input");
        $donation = json_decode($postdata);
//       echo $user->name;
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->makeDonation($donation);
        break;
    case "login" :
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->login($reqdata);
        break;
    case "updateFCM" :
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->updateGCM($_GET["mobile"], $_GET["fcmId"]);
        break;
    case "events":
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getEvents();
        break;
    case "postEvent":
        $postdata = file_get_contents("php://input");
        $event = json_decode($postdata);
        $event->title;
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->postEvent($event);
        break;
    case "updategcm":
        $mobileRestHandler = new MobileRestHandler();
        $mobileRestHandler->updateGcmId($_GET["gcmid"], $_GET["phone"]);
        break;
    case "action":
        // to handle REST Url /mobile/users/
        $mobileRestHandler = new MobileRestHandler();
        $mobileRestHandler->buddyAction($_GET["userphone"], $_GET["buddyphone"], $_GET["action"]);
        break;

    case "track":
        // to handle REST Url /mobile/users/
        $mobileRestHandler = new MobileRestHandler();
        $mobileRestHandler->getAllTrackers($_GET["phone"]);
        break;
}
?>
