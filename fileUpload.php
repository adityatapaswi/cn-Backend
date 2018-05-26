<?php

header('Content-Type: text/plain; charset=utf-8');
header("Access-Control-Allow-Origin: *");
require_once("dbconn.php");
require_once("SimpleRest.php");

$simpleRest=new SimpleRest();
try {

    // Undefined | Multiple Files | $_FILES Corruption Attack
    // If this request falls under any of them, treat it invalid.
	
    if (
            !isset($_FILES['upfile']['error']) ||
            is_array($_FILES['upfile']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }

    // Check $_FILES['upfile']['error'] value.
    switch ($_FILES['upfile']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    // You should also check filesize here. 
    if ($_FILES['upfile']['size'] > 1000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }

      // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
    // Check MIME Type by yourself.

    if ($_FILES['upfile']['type'] == 'application/pdf') {
        $ext = "pdf";
    } else {
        throw new RuntimeException('PDF File Required.');
    }
    $fileName = sprintf('/uploads/%s.%s', sha1_file($_FILES['upfile']['tmp_name']) . $_POST['file_name'] . $_POST['sid'], $ext);
    $fileName = str_replace("/ ", "_", $fileName);
    $fileName = str_replace(" ", "_", $fileName);

    // You should name it uniquely.
    // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
    // On this example, obtain safe unique name from its binary data.

    if (!move_uploaded_file(
                    $_FILES['upfile']['tmp_name'],'./'.$fileName
            )) {
        throw new RuntimeException('Failed to move uploaded file.');
    }
    $fileUrl =  $fileName;
    $fileName = $_POST['file_name'];
    $sid = $_POST['sid'];
    $dbconn = new dbconn();
//        $output=array();
    $sql = "call uploadFile('$fileName', '$fileUrl', $sid);";

    $conn = $dbconn->return_conn();
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $output = $row;
        }
    }
    $conn->close();

    $rawData = $output;
    if (empty($rawData)) {
        $statusCode = 404;
        $rawData = array('error' => 'Something Went Wrong!');
        $response = array('Success' => false, 'Values' => $rawData);
    } else {
//            echo $rawData["reply"];

        $statusCode = 200;
        $response = $rawData;
    }
    $requestContentType = 'application/json';

    $simpleRest->setHttpHeaders($requestContentType, $statusCode);

    header("Access-Control-Allow-Origin: *");

    echo json_encode($response);


//    echo      $fileName;
//    echo      $_POST["file_name"];
//    echo      $_POST["view"];
} catch (RuntimeException $e) {

    echo $e->getMessage();
}
?>