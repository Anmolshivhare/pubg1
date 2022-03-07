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
    <th>name</th>
    <th>phone</th>
    <th>message</th>
    

  </tr>

  <?php
  include('data.php');
  $sql="SELECT *FROM pubgform2";
  $restult=$conn->query($sql);
  while($row=$restult->fetch_assoc()){?>
  

  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['message'];?></td>
    
    


   
  </tr>
  <?php }?>
  
</table>

</body>
</html>
