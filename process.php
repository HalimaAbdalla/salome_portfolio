<?php 
 if (isset($_POST['upload'])){

  $Userpass = $_POST['password'];
  
  $Name = $_FILES['image']['name'];
  $Tmp = $_FILES['image']['tmp_name'];
  $Size = $_FILES['image']['size'];
  $Error = $_FILES['image']['error'];
  $Type = $_FILES['image']['type'];

    // Check Email Address
     if ($Userpass=="706815661") {
        
  $Ext = explode('.', $Name);
  $Actual = strtolower(end($Ext));

  $allowed = array('jpg', 'png', 'jpeg', 'gif', 'pdf');

  if (in_array($Actual, $allowed)) {
    if ($Error==0) {
      if ($Size < 3500000) {
        $Newname = uniqid('',TRUE).'.'.$Actual;
        $Destination = 'img/uploads/'.$Newname;

        move_uploaded_file($Tmp, $Destination);
            ?>
      <script type="text/javascript">
        alert("\nYou have successfully uploaded the image file.\n");
      </script><?php
      }else{
        ?>
      <script type="text/javascript">
        alert("\nSorry, Your file is too big!\nThe maximum file capacity should is 3.5MB");
      </script>
        <?php  }
    }else{
          ?>
      <script type="text/javascript">
        alert("\nThere was an error uploading your file!");
      </script>
        <?php  }
    
  }else{
    ?>
      <script type="text/javascript">
        alert("\nSorry, You cannot upload files of this type!");
      </script><?php
  }


}else{
    ?>
      <script type="text/javascript">
        alert("\nYour Password is not Correct!\n");
      </script> <?php
  
}


}

    
?>
