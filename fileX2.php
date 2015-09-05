<html>
	  <?php

error_reporting(E_ALL ^ E_DEPRECATED);

$link=mysql_connect("localhost","root","")or die("Can't Connect...");

mysql_select_db("random",$link) or die("Can't Connect to Database...");

$query = "SELECT * FROM project";

$result=mysql_query($query) or die("Query Failed : ".mysql_error());

?>
<table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Employee_id</th>
          <th>Employee_Name</th>
          <th>Machine Name</th>
          <th>Machine Status</th>
          <th>Output</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['admin'\]}</td>
              <td>{$row\['host'\]}</td>
              <td>{$row\['status'\]}</td>
              <td>{$row\['output'\]}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysql_close($connector); ?>
   
<head><b><h1><div align="center" >Hi!</div></h1></b></head>
<title>Hello</title>
<h2><div align="center" style="color:blue;">Let's do this man</div></h2>
<form>
<div align="center"><h2><u>Enter the name of the machine:</u></h2><br>
<br><br>
</form>
</body>
</html>