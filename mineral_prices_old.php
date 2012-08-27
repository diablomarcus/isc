<?php include("header.php"); ?>
<?php include("table_head.php"); ?>
        <br>
        <script type="text/javascript">
        function getContentFromIframe(iFrameName)
        {

          //var myIFrame = iFrameName.contentWindow ? frameRef.contentWindow.document : frameRef.contentDocument;
          alert("Value is " + parent.document.getElementById(myIFrameName).src);
          document.write(parent.document.getElementById(iFrameName).src);
          document.getElementById("dumb").innerHTML=getElementById(iFrameName);
          
          var tableVal = myIFrame.getElementById('tblMain');
          if (tableVal != null && tableVal != '') {
             alert("Value of border is " + myIFrame.getElementById('tblMain'));
          } else {
             alert("Failed :(");
          }

        }
        </script>

        <table width="700" height="148" border="0" cellpadding="0" cellspacing="0">
          <tr valign="top">
            <td width="345" align="left">
            <iframe id='google_doc' width='362' scrolling='no' height='1250' style="background-color:transparent" allowtransparency="true" frameborder='0' src='https://docs.google.com/spreadsheet/pub?key=0AncM79JXO4EWdE9uZElSNHFJRmw2ajVSMnFUOVF5MEE&single=true&gid=2&range=a1%3Ac65&output=html&widget=false'></iframe>
            </td>
            <td id="dumb" width="10">&nbsp;</td>
            <td width="345" align="left">
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p><a href="#" onclick="getContentFromIframe('google_doc')">Get the content</a></p>
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
