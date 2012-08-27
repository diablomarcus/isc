<?php include("header.php"); ?>
<?php include("table_head.php"); ?>
        <br>
        <script type="text/javascript">
        </script>

        <table width="700" height="148" border="0" cellpadding="0" cellspacing="0">
          <tr valign="top">
            <td align="left">
              <table id="price_table">
                <?php
                  $current_prices = file_get_contents("https://docs.google.com/spreadsheet/pub?key=0AncM79JXO4EWdE9uZElSNHFJRmw2ajVSMnFUOVF5MEE&single=true&gid=2&output=txt");
                  $prices=explode('-', $current_prices);
                  for ($i=1; $i<(sizeof($prices)-1); $i++) {
                     $value=trim($prices[$i]);
                     $item=trim(strstr($value, "\t", true));
                     $price=trim(strstr($value, "\t"));
                     if ($price!=''){
                     echo '<tr><td class="item_label">',"$item ($price)",'</td></tr>';
                     }else{ echo '<tr><td></td></tr>'; }
                  }
                ?>
              </table>
            </td>
            <td id="dumb" width="10">&nbsp;</td>
            <td width="345" align="left">
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p align="center"><img src="images/image_-_logo_-_ISC_grayscale_-_S.gif" width="152" height="150"></p></td>
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
