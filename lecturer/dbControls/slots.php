<?php
$sql = "SELECT * FROM seatcount";
$slotResult = mysqli_query($conn,$sql);
 ?>



 <div class="form-row">

     <div class="form-group col-md-6">



         <select id="slotTime" class="form-control" name="slot">
             <option value="0">Select a Slot</option>
             <?php
                foreach ($slotResult as $sr) {
               // print_r($sr);

               ?>
               <!-- Array ( [id] => 1 [slotNo] => 1 [seatCount] => 8 [time] => 15:00:00 [day] => Monday ) -->
             <option value="<?= $sr['slotNo'] ?>"  >

               <?= $sr['time'] ?> - <?= $sr['end'] ?>    <?= $sr['day'] ?></option>

             <?php
              }?>
        </select>




            <?php
                if(isset($_SESSION['slot'])){
             ?>

               <p style="color:red">Select A valid slot</p>

             <?php
              }
              ?>


            <?php
                if(isset($_SESSION['seatLimit'])){
             ?>

               <p style="color:red">Seat full.Please select another slot.</p>

             <?php
              }
              ?>


     </div>

 </div>
