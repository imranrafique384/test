<h1>Phone datas List</h1>

<table>
  <thead>
    <tr>
      <th>Phone</th>
      <th>User</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Phone</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($phone_datas as $phone_data): ?>
    <tr>
      <td><a href="<?php echo url_for('panel/show?phone_id='.$phone_data->getPhoneId()) ?>"><?php echo $phone_data->getPhoneId() ?></a></td>
      <td><?php echo $phone_data->getUserId() ?></td>
      <td><?php echo $phone_data->getFirstName() ?></td>
      <td><?php echo $phone_data->getLastName() ?></td>
      <td><?php echo $phone_data->getPhone() ?></td>
      <td><?php echo $phone_data->getCreatedAt() ?></td>
      <td><?php echo $phone_data->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('panel/new') ?>">New</a>
