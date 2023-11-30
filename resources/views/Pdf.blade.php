<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title> E-Mart Online Store </title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .invoice {
            width: 90%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .invoice-header h1 {
            margin: 0;
        }

        .invoice-details {
            margin-bottom: 20px;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .invoice-table th,
        .invoice-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .invoice-total {
            text-align: right;
        }
    </style>
</head>
<body>

    

<div class="invoice">
    <div class="invoice-header">

       
       
        <h2><center><u>E-Mart | Online Store </u> </h2>
        <p>Date: {{ date('d-m-y') }} </center></p> 
    </div>

    <div class="invoice-details">
       <h3 style="right"><B>Bill To:</B> </h3>

        <p><B>Customer Name: </B> Umang Modi</p>
        <p><B>Email: </B> Umangmodi003@gmail.com</p>
        <p><B>Phone No: </B> +91 93137 44239</p>
        <p><B>State: </B>  Patan Gujarat</p>
        <p><B>Pincode: </B> 384265</p>
        <p><B>Address: </B> Golsheri, Daliyano Pado</p>
      
    </div>
    
    <br>

    <table class="invoice-table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Brands</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ORD-MJXXRVRN35</td>
                <td>Apple iPhone 15 Pro Max (256 GB) - Natural Titanium</td>
                <td>Apple</td>
                <td>1</td>
                <td>1,31,500</td>
                <td>1,31,500</td>
            </tr>
            
        </tbody>
    </table>

    <br>

    <div class="invoice-total">
        <p>Total Payment: 1,31,500</p>
    </div>

    

    <center>
      
    <h3>Thank you for your Order. We Hope You've Enjoying Shopping!</h3>
    <p>Authority by Umang Modi</p> 
    </center>

</div>



</body>
</html>
