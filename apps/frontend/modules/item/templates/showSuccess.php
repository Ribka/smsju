<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $sms_item->getId() ?></td>
    </tr>
    <tr>
      <th>Item name:</th>
      <td><?php echo $sms_item->getItemName() ?></td>
    </tr>
    <tr>
      <th>Group:</th>
      <td><?php echo $sms_item->getGroupId() ?></td>
    </tr>
    <tr>
      <th>Family:</th>
      <td><?php echo $sms_item->getFamilyId() ?></td>
    </tr>
    <tr>
      <th>Item code:</th>
      <td><?php echo $sms_item->getItemCode() ?></td>
    </tr>
    <tr>
      <th>Item type:</th>
      <td><?php echo $sms_item->getItemType() ?></td>
    </tr>
    <tr>
      <th>Item quantity:</th>
      <td><?php echo $sms_item->getItemQuantity() ?></td>
    </tr>
    <tr>
      <th>Item measuring unit:</th>
      <td><?php echo $sms_item->getItemMeasuringUnit() ?></td>
    </tr>
    <tr>
      <th>Item description:</th>
      <td><?php echo $sms_item->getItemDescription() ?></td>
    </tr>
    <tr>
      <th>Item store:</th>
      <td><?php echo $sms_item->getItemStoreId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $sms_item->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sms_item->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('item/edit?id='.$sms_item->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('item/index') ?>">List</a>
