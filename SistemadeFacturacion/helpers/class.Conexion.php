
<?php
     class Conexion 
     {
          private $conn;
          public function __construct(){               
               $serverName = "DESKTOP-ISJ34KL\PRUEBAS";
               $connectionOptions = array( "Database"=>"facturacion");    
                          
               $this->conn = sqlsrv_connect($serverName, $connectionOptions);             
               // [A.2] Connect, which proceeds to issue a query command.  
               $conn = sqlsrv_connect($serverName, $connectionOptions);    
               if ($conn === true) {  
                    echo "Connection was established";  
                    echo "<br>";                                                                      
               }   
               else
               {
                    echo "Error in connection execution";  
                    echo "<br>";  
                    die(print_r(sqlsrv_errors(), true));                    
               }                       
          }
          public function getConeccion(){
               return $this->conn;               
           }
          public function closeConnection(){
               sqlsrv_close();
          }
           public function sentrequest($params, $tsql){
                //Insert Query
               echo ("Inserting a new row into table" . PHP_EOL);
               // $tsql= "INSERT INTO TestSchema.Employees (para) VALUES (?,?);";
               // $params = array('Jake','United States');
               $getResults= sqlsrv_query((getConeccion()), $tsql, $params);
               $rowsAffected = sqlsrv_rows_affected($getResults);
               if ($getResults == FALSE or $rowsAffected == FALSE)
               {
                    die(FormatErrors(sqlsrv_errors()));
               }
               echo ($rowsAffected. " row(s) inserted: " . PHP_EOL);
               sqlsrv_free_stmt($getResults);
           } 
           public function updaterequest($params, $tsql, $userToUpdate)
           {
                //Update Query
               //  $userToUpdate = 'Nikita';
               //  $tsql= "UPDATE TestSchema.Employees SET Location = ? WHERE Name = ?";
               //  $params = array('Sweden', $userToUpdate);
                echo("Updating Location for user " . $userToUpdate . PHP_EOL);
           
                $getResults= sqlsrv_query((getConeccion()), $tsql, $params);
                $rowsAffected = sqlsrv_rows_affected($getResults);
                if ($getResults == FALSE or $rowsAffected == FALSE)
                die(FormatErrors(sqlsrv_errors()));
                echo ($rowsAffected. " row(s) updated: " . PHP_EOL);
                sqlsrv_free_stmt($getResults);
           }
           public function deleterequest($params, $tsql, $userToDelete)
           {
                //Delete Query
               //  $userToDelete = 'Jared';
               //  $tsql= "DELETE FROM TestSchema.Employees WHERE Name = ?";
               //  $params = array($userToDelete);
                $getResults= sqlsrv_query((getConeccion()), $tsql, $params);
                echo("Deleting user " . $userToDelete . PHP_EOL);
                $rowsAffected = sqlsrv_rows_affected($getResults);
                if ($getResults == FALSE or $rowsAffected == FALSE)
                die(FormatErrors(sqlsrv_errors()));
                echo ($rowsAffected. " row(s) deleted: " . PHP_EOL);
                sqlsrv_free_stmt($getResults);
           }
           public function readrequest($tsql)
           {                
                //Read Query
               //  $tsql= "SELECT Id, Name, Location FROM TestSchema.Employees;";
                $getResults= sqlsrv_query((getConeccion()), $tsql);
                echo ("Reading data from table" . PHP_EOL);
                if ($getResults == FALSE)
                die(FormatErrors(sqlsrv_errors()));
                while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
                echo ($row['Id'] . " " . $row['Name'] . " " . $row['Location'] . PHP_EOL);                    
                }
                $resultado = sqlsrv_free_stmt($getResults);
           
                function FormatErrors( $errors )
                {
                /* Display errors. */
                echo "Error information: ";
           
                    foreach ( $errors as $error )
                    {
                         echo "SQLSTATE: ".$error['SQLSTATE']."";
                         echo "Code: ".$error['code']."";
                         echo "Message: ".$error['message']."";
                    }
                }
                return ($resultado);
           }
           public function recorrer($x) {
               return mysqli_fetch_array($x);
          }       
     }         
?>
          <!-- class Conexion extends mssql
          {               
                   
                              //Insert Query
                              echo ("Inserting a new row into table" . PHP_EOL);
                              // $tsql= "INSERT INTO TestSchema.Employees (Name, Location) VALUES (?,?);";
                              $tsql = ($x);
                              $params = array('Jake','United States');
                              $getResults= sqlsrv_query($conn, $tsql, $params);
                              $rowsAffected = sqlsrv_rows_affected($getResults);
                              if ($getResults == FALSE or $rowsAffected == FALSE)
                              die(FormatErrors(sqlsrv_errors()));
                              echo ($rowsAffected. " row(s) inserted: " . PHP_EOL);

                              sqlsrv_free_stmt($getResults);


                              // while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {     
                              //      echo $row['Name'] . "<br/>" ;
                              // } 
                              return  sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
                              sqlsrv_free_stmt($stmt);  
                              sqlsrv_close( $conn); 
                              break;  
                         } else {    
                              // [A.4] Check whether the error code is on the whitelist of transients.  
                              $isTransientError = false;  
                              $errorCode = '';
                              if (($errors = sqlsrv_errors()) != null) {
                                   foreach ($errors as $error) {  
                                        $errorCode = $error['code'];
                                        $isTransientError = in_array($errorCode, $arrayOfTransientErrors);
                                        if ($isTransientError) {
                                             break;
                                        }
                                   }
                              }  
                              if (!$isTransientError) { 
                                   // it is a static persistent error...
                                   echo("Persistent error suffered with error code = $errorCode. Program will terminate.");  
                                   echo "<br>";  
                                   // [A.5] Either the connection attempt or the query command attempt suffered a persistent error condition.  
                                   // Break the loop, let the hopeless program end.  
                                   exit(0);  
                              }  
                              // [A.6] It is a transient error from an attempt to issue a query command.  
                              // So let this method reloop and try again. However, we recommend that the new query  
                              // attempt should start at the beginning and establish a new connection.  
                              if ($cc >= $maxCountTriesConnectAndQuery) {  
                                   echo "Transient errors suffered in too many retries - $cc. Program will terminate.";  
                                   echo "<br>";  
                                   exit(0);  
                              }  
                              echo("Transient error encountered with error code = $errorCode. Program might retry by itself.");    
                              echo "<br>";  
                              echo "$cc attempts so far. Might retry.";  
                              echo "<br>";  
                              // A very simple retry strategy, a brief pause before looping.  
                              sleep(1*$secondsBetweenRetries);
                              return null;
                    }                                                     
               }
               public function sentrequest($x) {
                    $serverName = "DESKTOP-ISJ34KL\PRUEBAS";
                    $result = mssql_query( $x );
                    return $result;
               }                 
          }  
          
          // Variables to tune the retry logic.    
          $connectionTimeoutSeconds = 30;  // Default of 15 seconds is too short over the Internet, sometimes.  
          $maxCountTriesConnectAndQuery = 3;  // You can adjust the various retry count values.  
          $secondsBetweenRetries = 4;  // Simple retry strategy.  
          $errNo = 0;  
          $serverName = "DESKTOP-ISJ34KL\PRUEBAS";  
          // $connectionOptions = array("Database"=>"facturacion",  
          //      "Uid"=>"yourusername", "PWD"=>"yourpassword", "LoginTimeout" => $connectionTimeoutSeconds);  
          
          $connectionOptions = array( "Database"=>"facturacion");
          $conn = null;  
          $arrayOfTransientErrors = array('08001', '08002', '08003', '08004', '08007', '08S01'); 
          for ($cc = 1; $cc <= $maxCountTriesConnectAndQuery; $cc++) {  
               // [A.2] Connect, which proceeds to issue a query command.  
               $conn = sqlsrv_connect($serverName, $connectionOptions);    
               if ($conn === true) {  
                    echo "Connection was established";  
                    echo "<br>";  

                    $tsql = "SELECT Name FROM Production.ProductCategory";  
                    $stmt = sqlsrv_query($conn, $tsql);  
                    if ($stmt === false) {
                         echo "Error in query execution";  
                         echo "<br>";  
                         die(print_r(sqlsrv_errors(), true));  
                    }
                    while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {     
                         echo $row['Name'] . "<br/>" ;
                    }  
                    sqlsrv_free_stmt($stmt);  
                    sqlsrv_close( $conn); 
                    break;  
               } else {    
                    // [A.4] Check whether the error code is on the whitelist of transients.  
                    $isTransientError = false;  
                    $errorCode = '';
                    if (($errors = sqlsrv_errors()) != null) {
                         foreach ($errors as $error) {  
                         $errorCode = $error['code'];
                         $isTransientError = in_array($errorCode, $arrayOfTransientErrors);
                         if ($isTransientError) {
                              break;
                         }
                         }
                    }  
                    if (!$isTransientError) { 
                         // it is a static persistent error...
                         echo("Persistent error suffered with error code = $errorCode. Program will terminate.");  
                         echo "<br>";  
                         // [A.5] Either the connection attempt or the query command attempt suffered a persistent error condition.  
                         // Break the loop, let the hopeless program end.  
                         exit(0);  
                    }  
                    // [A.6] It is a transient error from an attempt to issue a query command.  
                    // So let this method reloop and try again. However, we recommend that the new query  
                    // attempt should start at the beginning and establish a new connection.  
                    if ($cc >= $maxCountTriesConnectAndQuery) {  
                         echo "Transient errors suffered in too many retries - $cc. Program will terminate.";  
                         echo "<br>";  
                         exit(0);  
                    }  
                    echo("Transient error encountered with error code = $errorCode. Program might retry by itself.");    
                    echo "<br>";  
                    echo "$cc attempts so far. Might retry.";  
                    echo "<br>";  
                    // A very simple retry strategy, a brief pause before looping.  
                    sleep(1*$secondsBetweenRetries);  
               }  
               // [A.3] All has gone well, so let the program end.  
          }  
     ?> -->
