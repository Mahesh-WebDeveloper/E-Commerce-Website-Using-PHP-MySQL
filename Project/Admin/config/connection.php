<?php 
$connection = mysqli_connect("localhost","root","","herbs") or die ("connection Error");

function insertQury($instable,$value,$connection){
   $ins ="INSERT INTO $instable SET";
   
   foreach ($value as $fieldname => $fieldvalue) {
    $ins .= " $fieldname = '$fieldvalue',";
   }

   $ins = substr($ins,0,-1);
   mysqli_query($connection,$ins);   
}

function fileUpload($inputfile,$folder){
     $sliderimg = $_FILES[$inputfile];
    $sliderimgname = date('y-m-d').time().$sliderimg['name'];
    $tmpath = $sliderimg['tmp_name'];
    $path = $folder.$sliderimgname;
    move_uploaded_file($tmpath, $path);

    return $sliderimgname;

}

function deletes($tablename,$filed,$id,$c){
   $deleteQuery = "DELETE FROM $tablename WHERE $filed in ($id)";
   $exec = mysqli_query($c, $deleteQuery);
}
?>