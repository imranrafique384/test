<table>
  <tbody>
    <tr>
      <th>Phone:</th>
      <td><?php echo $phone_data->getPhoneId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $phone_data->getUserId() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $phone_data->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $phone_data->getLastName() ?></td>
    </tr>
    <tr>
      <th>Phone:</th>
      <td><?php echo $phone_data->getPhone() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $phone_data->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $phone_data->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('panel/edit?phone_id='.$phone_data->getPhoneId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('panel/index') ?>">List</a>
