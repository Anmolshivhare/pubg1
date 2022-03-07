<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}



</style>
</head>
<body>




<table>
  <tr>
    <th>Id</th>
    <th>Squad Team Name </th>
    <th>Player1</th>
    <th>Player2</th>
    <th>Player3</th>
    <th>Player4</th>
    <th>Phone</th>
    <th>Gmail</th>
    <th>City</th>
    
   

  </tr>

  <?php
  
  
  include('data.php');
  $sql="SELECT *FROM pubgform1";
  $restult=$conn->query($sql);
  while($row=$restult->fetch_assoc()){?>
  

  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['squad'];?></td>
    <td><?php echo $row['player1'];?></td>
    <td><?php echo $row['player2'];?></td>
    <td><?php echo $row['player3'];?></td>
    <td><?php echo $row['player4'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['gmail'];?></td>
    <td><?php echo $row['city'];?></td>
   


   
  </tr>
  <?php }?>
  
</table>

</body>
</html>
