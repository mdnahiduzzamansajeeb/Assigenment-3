<?php

    $fName = $_POST['fName'] ;
    $lName = $_POST['lName'] ;
    $email = $_POST['email'] ;
    $SID = $_POST['SID'] ;
    $slot = $_POST['slot'] ;
    $emptyFields=0;
    // print_r($_SESSION);
                                          /**********    Empty Field Check   **************/
    if($fName=='')
    {
      $emptyFields++;
      $_SESSION['fName']=1;
    }
    if($lName=='')
    {
      $emptyFields++;
      $_SESSION['lName']=1;
    }
    if($email=='')
    {
      $emptyFields++;
      $_SESSION['email']=1;
    }
    if($SID=='')
    {
      $emptyFields++;
      $_SESSION['SID']=1;
    }
    if($slot=='0')
    {
      $emptyFields++;
      $_SESSION['slot']=1;
    }
    if($emptyFields)
        returnBack();
                                            /**********    Empty Field Check  End  **************/

    if(!sidValidation($SID,$conn)){         /**********    Valid SID Check   **************/
        $_SESSION['invalidSID'] = 1 ;
        returnBack();
      }
    if(!seatValidation($slot,$conn)){       /**********    Valid Seat Check  **************/
        $_SESSION['seatLimit'] = 1 ;
        returnBack();
      }


                                            /**********    function to return old values  **************/
    function returnBack(){
      $_SESSION['ofName'] = $_POST['fName'] ;
      $_SESSION['olName'] = $_POST['lName'] ;
      $_SESSION['oemail'] = $_POST['email'] ;
      $_SESSION['oSID' ]= $_POST['SID'] ;
      $_SESSION['oslot' ]= $_POST['slot'];
    header("location:".$_SERVER['HTTP_REFERER']);
    exit;
    }
                                            /**********    function to return old values  End  **************/

                                              /**********    Valid SID Check   **************/
    function sidValidation($SID,$conn){
        // echo 'sid.'.$SID;
        $sql = "SELECT SID FROM students";
        $result = mysqli_query($conn,$sql);
        foreach ($result as $e) {
          // print_r($e['SID']);
            if($SID==$e['SID']){
                return 1;
            }
        }
        return 0;
    }
                                              /**********    Valid SID Check  End  **************/

                                              /**********    Valid Seat Check  **************/
    function seatValidation($slot,$conn){
        // echo 'sid.'.$SID;
        $sql = "SELECT seatCount FROM seatcount WHERE slotNo =  $slot";
        $result = mysqli_query($conn,$sql);
        $result = $result->fetch_assoc();
        if($result['seatCount']>0)
            return 1;
        return 0;
    }
                                            /**********    Valid Seat Check  End  **************/
