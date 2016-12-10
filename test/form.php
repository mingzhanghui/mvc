<?php
/**
 * Created by PhpStorm.
 * User: mzh
 * Date: 12/10/16
 * Time: 4:20 PM
 */
require '../config.php';
require '../libs/Form.php';
require '../libs/Database.php';

if (isset($_REQUEST['run'])) {
  try {
    $form = new Form();

    $form ->post('name')->val('minlength', 1)
          ->post('age')->val('minlength', 2)->val('digit')
          ->post('gender');
    $form->submit();
    echo 'The form passed!';
    $data = $form->fetch();

    echo '<pre>';
    print_r($data);
    echo '</pre>';

    $db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    $db->insert('person', $data);

  } catch (Exception $e) {
    echo $e->getMessage();
  }
}

?>

<form method="POST" action="?run">
  <table>
    <tr>
      <td><label for="name">Name</label></td>
      <td><input type="text" name="name" id="name" /></td>
    </tr>
    <tr>
      <td><label for="age">Age</label></td><td>
        <input type="text" name="age" id="age"/></td></tr>
    <tr>
      <td>Gender</td>
      <td>
        <select name="gender">
          <option value="m">Male</option>
          <option value="f">Female</option>
        </select>
      </td>
    </tr>
    <tr><td></td><td><input type="submit" value="Submit" /></td></tr>
  </table>
</form>
