<?php
  $username=$_POST['username'];
  $date=$_POST['date'];
  $starttime=$_POST['starttime'];
  $endtime=$_POST['endtime'];
  $audiname=$_POST['audiname'];
  $purpose=$_POST['purpose'];
if (!empty($username))
{
  if (!empty($date))
  {

  	if (!empty($starttime))
  	{
  		if (!empty($endtime))
  		{ 
  			
  				if (!empty($audiname))
  				{


  					if (!empty($purpose))
  					{
  							
                $host="localhost";
  							$dbusername= "";
							  $dbdate="yyyy-mm-dd";
   							$dbstarttime="";
   							$dbendtime="";
  							$dbaudiname="";
  							$dbpurpose="";
  							$dbname="auditorium booking";


 					        //create connection
  							$connection = mysqli_connect("localhost","root","","auditorium booking");

								  if (mysqli_connect_error()){
  										die('Connect error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  											}

								  else
  								  {
                        
                       $result=mysqli_query($connection,"select * from booking where DATE='$date'") ;
                  
                       $row=mysqli_num_rows($result);
                          if($row == 1)
                          {
                  
                                echo "slot not available";

                             }


                          
                              else
                              {
                                
                                

                                $sql = "INSERT INTO `booking`(`NAME`, `DATE`, `STARTTIME`, `ENDTIME`, `AUDINAME`, `PURPOSE`) VALUES ('$username','$date','$starttime','$endtime','$audiname','$purpose')";  

                            if(mysqli_query($connection,$sql))
                              {
                                echo "Request is sent. If accepted ,a conformation mail will be sent to your email";
                              }
                           else
                            { 
                                echo "Error: ".$sql ."<br>".$connection->error;
                            }

                              mysqli_close($connection);
                              }

        

                        
  								  	    
                   }

     				}

					else{
							echo "Enter the purpose";
							die();
						}

				}			

				else{
						echo "Enter the auditorium name";
						die();
					}		

			
			}

		

		else{
				echo "Enter the end time";
				die();
			}
			
	}

	else{
			echo "Enter the start time";
			die();
		}

}
else{
	echo "Enter the date";
	die();
}

}
else{
	echo "User's name should not be empty";
	die();
}


?>