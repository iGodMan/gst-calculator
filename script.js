$(document).ready(function(){$("#get").click(function(){var gst_value=$('#gst_value').val().trim();var price=$('#price').val().trim();var qty=$('#qty').val().trim();var gst_status=$('#gst_status').val().trim();if(gst_status==1){var total=price*qty;var tot_price=total-(total*gst_value);var get_gst_value=total-tot_price;tn_price=get_gst_value/2;console.log(tn_price);var final_total=total;var real_price=tot_price}else{var total=price*qty;var tot_price=total+(total*gst_value);var get_gst_value=tot_price-total;tn_price=get_gst_value/2;var final_total=tot_price;var real_price=total;console.log(get_gst_value)}
$(".result").html(`
           <table class="table table-borderd table-striped text-center">
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
                        <td>`+gst_value+`</td>
                        <td>`+price+`</td>
                        <td>`+qty+`</td>
                        <td>`+total+`</td>
                        <td class="text-danger"><b>`+real_price+`</b></td>
                        <td>`+tn_price+`</td>
                        <td>`+tn_price+`</td>
                        <td>`+get_gst_value+`</td>
                        <td class="text-success"><b>`+final_total+`</b></td>
                    </tr>
                    
                </tbody>
                        
           `)})})