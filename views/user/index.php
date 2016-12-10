<h1>User</h1>

<form method="post" action="<?php echo URL; ?>user/create">
  <table>
    <tr><td>Login</td><td><input type="text" name="login" /></td></tr>
    <tr><td>Password</td><td><input type="text" name="password" /></td></tr>
    <tr>
      <td>Role</td>
      <td>
        <select name="role">
          <option value="default">Default</option>
          <option value="admin">Admin</option>
        </select>
      </td>
    </tr>
    <tr><td></td><td><input type="submit" value="Submit" /></td></tr>
  </table>
</form>

<hr />

<table>
  <thead><th>ID</th><th>login</th><th>Role</th><th>Operation</th></thead>
  <tbody>
  <?php
  foreach ($this->userList as $key => $value) {
    echo '<tr>';
    echo '<td>' . $value['id'] . '</td>';
    echo '<td>' . $value['login'] . '</td>';
    echo '<td>' . $value['role'] . '</td>';
    echo '<td>
             <a href="'.URL.'user/edit/'.$value['id'].'">Edit</a>
             <a href="'.URL.'user/delete/'.$value['id'].'">Delete</a>
          </td>';
    echo '</tr>';
  }
  ?>
  </tbody>
</table>
