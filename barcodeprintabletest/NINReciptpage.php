 <?php
include 'barcode128.php';
 $districtName = $_POST['districtName'];
 $talukName= $_POST['talukName'];
 $villageId= $_POST['villageId'];
 $villageName= $_POST['villageName'];
 $headofHHid= $_POST['headofHHid'];
 $headofHHname= $_POST['headofHHname'];
 $patient_id= $_POST['patient_id'];
 $patient_name= $_POST['patient_name'];
$barcodedata = $districtName .$villageId.$headofHHid.$patient_id;

?> 
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
    <style>
body {
    height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

       #receiptContainer{
            height:192px;
            width:384px; 
       }
       .right {
            float: left;
            height: 192px;
            width: 120px;
            margin-left:5px;
            margin-top:10px;
        }

        .left {
            float: left;
          
            height: 192px;
            width: 250px;
            border-radius: 20px;
            border-style: solid ;
            border-color:black;

        }
        .inner-left{
            float:left;
            margin-left: 30px;
        }
        .inner-right{
            float:left;
            margin-left: 15px;
        }
        button{
            margin-top:300px;
            
        }
    </style>

</head>

<body>
<!-------------------------- RECIPT PRINT START ------------------------------------>
    <div  id="receiptContainer">
       <div class="left">
<!-------------------------- PATIENT DETAILS START ------------------------------------>

        <div><p class="" align="center"><u><b>NIN-NUTRITION PROJECT</b></u> </p></div>

            <div class="inner-left" style="font-size:11px;line-height:5px;"align="center">
                <p>District Name</p>
                <p>Taluk/Block Name</p>
                <p>Village Id</p>
                <p>Village Name</p>
                <p>Household HH id</p>
                <p>Head of HH Name</p>
                <p>Patient Id </p>
                <p>Patient Name </p>
            </div>
            <div class="inner-right" style="font-size:11px;line-height:5px;"align="center">
                <p>:<?php echo $districtName; ?></p>
                <p>:<?php echo $talukName; ?></p>
                <p>:<?php echo $villageId; ?></p>
                <p>:<?php echo $villageName; ?></p>
                <p>:<?php echo $headofHHid; ?></p>
                <p>:<?php echo $headofHHname; ?></p>
                <p>:<?php echo $patient_id; ?></p>
                <p>:<?php echo $patient_name; ?></p>
            </div>
       </div>
<!-------------------------- PATIENT DETAILS END ------------------------------------>

<!-------------------------- BARCODE PRINT START ------------------------------------>

            <div class="right">
                <?php 
                
		            for($i=1;$i<=2;$i++){
			            echo "<p class='inline'>".bar128(stripcslashes($barcodedata))."</p>";

		            }
                ?>
           </div>
<!-------------------------- BARCODE PRINT START ------------------------------------>

    </div>
<!-------------------------- RECIPT PRINT END ------------------------------------>

    <button onclick="printContent('receiptContainer')">Print Content</button>


    <script>
        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
</body>

</html>