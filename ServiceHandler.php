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
            if (isset($rawData["reply"])) {
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

    function getSMS($filter) {

        $services = new Services();
        $rawData = $services->getSMS($filter);


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

    function getCollegeStreams($college) {

        $services = new Services();
        $rawData = $services->getCollegeStreams($college);


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

    function searchCollege($query) {

        $services = new Services();
        $rawData = $services->searchCollege($query);


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

    function applyToCollege($application) {

        $services = new Services();
        $rawData = $services->applyToCollege($application);


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

    function getApplications($for) {

        $services = new Services();
        $rawData = $services->getApplications($for);


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

    function getStudentDetails($student) {

        $services = new Services();
        $rawData = $services->getStudentDetails($student);


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

    function updateApplicationStatus($application) {

        $services = new Services();
        $rawData = $services->updateApplicationStatus($application);


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

    function makePayment($paymentObj) {

        $services = new Services();
        $rawData = $services->makePayment($paymentObj);


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

    function getPaymentDetails($application) {

        $services = new Services();
        $rawData = $services->getPaymentDetails($application);


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

    function getAdmittedStatusForStudent($student) {

        $services = new Services();
        $rawData = $services->getAdmittedStatusForStudent($student);


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

    function getStates() {

        $services = new Services();
        $rawData = $services->getStates();


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

    function getCities($filter) {

        $services = new Services();
        $rawData = $services->getCities($filter);


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

    function getStreamId($stream) {

        $services = new Services();
        $rawData = $services->getStreamId($stream);


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

    function completePayment($paymentObj) {
        $services = new Services();
        $rawData = $services->completePayment($paymentObj);


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

    function admitStudent($stud) {

        $services = new Services();
        $rawData = $services->admitStudent($stud);


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

    function getDocumentsCompletionStatus($student) {

        $services = new Services();
        $rawData = $services->getDocumentsCompletionStatus($student);


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

    function deleteDocument($doc) {

        $services = new Services();
        $rawData = $services->deleteDocument($doc);


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

    function changePasss($user) {
        $services = new Services();
        $rawdata = $services->changePasss($user);
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

    function contactUs($msg) {
        $services = new Services();
        $rawdata = $services->contactUs($msg);
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

    function getAdmissionsForCourse($course) {

        $mobile = new Services();
        $rawData = $mobile->getAdmissionsForCourse($course);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No Admissions Found!');
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
    function getResetLinkParams($user) {

        $mobile = new Services();
        $rawData = $mobile->getResetLinkParams($user);


        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No Admissions Found!');
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
