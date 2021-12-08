@php
    
    $amount = $info[0]['amount'];

    $products = [];
    $myfile = fopen("assets/txt/".$kirimcode.".txt", "r") or die("Unable to open file!");    
    for ($i=0; $i < $amount; $i++) { 
        $products[$i]['id'] = fgets($myfile);
        $products[$i]['roti'] = fgets($myfile);
        $products[$i]['jumlah'] = (int)fgets($myfile);
        $products[$i]['harga'] = (int)fgets($myfile);
    }
    fclose($myfile);

    $id = auth()->user()->name;

@endphp

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice-{{ $id }}-{{ $kirimcode }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Favicons -->
    <link href="../assets/img/logoo.png" rel="icon">
    <link href="../assets/img/logoo.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style4.css" rel="stylesheet">
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <br><br>
    <div class="invoice-box" id="root">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="../assets/img/logoo.png" style="width:150px;">
                            </td>
                            
                            <td>
                                Invoice #<br>
                                Created : {{ $info[0]->created_at }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <h3>GAL</h3>
                                <p>Cake & Pastry</p>
                            </td>
                            
                            <td>
                                <p>
                                    <b>Gal Cake & Pastry</b><br>
                                    Call/WhatsApp : +6282260526573 <br>
                                    Instagram : @_galihnugraha
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="item"><td></td></tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <div class="row">
                            <div class="col-md-3">
                                <p><b>Order Code</b> : </p>
                            </div>

                            <div class="col-md-8">
                                <p><?= $info[0]['file'] ?></p>
                            </div>                
                        </div>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    via Bank #
                </td>
            </tr>

            <tr class="details">
                <td>
                    Transfer
                </td>
                
                <td>
                    BRI (Bank Rakyat Indonesia)
                </td>
            </tr>

            <tr class="item"><td></td></tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <div class="row">
                            <div class="col-md-3">
                                <p><b>Shipping Address</b> : </p>
                            </div>

                            <div class="col-md-8">
                                <p><?= $info[0]['alamat'] ?></p>
                            </div>                
                        </div>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Price
                </td>
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr class="item">
                <td>
                    <?= ucwords($product['roti']);  ?> ( <b><?= $product['jumlah'] ?></b> piece(s) )
                </td>
                
                <td>
                    <?= number_format(($product['harga']*$product['jumlah']),0,',','.'); ?> IDR
                </td>
            </tr>
            <?php endforeach ?>

             <tr class="item last">
                <td>
                    Postage Fee
                </td>
                
                <td>
                    15.000 IDR
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total : <?= number_format($info[0]['harga'],0,',','.'); ?> IDR
                </td>
            </tr>
        </table>
    </div>

    <br><br>
    <div class="text-center">
        <button class="btn btn-warning" onclick="test()">Download as PDF</button>
    </div>
    <br><br><br>

    <script src="../assets/js/dist/html2pdf.bundle.min.js"></script>

    <script>
      function test() {
        // Get the element.
        var element = document.getElementById('root');

        // Generate the PDF.
        html2pdf().from(element).set({
          margin: 1,
          filename: "invoice-<?= $id ?>-<?= $kirimcode ?>.pdf",
          html2canvas: { scale: 2 },
          jsPDF: {orientation: 'portrait', unit: 'in', format: 'letter', compressPDF: true}
        }).save();
      }
    </script>
</body>
</html>