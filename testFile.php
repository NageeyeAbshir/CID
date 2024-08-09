<?php 
//header('Content-type: applicant/pdf');
/*header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');*/
include 'config/config_class.php';
$find = new ICT_MS_Class();
//$find->setPostData($qry);
$qry = "select a.applicant_id, a.applicant_name, a.applicant_marher_name, a.applicant_tell, a.applicant_email, a.applicant_file from applicant a where a.deleted=0 and a.applicant_id=1";
$file;
$rest = $find->getSomeThingData($qry);
while ($row = $rest->fetch_array(MYSQLI_ASSOC)) {
	$file = base64_encode($row['applicant_file']);
//@readfile('data:application/pdf;base64,$file');
}
// header('Content-Disposition: inline; filename=$file');
// header('Content-Transfer-Encoding: binary');
// header('Accept-Ranges: bytes');
// echo $file;
// file_put_contents($file, "file_uploads/test.pdf");
// print($file);
	// echo '<iframe src="file_uploads/Mahad Ali Afey (Sugnaan).pdf" type="application/pdf" width="100%" height="100%" scrolling="true"></iframe>';
	echo '<iframe src="data:application/*;base64,'.$file.'" type="application/*" width="100%" height="100%" scrolling="true"></iframe>';
 ?>