<h1>Sms returns List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Return type</th>
      <th>Exit</th>
      <th>Item</th>
      <th>Return number</th>
      <th>Employee</th>
      <th>Store keeper</th>
      <th>Quantity</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sms_returns as $sms_return): ?>
    <tr>
      <td><a href="<?php echo url_for('return/show?id='.$sms_return->getId()) ?>"><?php echo $sms_return->getId() ?></a></td>
      <td><?php echo $sms_return->getReturnType() ?></td>
      <td><?php echo $sms_return->getExitId() ?></td>
      <td><?php echo $sms_return->getItemId() ?></td>
      <td><?php echo $sms_return->getReturnNumber() ?></td>
      <td><?php echo $sms_return->getEmployeeId() ?></td>
      <td><?php echo $sms_return->getStoreKeeperId() ?></td>
      <td><?php echo $sms_return->getQuantity() ?></td>
      <td><?php echo $sms_return->getDescription() ?></td>
      <td><?php echo $sms_return->getCreatedAt() ?></td>
      <td><?php echo $sms_return->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('return/new') ?>">New</a>
