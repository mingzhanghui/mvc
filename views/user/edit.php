<h1>User: Edit</h1>

<?php
// print_r($this->user);
?>

<form method="post" action="<?php echo URL; ?>user/editSave/<?php echo $this->user['id']; ?>">
  <table>
    <tr><td>Login</td><td><input type="text" name="login" value="<?php echo $this->user['login']; ?>"/></td></tr>
    <tr><td>Password</td><td><input type="text" name="password" /></td></tr>
    <tr>
      <td>Role</td>
      <td>
        <select name="role">
          <option value="default" <?php if($this->user['role'] == 'default') echo "selected"; ?>>Default</option>
          <option value="admin" <?php if($this->user['role'] == 'admin') echo "selected"; ?>>Admin</option>
          <option value="owner" <?php if($this->user['role'] == 'owner') echo "selected"; ?>>Owner</option>
        </select>
      </td>
    </tr>
    <tr><td></td><td><input type="submit" value="Submit" /></td></tr>
  </table>
</form>