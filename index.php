<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xml-act1.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("horses");
 
 ?>
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
                <li>$coat</li>
                <li>$category</li>
                 <li>$handling</li>
            </ul>
        </li>";
 }
?>
</ul>
