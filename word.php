<?php 
include ("registerdb.php");

function databaseOutput() {

  $dbQuery = $conn->prepare("select * from sws");
  $dbQuery->execute();

  while ($dbRow = $dbQuery->fetch(PDO::FETCH_ASSOC)) {
?>
    <tr>
      <td><?php echo $dbRow['id']; ?></td>
      <td><?php echo $dbRow['question']; ?></td>
      <td><?php echo $dbRow['marks']; ?></td>
    </tr>
<?php    

  }

} // end of function databaseOutput()

//if ($_POST['submit_docs']) { // word output

  header("Content-Type:application/msword");
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header("content-disposition: attachment;filename=test.docx");
databaseOutput();
exit;
?>
