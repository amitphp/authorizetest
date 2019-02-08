

<form action="https://test.authorize.net/gateway/transact.dll" method="post" id="authorize_payment_form">
   <input type="hidden" name="x_login" value="37s9nGgXm">
   <input type="hidden" name="x_amount" value="1123.33">
   <input type="hidden" name="x_invoice_num" value="647603000003790001">
   <input type="hidden" name="x_relay_response" value="TRUE">
   <input type="hidden" name="x_relay_url" value="http://3.83.164.227/hattons">
 <!--  <input type="hidden" name="x_tran_key" value ="6zxmWCZ673qMQ75h"> -->
  <!--  <input type="hidden" name="x_relay_url" value="http://localhost/authorize/redirect.php"> -->
   <input type="hidden" name="x_fp_sequence" value="647603000003790001">
  <!--  <input type="hidden" name="x_currency_code" value="USD"> -->
   <input type="hidden" name="x_fp_hash" value="233936c7c78815955e9c514f1ab74123">
   <input type="hidden" name="x_show_form" value="PAYMENT_FORM">
   <input type="hidden" name="x_version" value="3.1">
   <input type="hidden" name="x_fp_timestamp" value="1549515814">
   <input type="hidden" name="x_cancel_url" value="http://3.83.164.227/hattons">
   <input type="hidden" name="x_cancel_url_text" value="Cancel Payment">
   <input type="hidden" name="x_type" value="AUTH_CAPTURE">
   <input type="hidden" name="x_test_request" value="FALSE">
   <input type="submit" style="width: 65px;" class="button" id="submit_authorize_payment_form" value="Pay"> 
    <script type="text/javascript">
                  jQuery(function(){
                     jQuery("body").block({
                           message: "<img src=\"http://3.83.164.227/hattons/wp-content/plugins/woocommerce/assets/images/ajax-loader.gif\" alt=\"Redirecting…\" style=\"float:left; margin-right: 10px;\" />Thank you for your order. We are now redirecting you to Authorize.net to make payment.",
                           overlayCSS:
                        {
                           background:       "#ccc",
                           opacity:          0.6,
                           "z-index": "99999999999999999999999999999999"
                        },
                     css: {
                           padding:          20,
                           textAlign:        "center",
                           color:            "#555",
                           border:           "3px solid #aaa",
                           backgroundColor:  "#fff",
                           cursor:           "wait",
                           lineHeight:       "32px",
                           "z-index": "999999999999999999999999999999999"
                     }
                     });
                  jQuery("#submit_authorize_payment_form").click();
               });
               </script>
               </form>

             