<h1>Sms stock reciepts List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Recived number</th>
      <th>Item</th>
      <th>Rf</th>
      <th>Cust</th>
      <th>Reciever stockeper</th>
      <th>Quantity</th>
      <th>Unite price</th>
      <th>Total price</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sms_stock_reciepts as $sms_stock_reciept): ?>
    <tr>
      <td><a href="<?php echo url_for('reciept/show?id='.$sms_stock_reciept->getId()) ?>"><?php echo $sms_stock_reciept->getId() ?></a></td>
      <td><?php echo $sms_stock_reciept->getRecivedNumber() ?></td>
      <td><?php echo $sms_stock_reciept->getItemId() ?></td>
      <td><?php echo $sms_stock_reciept->getRfId() ?></td>
      <td><?php echo $sms_stock_reciept->getCustId() ?></td>
      <td><?php echo $sms_stock_reciept->getRecieverStockeperId() ?></td>
      <td><?php echo $sms_stock_reciept->getQuantity() ?></td>
      <td><?php echo $sms_stock_reciept->getUnitePrice() ?></td>
      <td><?php echo $sms_stock_reciept->getTotalPrice() ?></td>
      <td><?php echo $sms_stock_reciept->getDescription() ?></td>
      <td><?php echo $sms_stock_reciept->getCreatedAt() ?></td>
      <td><?php echo $sms_stock_reciept->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('reciept/new') ?>">New</a>
