<!-- <!DOCTYPE html>
<html>
<body>
  
        Warning: Use a specific version in production. (e.g. https://cdn.jsdelivr.net/npm/dynamsoft-javascript-barcode@x.x.x/dist/dbr.min.js)
        Please visit https://www.dynamsoft.com/CustomerPortal/Portal/TrialLicense.aspx to get trial license.

    <script src="https://cdn.jsdelivr.net/npm/dynamsoft-javascript-barcode@7/dist/dbr.min.js" data-productKeys="LICENSE-KEY"></script>
    <script>
        let scanner = null;
        Dynamsoft.BarcodeScanner.createInstance({
            onFrameRead: results => {console.log(results);},
            onUnduplicatedRead: (txt, result) => {alert(txt);}
        }).then(s => {
            scanner = s;
            scanner.show();
        });
    </script>
</body>
</html> -->



<!-- next code -->
<!-- <!DOCTYPE html>
<html>
<body>

<h2>JavaScript Functions</h2>

<p>This example calls a function which performs a calculation, and returns the result:</p>

<p id="demo"></p>
<p id="res"></p>
<script>
function myFunction(msg) {
  alert(msg);
  document.getElementById("demo").innerHTML = msg;
 
}

var data ="hi ma there's some thind that i really want to talk to you";
var res = "<button type = 'button' class='btn btn-primary btn-sm w-100 mt-2 h-auto' style= 'word-wrap: break-word;' onclick ='myFunction("+'data'+")' id='hideQuestions' value='" +data + "'>" + data + "</button><br>";

document.getElementById("res").innerHTML = res;
</script>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/jsbarcode/3.3.16/barcodes/JsBarcode.code128.min.js"></script>
    <style>
        /* @media print {
  @page {
    size: 30mm 21mm;
    margin: 0;
    padding: 0;
  }
  html, body { 
    position: relative;
    width: 100%;
    height: 100%;
    max-width: 100%;
    max-height: 97%;
    margin: 0;
    padding: 0;
  }
  svg {
    width: 100%;
    height: 100%;
    max-width: 100%;
    max-height: 100%;
  }
} */
    </style>
</head>

<body>
    <!-- <svg id="code1"></svg>
<svg id="code2"></svg> -->

    <div width=100%>

        <table class="no-spacing" cellspacing="0">
            <tr>
                <td style="width:15vw">

                    <div id="barcodecontainer" style="width:100%">
                        <div id="inputdata"><img  src="barcodeimg2.png" alt=""></div> <!-- Enter the NIIN for the barcode here -->
    </div>
    </div>
    </td><br />
    <td style="width:15vw">

        <div id="barcodecontainer"  style="margin-left:5vw;width:100%">
            <div id="inputdata1"><img  src="barcodeimg2.png" size alt=""></div> <!-- Enter the NIIN for the barcode here -->
        </div>
        </div>
    </td>
    <td style="width:15vw">

        <div id="barcodecontainer" style="margin-left:5vw;width:100%">
            <div id="inputdata2"><img  src="barcodeimg2.png" alt=""></div> <!-- Enter the NIIN for the barcode here -->
        </div>
        </div>
    </td>
    </tr>
    </table>


    <script type="text/javascript">
        /* <![CDATA[ */
        function get_object(id) {
            var object = null;
            if (document.layers) {
                object = document.layers[id];
            } else if (document.all) {
                object = document.all[id];
            } else if (document.getElementById) {
                object = document.getElementById(id);
            }
            return object;
            get_object("inputdata").innerHTML = DrawHTMLBarcode_Code128A(get_object("inputdata").innerHTML, "yes", "in", 0, 2.5, .6, "bottom", "center", "", "black", "white");
            get_object("inputdata1").innerHTML = DrawHTMLBarcode_Code128A(get_object("inputdata1").innerHTML, "yes", "in", 0, 2.3, .6, "bottom", "center", "", "black", "white");
            get_object("inputdata2").innerHTML = DrawHTMLBarcode_Code128A(get_object("inputdata2").innerHTML, "yes", "in", 0, 2.4, .6, "bottom", "center", "", "black", "white");
        }
            // JsBarcode("#code1", "AD243", {
    // format: "CODE128",
    // displayValue: false
    // });
    // JsBarcode("#code2", "AD243", {
    // format: "CODE128",
    // displayValue: false
    // });
    // window.print();
    </script>


</body>
</html>