<?php 
// print_r($_POST);
session_start();
        if(isset($_POST['username'])){
        //connection
                  include("condb.php");
        //รับค่า user & mem_password
                  $username = mysqli_real_escape_string($con,$_POST['username']);
                  $password = mysqli_real_escape_string($con,$_POST['password']);
                  $PREFIX_STUDENT = mysqli_real_escape_string($con,$_POST['PREFIX_STUDENT']);
                
                    //query 
                              $sql="SELECT * FROM personal_data
                              WHERE username='".$username."' 
                              AND password='".$password."'";
                              $result = mysqli_query($con, $sql);

                               echo $sql;

                               echo mysqli_num_rows($result);

                              //exit;
                    
                              if(mysqli_num_rows($result)==1){

                                  $row = mysqli_fetch_array($result);

                                  $_SESSION["USER_ID"] = $row["USER_ID"];
                                  $_SESSION["userlevel"] = $row["userlevel"];
                                  $_SESSION["username"] = $row["username"];   
                                  $_SESSION["imgUser"] = $row["imgUser"];     
                                      
                                  
                                  if($row['userlevel']=="user"){                                     
                                    Header("Location: user/");
                                }elseif($row['userlevel']=="Authorities"){
                                    Header("Location: authorities/");
                                }elseif($row['userlevel']=="Commission"){
                                    Header("Location: commission/");
                                }elseif($row['userlevel']=="Executive"){
                                    Header("Location: executive/");
                                }elseif($row['userlevel']=="DeputyExecutive"){
                                    Header("Location: DeputyExecutive/");
                                }

                                if($row['userlevel']=="admin"){                                     
                                          Header("Location: admin/");
                                          
                                      }elseif($row['userlevel']=="Authorities"){
                                          Header("Location: authorities/");
                                      }elseif($row['userlevel']=="Commission"){
                                          Header("Location: commission/");
                                      }elseif($row['userlevel']=="Executive"){
                                          Header("Location: executive/");
                                      }elseif($row['userlevel']=="DeputyExecutive"){
                                          Header("Location: DeputyExecutive/");
                                      }
                                      

                                    
                                    if($row['userlevel']=="teacher"){                                     
                                        Header("Location: teacher/");
                                    }elseif($row['userlevel']=="Authorities"){
                                        Header("Location: authorities/");
                                    }elseif($row['userlevel']=="Commission"){
                                        Header("Location: commission/");
                                    }elseif($row['userlevel']=="Executive"){
                                        Header("Location: executive/");
                                    }elseif($row['userlevel']=="DeputyExecutive"){
                                        Header("Location: DeputyExecutive/");
                                    }
                                 
                              }else{
                                    echo "<script>";
                                    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                                   echo "window.history.back()";
                                    echo "</script>";
                              }


                    //close else chk trim

                    //exit();




        }else{



           Header("Location: index.php"); //user & mem_password incorrect back to login again

        }
?>