<?php
require 'pdo.php';

$select = 'SELECT * FROM registration';
$statement = $pdo->prepare($select);
$statement->execute();
$students = $statement->fetchAll(PDO::FETCH_OBJ);

?>


<html>
  <table>
          <tr>
            <th> ID </th>
            <th> First Name </th>
            <th> Middle Name </th>
            <th> Last Name </th>
            <th> Birth Day </th>
            <th> Gender </th>
            <th> Contact </th>
            <th> E-mail </th>
            <th> Home </th>
            <th> Street </th>
            <th> Barangay </th>
            <th> City </th>
            <th> Username </th>
            <th> Action </th>
          </tr>

          <?php foreach($students as $s): ?>
            <tr>
              <td><?= $s->fName; ?></td>
              <td><?= $s->mName; ?></td>
              <td><?= $s->lName; ?></td>
              <td><?= $s->bDay; ?></td>
              <td><?= $s->gender; ?></td>
              <td><?= $s->contact; ?></td>
              <td><?= $s->email; ?></td>
              <td><?= $s->home; ?></td>
              <td><?= $s->street; ?></td>
              <td><?= $s->barangay; ?></td>
              <td><?= $s->city; ?></td>
              <td><?= $s->username; ?></td>
              <td><?= $s->password; ?></td>
              <td><?= $s->repassword; ?></td>
              <td>
                <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?lName=<?= $s->lName?>"> DELETE </a>
              </td>
            </tr>
          <?php endforeach; ?>
  </table>
</html>