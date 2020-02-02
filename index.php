<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xml-act1.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("horses");
 
 ?>
<h2> Red Dead Redemption 2 | Horses </h2>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
   $coat = $data->getElementsByTagName("coat")->item(0)->nodeValue;
   $category = $data->getElementsByTagName("category")->item(0)->nodeValue;
   $handling = $data->getElementsByTagName("handling")->item(0)->nodeValue;
  
   echo "<li>$name
            <ul>
                <li><h4>Coat:</h4> $coat</li>
                <li><h4>Category:</h4> $category</li>
                 <li><h4>Handling </h4>$handling</li>
            </ul>
        </li>";
 }
?>
</ul>
