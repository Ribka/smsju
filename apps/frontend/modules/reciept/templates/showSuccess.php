<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $sms_stock_reciept->getId() ?></td>
    </tr>
    <tr>
      <th>Recived number:</th>
      <td><?php echo $sms_stock_reciept->getRecivedNumber() ?></td>
    </tr>
    <tr>
      <th>Item:</th>
      <td><?php echo $sms_stock_reciept->getItemId() ?></td>
    </tr>
    <tr>
      <th>Rf:</th>
      <td><?php echo $sms_stock_reciept->getRfId() ?></td>
    </tr>
    <tr>
      <th>Cust:</th>
      <td><?php echo $sms_stock_reciept->getCustId() ?></td>
    </tr>
    <tr>
      <th>Reciever stockeper:</th>
      <td><?php echo $sms_stock_reciept->getRecieverStockeperId() ?></td>
    </tr>
    <tr>
      <th>Quantity:</th>
      <td><?php echo $sms_stock_reciept->getQuantity() ?></td>
    </tr>
    <tr>
      <th>Unite price:</th>
      <td><?php echo $sms_stock_reciept->getUnitePrice() ?></td>
    </tr>
    <tr>
      <th>Total price:</th>
      <td><?php echo $sms_stock_reciept->getTotalPrice() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $sms_stock_reciept->getDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $sms_stock_reciept->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sms_stock_reciept->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('reciept/edit?id='.$sms_stock_reciept->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('reciept/index') ?>">List</a>
