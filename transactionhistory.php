<?php
  include 'nav.php';
?>

	<div class="container" style="position:absolute;top:20%;left:10%;color:white;">
        <h1 class="text-center pt-4" style="color:white;font-size:2vw;">Transaction History</h1>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered" style="color:white;">
        <thead>
            <tr>
                <th class="text-center"style="color:white;font-size:16px;font-weight:bold;">S.No.</th>
                <th class="text-center" style="color:white;font-size:16px;font-weight:bold;">Sender</th>
                <th class="text-center" style="color:white;font-size:16px;font-weight:bold;">Receiver</th>
                <th class="text-center" style="color:white;font-size:16px;font-weight:bold;">Amount</th>
                <th class="text-center"style="color:white;font-size:16px;font-weight:bold;">Date & Time</th>
            </tr>
        </thead>
        <tbody style="color:white;">
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color:white;">
            <td class="py-2"style="color:white;font-size:14px;"><?php echo $rows['sno']; ?></td>
            <td class="py-2"style="color:white;font-size:14px;"><?php echo $rows['sender']; ?></td>
            <td class="py-2" style="color:white;font-size:14px;"><?php echo $rows['reciever']; ?></td>
            <td class="py-2" style="color:white;font-size:14px;"><?php echo $rows['balance']; ?> </td>
            <td class="py-2" style="color:white;font-size:14px;"><?php echo $rows['datetime']; ?> </td>
            </tr>    
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
</body>
</html>