<?php include("header.php"); ?>
<?php include("table_head.php"); ?>
   <br>
   <script type="text/javascript">
        //Thanks to http://lucassmith.name for this section
        function formatNumber(n) {
            if (!isFinite(n)) {
                return n;
            }

            var s = ""+n, abs = Math.abs(n), _, i;

            if (abs >= 1000) {
                _  = (""+abs).split(/\./);
                i  = _[0].length % 3 || 3;

                _[0] = s.slice(0,i + (n < 0)) +
                       _[0].slice(i).replace(/(\d{3})/g,',$1');

                s = _.join('.');
            }

            return s;
        }

      function getTotalPrice()
      {
         var inputArr = document.getElementsByTagName("input");
         var priceArr = document.getElementsByClassName("item_price");
         var totalVal=0;
         for (var i = 0; i < priceArr.length; i++) {
            if (inputArr[i].value == '') { inputArr[i].value="0"; }
            totalVal+=parseFloat(inputArr[i].value.replace(/\,/g,''))*parseFloat(priceArr[i].innerHTML.replace(/\,/g,''));
         }
         var displayVal = formatNumber(parseInt(totalVal)).toString();
         document.getElementById("totalPrice").innerHTML=displayVal.concat(' ISK');
      }
   </script>

   <div class="price">
      <p id="totalPrice">&nbsp;</p>
      <p><img src="images/image_-_logo_-_ISC_grayscale_-_S.gif" width="152" height="150"></p>
   </div>
   <table width="700" height="148" border="0" cellpadding="0" cellspacing="0">
          <tr valign="top">
            <td align="left">
              <table id="price_table">
                <tr><th>Item</th><th>Price/Item&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Amount</th></tr>
                <?php
                  $current_prices = file_get_contents("https://docs.google.com/spreadsheet/pub?key=0AncM79JXO4EWdE9uZElSNHFJRmw2ajVSMnFUOVF5MEE&single=true&gid=2&output=txt");
                  $prices=explode('-', $current_prices);
                  for ($i=1; $i<(sizeof($prices)-1); $i++) {
                     $value=trim($prices[$i]);
                     $item=trim(strstr($value, "\t", true));
                     $price=trim(strstr($value, "\t"));
                     if ($price!=''){
                        echo '<tr><td class="item_label">',$item,'</td>';
                        echo '<td class="item_price">',$price,'</td>';
                        echo '<td><input onblur="getTotalPrice()" class="price" type="text" name="',$item,'" value="0" /></td></tr>';
                     }else{
                        echo '<tr><td></td></tr>'; }
                  }
                ?>
              </table>
            </td>
            <td id="dumb" width="10">&nbsp;</td>
            <td width="345" align="left">
            
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p align="center">
          </tr>
        </table>
        <br>
      </div></td>
    </tr>
  </table>
  <table width="778" height="18" border="0" cellpadding="0" cellspacing="0" background="images/styling/bg/image_-_bg_-_table_shadow_black_001.gif">
    <tr>
      <td height="18">&nbsp;</td>
    </tr>
  </table>
  <p><br>
  </p>
</div>
</body>
</html>
