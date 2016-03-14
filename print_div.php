<html>
  <head>
  <!--   <script type="text/javascript" src="jquery-1.4.js"></script>
    <script type="text/javascript" src="jquery.equalizecols.js"></script> -->
    <script type="text/javascript">
      $(document).ready(function(){      
          $("#wrapper, #kiri, #tengah, #kanan").equalizeCols();
      });
      </script>
      
      <style type="text/css">
      #kiri {
          float:left;
          width:100px;
         
      }
      #tengah {
          float:left;
          width:100px;
         
      }
      #kanan {
          float:left;
          /*width:100px;*/
      }
      </style>
      </head>
      <body>

<?php for ($i=0; $i <1; $i++)
   {  
    ?>
    <page size="A4">
      <div id="header">
          PT dtsindo
          <br/>
          ==========================
          <br/>
          NO Resi : 908009
      </div>
    
          <div id="kiri">
          Pelanggansss
          </div>
          <div id="tengah">
          Nominal
          </div>
          <div id="kanan">
          Jumlah
          </div>
          <BR/>

          <!-- coba -->
           <div id="kiri">
          PT  AHZ
          </div>
          <div id="tengah">
          400000<br>
          </div>
          <div id="kanan">
          3<br>
          </div>
          </page>
          <?php
          }
          ?>
          <!-- pengunaan tutorial  -->
 
</body>
</html>
<style type="text/css">
/*body {
  background: rgb(204,204,204); 
}*/
page[size="A4"] {
  background: white;
  width: 15cm;
  height: 7cm;
  display: block;
  margin: 0 auto;
  margin-bottom: 0cm;
/*  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);*/
}
@media print {
  body, page[size="A4"] {
    margin: 0;
    box-shadow: 0;
  }
}
</style>
