<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $sms_return->getId() ?></td>
    </tr>
    <tr>
      <th>Return type:</th>
      <td><?php echo $sms_return->getReturnType() ?></td>
    </tr>
    <tr>
      <th>Exit:</th>
      <td><?php echo $sms_return->getExitId() ?></td>
    </tr>
    <tr>
      <th>Item:</th>
      <td><?php echo $sms_return->getItemId() ?></td>
    </tr>
    <tr>
      <th>Return number:</th>
      <td><?php echo $sms_return->getReturnNumber() ?></td>
    </tr>
    <tr>
      <th>Employee:</th>
      <td><?php echo $sms_return->getEmployeeId() ?></td>
    </tr>
    <tr>
      <th>Store keeper:</th>
      <td><?php echo $sms_return->getStoreKeeperId() ?></td>
    </tr>
    <tr>
      <th>Quantity:</th>
      <td><?php echo $sms_return->getQuantity() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $sms_return->getDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $sms_return->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sms_return->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('return/edit?id='.$sms_return->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('return/index') ?>">List</a>
