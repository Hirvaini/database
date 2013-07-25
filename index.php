<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Ασθενείς</h1>
<?php
//a test coment for git

$con = mysqli_connect("localhost","tsitobello","ecvp18","joomladb");
mysqli_query(  $con, "SET NAMES utf8" );
mysqli_query( $con, "SET CHARACTER SET utf8" );
$result =mysqli_query($con,"SELECT * FROM tableprefix_patients");
mysqli_query($con,"INSERT INTO  tableprefix_patients (surname, name, Amka, tel, dateofbirth,dateofexam, diagnosis, cure )
VALUES ('Joe', 'Santriani','35','87687878','1978','2012','bjksdbkjbvjhbfjhvbsjkb','kjvbjskbvkjsbkjmsbdjm')");
?>

  <table border='2'>
<tr>
<th>α/α</th>
<th>Επώνυμο </th>
<th>Όνομα </th>
<th>Α.Μ.Κ.Α. </th>
<th>Τηλέφωνο </th>
<th>Ημ/νια Γέννησης </th>
<th>Ημ/νια εξέτασης</th>
<th>Διάγνωση</th>
<th>Θεραπεία</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
  {?>
  <tr>
  <td> <?php echo $row['id']; ?></td>
  <td> <?php echo $row['surname']; ?></td>
  <td> <?php echo $row['name']; ?></td>
  <td> <?php echo $row['amka']; ?></td>
  <td> <?php echo $row['tel']; ?></td>
  <td> <?php echo $row['dateofbirth']; ?></td>
  <td> <?php echo $row['dateofexam']; ?></td>
  <td> <?php echo $row['diagnosis']; ?></td>
  <td> <?php echo $row['cure']; ?></td>
  </tr>
  <?php } 
mysqli_close($con);?>

 </table>
    </body>
</html>
