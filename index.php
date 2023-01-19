<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//arunpandiyan.in/assets/css/bootstrap.css">
    <title>GST Calculator</title>
</head>
<style>
    .header{
        background-color: #000b76;
        
    }
    .backimg{
        background-image: url('wave.svg');
        height: 70px;
    }
    #get{
        background-color: #000b76;
        color: #fff;
    }
</style>
<body>
<header>
    <div class="header text-white text-center pt-3 pb-3">
        <h4>GST Calculator</h4>
    </div>
    <div class="backimg"></div>
</header>
    <div class="container">
        <div class="row pt-5">
            <div class="gst_val col-3">
                <label for="gst_value">GST %</label>
                <select name="" class="form-control" id="gst_value">
                    <option value="0.5">5</option>
                    <option value="0.12">12</option>
                    <option value="0.18" selected>18</option>
                    <option value="0.28">28</option>
                </select>
            </div>
            <div class="price_sec col-3">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price">
            </div>
            <div class="qty_sec col-3">
                <label for="price">Qty</label>
                <input type="number" class="form-control" id="qty">
            </div>
            <div class="gst_sec col-3">
                <label for="gst_status">with GST</label>
                <select name="" class="form-control" id="gst_status">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="submit_sec pt-4 text-center m-auto">
                <input type="button" value="Get Result" class="btn btn-primary col-4" id="get">
            </div>
        </div>
        <div class="result col-8 m-auto pt-5">
            <table class="table table-borderd table-striped">
                <tbody>
                    <tr>
                        <th>GST %</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Item Real Price</th>
                        <th>CGST</th>
                        <th>SGST</th>
                        <th>IGST</th>
                        <th>final Total</th>
                    </tr>
                    <tr id="result">
                        <td colspan="9" class="text-center">No Data</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

<script src="//arunpandiyan.in/assets/js/jquery.js"></script>
<script src="script.js"></script>
</body>
</html>