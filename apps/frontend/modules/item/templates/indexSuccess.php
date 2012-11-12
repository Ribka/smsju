<h1>Sms items List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Item name</th>
      <th>Group</th>
      <th>Family</th>
      <th>Item code</th>
      <th>Item type</th>
      <th>Item quantity</th>
      <th>Item measuring unit</th>
      <th>Item description</th>
      <th>Item store</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sms_items as $sms_item): ?>
    <tr>
      <td><a href="<?php echo url_for('item/show?id='.$sms_item->getId()) ?>"><?php echo $sms_item->getId() ?></a></td>
      <td><?php echo $sms_item->getItemName() ?></td>
      <td><?php echo $sms_item->getGroupId() ?></td>
      <td><?php echo $sms_item->getFamilyId() ?></td>
      <td><?php echo $sms_item->getItemCode() ?></td>
      <td><?php echo $sms_item->getItemType() ?></td>
      <td><?php echo $sms_item->getItemQuantity() ?></td>
      <td><?php echo $sms_item->getItemMeasuringUnit() ?></td>
      <td><?php echo $sms_item->getItemDescription() ?></td>
      <td><?php echo $sms_item->getItemStoreId() ?></td>
      <td><?php echo $sms_item->getCreatedAt() ?></td>
      <td><?php echo $sms_item->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('item/new') ?>">New</a>
