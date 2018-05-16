<?php

require_once("ServiceHandler.php");
require_once("./SimpleRest.php");

$rest = new SimpleRest();


$view = "";
parse_str(file_get_contents("php://input"), $reqdata);             
$reqdata = (object) $reqdata;

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
    case "search college":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->searchCollege($reqdata);
        break;
    case "apply to college":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->applyToCollege($reqdata);
        break;
    case "get applications":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getApplications($reqdata);
        break;
    case "get student details":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getStudentDetails($reqdata);
        break;
    case "update application status":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->updateApplicationStatus($reqdata);
        break;
    case "make payment":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->makePayment($reqdata);
        break;
    case "admit student":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->admitStudent($reqdata);
        break;
    case "get payment details":
        // to handle REST Url /mobile/users/
        $ServiceHandler = new ServiceHandler();
        $ServiceHandler->getPaymentDetails($reqdata);
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
