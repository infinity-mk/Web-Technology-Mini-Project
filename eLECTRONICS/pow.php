<?php include('ACCESORIES/acc.php'); ?>



            <div class="col-md-9">








              <div><center><h2><font face="Trebuchet" size="+3.2" color="#191970" style="text-transform: uppercase;">Power banks</font></h2></center></div>
              <div style="width:100%;float:left" >
              <?php

              include("config.php");

              $catg=3;
              $subcatg="power";


                 $sel=mysql_query("select * from items where catg='$catg' and subcatg='$subcatg'");
                 echo"<form method='post'><table border='0' align='center'><tr>";
                 $n=1;
                  while($arr=mysql_fetch_array($sel))
                 {
                 $i=$arr['itemno'];
                  if($n%4==0)
              	{
              	echo "<tr>";
              	}
                 echo "
                 <td height='300' width='280' align='center' >
                 <img src='admin/itempics/$i.jpg' height='200' width='130'><br/>

               <b>Item No:</b>".$arr['itemno'].
                 "<br><b>Price:</b>Rs&nbsp;".$arr['price'].
                 "<br><b>Description:</b>".$arr['desca'].
                 "<br><br><a href='cart.php'><img src='images/MetalPlakDa5new.gif' width='70' height='20'/></a>
                    <a href='viewitem.php?itemno=$i'cart.php><img src='images/view7.jpg' width='70' height='20'/></a><br><br>
                 </td>";
                $n++;

                 }
                 	  echo "</tr></table>
                     </form>";
              	?>
                <div><br>
              <marquee behavior="scroll"  dir="ltr" align="absbottom"><img src="usepics/logo5.jpg" width="100" height="70"/>
              <img src="usepics/logo11.jpg" width="100" height="70"/>
              <img src="usepics/logo12.jpg" width="100" height="70"/><img src="usepics/logo8.jpg" width="100" height="70"/><img src="usepics/logo6.jpg" width="100" height="70"/>
              <img src="usepics/logo4.jpg" width="100" height="70"/>
              <img src="usepics/logo3.jpg" width="100" height="70"/>

              <img src="usepics/logo13.jpg" width="100" height="70"/> <img src="usepics/logo15.jpg" width="100" height="70"/>
              <img src="usepics/logo1.jpg" width="100" height="70"/> <img src="usepics/logo2.jpg" width="100" height="70"/><img src="usepics/logo14.jpg" width="100" height="70"/><img src="usepics/logo9.jpg" width="100" height="70"/>
              </marquee>
              </div>
              </div>




              <?php include('footerh.php'); ?>
