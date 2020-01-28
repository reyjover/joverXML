<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xml-act1.herokuapp.com/xml.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("horses");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $name = $data->getElementsByTagName("name")->horses(0)->nodeValue;
   $coat = $data->getElementsByTagName("coat")->horses(0)->nodeValue;
  
   echo "<li>$name
            <ul>
                <li>$coat</li>
            </ul>
        </li>";
 }
?>
</ul>
