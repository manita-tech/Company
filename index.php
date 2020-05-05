<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<center><h2>Company</h2><center>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Company Name</th>
    <th style="width:40%;">Ticker Symbol</th>
     <th style="width:40%;">Price</th>
      <th style="width:40%;">Date</th>
  </tr>
  <tr>
    <td>Apple Inc</td>
    <td>APPL</td>
    <td>293.7</td>
    <td>05/04/20</td>
  </tr>
  <tr>
    <td>Facebook Inc</td>
    <td>FB</td>
     <td>205.9	</td>
        <td>05/04/20</td>
     
  </tr>
  <tr>
    <td>Mustang Bio Inc</td>
    <td>MBIO</td>
     <td>2.740	</td>
    <td>05/04/20</td>
  </tr>
  <tr>
    <td>Ocean Bio Chem Inc</td>
    <td>OBCI</td>
    <td>6.990</td>
    <td>05/04/20</td>
  </tr>
  <tr>
    <td>Sabre Corp</td>
    <td>SABR</td>
    <td>6.845</td>
        <td>05/04/20</td>
  </tr>
 
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
