<?php
echo "<pre>";
print_r($_POST);
$url = 'http://3.83.164.227/hattons/myaccount/recurringinvoices/';
web_redirect($url);

public function web_redirect($url){
      
         echo "<html><head><script language=\"javascript\">
                <!--
                window.location=\"{$url}\";
                //-->
                </script>
                </head><body><noscript><meta http-equiv=\"refresh\" content=\"0;url={$url}\"></noscript></body></html>";  
 }