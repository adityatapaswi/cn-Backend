<?php

require_once("SimpleRest.php");
require_once("Services.php");

class ServiceHandler extends SimpleRest {

    function login($user) {

        $services = new Services();
        $rawData = $services->login($user);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
//            echo $rawData["reply"];
            if (isset( $rawData["reply"])) {
                $statusCode = 401;
                $response = array('Success' => false, 'Values' => $rawData["reply"]);
            } else {
                $statusCode = 200;
                $response = $rawData;
            }
        }
        $requestContentType = 'application/json';

        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function addCollegeStream($collegeStream) {

        $services = new Services();
        $rawData = $services->addCollegeStream($collegeStream);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';

        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }
    function getSMS() {

        $services = new Services();
        $rawData = $services->getSMS();


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';

        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function updateStudentProfile($student) {

        $services = new Services();
        $rawData = $services->updateStudentProfile($student);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';

        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function getReservations() {

        $services = new Services();
        $rawData = $services->getReservations();


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }
    function getStudentsDocuments($student) {

        $services = new Services();
        $rawData = $services->getStudentsDocuments($student);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function updateCollege($college) {

        $services = new Services();
        $rawData = $services->updateCollege($college);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json;charset=utf-8';
        $this->setHttpHeaders($requestContentType, $statusCode);
        header("Content-type: application/json; charset=utf-8");
        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function getArtiSchedule() {

        $services = new Services();
        $rawData = $services->getArtiSchedule();


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function registerResident($resident) {

        $services = new Services();
        $rawData = $services->registerResident($resident);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function verify($mobile) {

        $services = new Services();
        $rawData = $services->verify($mobile);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function loginResident($mobile) {

        $services = new Services();
        $rawData = $services->loginResident($mobile);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function getBirthdaysAndAnniversaries() {

        $services = new Services();
        $rawData = $services->getBirthdaysAndAnniversaries();


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);


        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function getAddresses() {

        $services = new Services();
        $rawData = $services->getAddresses();


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function getTodaysDonations() {

        $services = new Services();
        $rawData = $services->getTodaysDonations();


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function getTodaysTotal() {

        $services = new Services();
        $rawData = $services->getTodaysTotal();


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function getSummaryFromDate($date) {

        $services = new Services();
        $rawData = $services->getSummaryFromDate($date);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function getDatesForSummary() {

        $services = new Services();
        $rawData = $services->getDatesForSummary();


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function getYearsForSummary() {

        $services = new Services();
        $rawData = $services->getYearsForSummary();


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function getHistoryOfAddress($aid) {

        $services = new Services();
        $rawData = $services->getHistoryOfAddress($aid);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function signUp($user) {

        $services = new Services();
        $rawData = $services->signUp($user);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Operation Failed!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);


        header("Access-Control-Allow-Origin: *");


        echo json_encode($response);
    }

    function addHistory($address) {

        $services = new Services();
        $rawData = $services->addHistory($address);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);


        header("Access-Control-Allow-Origin: *");


        echo json_encode($response);
    }

    function getYearsTotal($year) {

        $services = new Services();
        $rawData = $services->getYearsTotal($year);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);


        header("Access-Control-Allow-Origin: *");


        echo json_encode($response);
    }

    function getYearsSummary($year) {

        $services = new Services();
        $rawData = $services->getYearsSummary($year);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);


        header("Access-Control-Allow-Origin: *");


        echo json_encode($response);
    }

    function makeDonation($donation) {

        $services = new Services();
        $rawData = $services->makeDonation($donation);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = $rawData;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);


        header("Access-Control-Allow-Origin: *");


        echo json_encode($response);
    }

    function getEvents() {
        $services = new Services();
        $rawdata = $services->getEvents();
        if (empty($rawdata)) {
            $statuscode = 404;
            $rawdata = array('error' => 'No Record Found');
            $response = array('Sucess' => false, 'Values' => $rawdata);
        } else {
            $statuscode = 200;
            $response = $rawdata;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statuscode);
        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function postEvent($event) {
        $services = new Services();
        $rawdata = $services->postEvent($event);
        if (empty($rawdata)) {
            $statuscode = 404;
            $rawdata = array('error' => 'Operation Failed');
            $response = array('Sucess' => false, 'Values' => $rawdata);
        } else {
            $statuscode = 200;
            $response = $rawdata;
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statuscode);
        header("Access-Control-Allow-Origin: *");

        echo json_encode($response);
    }

    function getAllUsers($phone) {

        $mobile = new Mobile();
        $rawData = $mobile->getAllUsers($phone);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = array('Success' => false, 'Values' => $rawData);
        } else {
            $statusCode = 200;
            $response = array('Success' => true, 'Values' => $rawData);
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);



        echo json_encode($response);
    }

    function updateGcmId($gcmid, $phone) {
        $mobile = new Mobile();
        $rawdata = $mobile->updtegcmid($phone, $gcmid);
        if (empty($rawdata)) {
            $statuscode = 404;
            $rawdata = array('error' => 'Operation Failed');
            $response = array('Sucess' => false, 'Values' => $rawdata);
        } else {
            $statuscode = 200;
            $response = array('Sucess' => true, 'Values' => $rawdata);
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statuscode);

        echo json_encode($response);
    }

    function buddyAction($userphone, $buddyphone, $action) {

        $mobile = new Mobile();
        $rawData = $mobile->buddyAction($userphone, $buddyphone, $action);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Something Went Wrong!');
            $response = $rawData;
        } else {
            $statusCode = 200;
            $response = array('Success' => true, 'Values' => $rawData);
        }
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);



        echo json_encode($response);
    }

}

?>
