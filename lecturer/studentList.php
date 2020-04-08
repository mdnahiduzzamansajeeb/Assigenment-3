
<?php

require 'dbControls/dbConnect.php';
$slotNo = $_POST['slotNo'];
$sql = "SELECT SID,email FROM slotreg WHERE slotNo = $slotNo";
$slotResult = mysqli_query($conn,$sql);



 ?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">SID</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $c=1;
        foreach ($slotResult as $slot) {
     ?>
    <tr>
      <th scope="row"><?= $c++ ?></th>
      <td><?= $slot['SID']  ?></td>
      <td><?= $slot['email']  ?></td>
    </tr>

  <?php } ?>

  </tbody>
</table>

<script type="text/javascript">
  // alert('io');
</script>
