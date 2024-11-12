<style>
  td a.delbtn {
    color: #000;
    text-decoration: none;
  }

  td a:hover.delbtn {
    color: tomato;
  }

  td a.editbtn {
    color: #000;
    text-decoration: none;
  }

  td a:hover.editbtn {
    color: green;
  }
</style>


<?php
include("config.php");

$query_for_display = "SELECT * FROM users";
$data = mysqli_query($conn, $query_for_display);

$total = mysqli_num_rows($data);

?>
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">City</th>
      <th scope="col">Age</th>
      <th scope="col">Postal Code</th>
      <th scope="col">Username</th>
      <th scope="col">Status</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php
    if ($total != 0) {
      $id = 1;
      while ($result = mysqli_fetch_assoc($data)) {
        echo "<tr>
            <td>" . $id . "</td>
            <td>" . $result['firstName'] . "</td>
            <td>" . $result['lastName'] . "</td>
            <td>" . $result['phonenumber'] . "</td>
            <td>" . $result['email'] . "</td>
            <td>" . $result['city'] . "</td>
            <td>" . $result['age'] . "</td>
            <td>" . $result['code'] . "</td>
            <td>" . $result['username'] . "</td>
            <td>" . $result['status'] . "</td>
            <td><a class='delbtn' href='delete.php?id=$result[id]' >Delete</a> /
            <a class='editbtn' href='edit.php?id=$result[id]&fname=$result[firstName]&lname=$result[lastName]&pnum=$result[phonenumber]&email=$result[email]&city=$result[city]&age=$result[age]&code=$result[code]&status=$result[status]' class='editbtn'>Edit</a>
            </td>
            </tr>";
        $id++;
      }
    } else {
      echo "<tr><td colspan='11'>No records found</td></tr>";
    }

    ?>
  </tbody>
</table>
