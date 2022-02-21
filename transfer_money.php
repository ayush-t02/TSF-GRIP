<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php include('nav.php'); ?>

<div class="container" style="position:absolute;top:20%;left:10%;color:white;">
        <h1 class="text-center pt-4" style="color:white;font-size:2vw;">Transfer Money</h1>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2" style="color:white;font-size:16px;font-weight:bold;">Id</th>
                            <th scope="col" class="text-center py-2" style="color:white;font-size:16px;font-weight:bold;">Name</th>
                            <th scope="col" class="text-center py-2" style="color:white;font-size:16px;font-weight:bold;">E-Mail</th>
                            <th scope="col" class="text-center py-2" style="color:white;font-size:16px;font-weight:bold;">Balance</th>
                            <th scope="col" class="text-center py-2" style="color:white;font-size:16px;font-weight:bold;">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2" style="color:white;font-size:14px;"><?php echo $rows['id'] ?></td>
                        <td class="py-2" style="color:white;font-size:14px;"><?php echo $rows['name']?></td>
                        <td class="py-2" style="color:white;font-size:14px;"><?php echo $rows['email']?></td>
                        <td class="py-2" style="color:white;font-size:14px;"><?php echo $rows['balance']?></td>
                        <td><a href="selectuserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-success">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> ss
</body>
</html>