<?php 

$rss= '<?xml version="1.0" encoding="UTF-8"?>';
$rss .= '<rss version="2.0">';
$rss .= '<channel>';

$connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820843") or die (mysqli_error($connect));
$sql = "SELECT * FROM tblhorses";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));


while($record= mysqli_fetch_assoc($query)) {
    extract($record);
    
    $rss .= '<horses>';
    $rss .= '<name>' . $Horse . '</name>';
    $rss .= '<coat>' . $Coat . '</coat>';
    $rss .= '<category>' . $Category . '</category>';
    $rss .= '<handling>' . $Handling . '</handling>';
    $rss .= '</horses>';
}
$rss .= '</channel>';
$rss .= '</rss>';

echo $rss; 
?>
