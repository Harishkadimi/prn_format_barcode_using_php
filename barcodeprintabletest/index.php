<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Barcode Generator </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <div style="margin: 10%;">
      <h2 class="text-center">BARCODE RECIPT PRINTER</h2>
      <form class="form-horizontal" method="post" action="NINReciptpage.php" target="_blank">
        <div class="form-group">
          <label class="control-label col-sm-2" for="districtName">District Name:</label>
          <div class="col-sm-10">
            <input autocomplete="OFF" type="text" class="form-control" id="districtName" name="districtName" placeholder="ex:DO3" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="talukName">Taluk/Block Name</label>
          <div class="col-sm-10">
            <input autocomplete="OFF" type="text" class="form-control" id="talukName" placeholder="ex:SD03" name="talukName" required>
          </div>
        </div>        
        <div class="form-group">
          <label class="control-label col-sm-2" for="villageId">Village Id</label>
          <div class="col-sm-10">
            <input autocomplete="OFF" type="text" class="form-control" id="villageId" placeholder="ex:V006" name="villageId" required>
          </div>
        </div>        
        <div class="form-group">
          <label class="control-label col-sm-2" for="villageName">Village Name</label>
          <div class="col-sm-10">
            <input autocomplete="OFF" type="text" class="form-control" id="villageName" placeholder="ex:VILLAGE NAME" name="villageName" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="headofHHid">Household HH id</label>
          <div class="col-sm-10">
            <input autocomplete="OFF" type="text" class="form-control" id="headofHHid"  placeholder="ex:HH03"name="headofHHid" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="headofHHname">Head of HH Name</label>
          <div class="col-sm-10">
            <input autocomplete="OFF" type="text" class="form-control" id="headofHHname"  placeholder="ex:HEAD OF HH NAME"name="headofHHname" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="patient_id">Patient Id</label>
          <div class="col-sm-10">
            <input autocomplete="OFF" type="text" class="form-control" id="patient_id"  placeholder="ex:P08"name="patient_id" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="patient_name">Patient Name</label>
          <div class="col-sm-10">
            <input autocomplete="OFF" type="text" class="form-control" id="patient_name"  placeholder="ex:PATIENT NAME"name="patient_name" required>
          </div>
        </div>



        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>

</html>