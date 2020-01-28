<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xml-act1.herokuapp.com/xml.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("horses);
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("name")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("coat")->item(0)->nodeValue;
  
   echo "<li>$name
            <ul>
                <li>$coat</li>
            </ul>
        </li>";
 }
?>
</ul>
