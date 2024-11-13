<style>
  td,
  th {
    padding: 10px !important;
  }

  td a.delbtn {
    color: #000;
    text-decoration: none;
    border: 2px solid red;
    padding: 6px;
    background-color: tomato;
    border-radius: 20px;
  }

  td a:hover.delbtn {
    color: #fff;
  }

  td a.editbtn {
    color: #000;
    text-decoration: none;
    border: 2px solid #000;
    padding: 6px;
    background-color: green;
    border-radius: 20px;
  }

  td a:hover.editbtn {
    color: #ffeb00;
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
    if (mysqli_num_rows($data) > 0) {
      $id = 1;
      foreach ($data as $d) {
        echo "<tr>
            <td>" . $id . "</td>
            <td>" . $d['firstName'] . "</td>
            <td>" . $d['lastName'] . "</td>
            <td>" . $d['phonenumber'] . "</td>
            <td>" . $d['email'] . "</td>
            <td>" . $d['city'] . "</td>
            <td>" . $d['age'] . "</td>
            <td>" . $d['code'] . "</td>
            <td>" . $d['username'] . "</td>
            <td>" . $d['status'] . "</td>
            <td><a class='delbtn' href='delete.php?id=$d[id]' >Delete</a>
            <a class='editbtn' href='edit_form.php?id=$d[id]'>Edit</a>
            </td>
            </tr>";
        $id++;
      }
    } else {
      echo "<tr><td colspan='11'>No record found</td></tr>";
    }


    /* if ($total != 0) {
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
            <td><a class='delbtn' href='delete.php?id=$result[id]' >Delete</a>
            <a class='editbtn' href='edit_form.php?id=$result[id]'>Edit</a>
            </td>
            </tr>";
        $id++;
      }
    } else {
      echo "<tr><td colspan='11'>No record found</td></tr>";
    } */

    ?>
  </tbody>
</table>
