<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $sms_request->getId() ?></td>
    </tr>
    <tr>
      <th>Requested by:</th>
      <td><?php echo $sms_request->getRequestedBy() ?></td>
    </tr>
    <tr>
      <th>Requested item:</th>
      <td><?php echo $sms_request->getRequestedItem() ?></td>
    </tr>
    <tr>
      <th>Requested quantity:</th>
      <td><?php echo $sms_request->getRequestedQuantity() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $sms_request->getDescription() ?></td>
    </tr>
    <tr>
      <th>Request status:</th>
      <td><?php echo $sms_request->getRequestStatus() ?></td>
    </tr>
    <tr>
      <th>Given quantity:</th>
      <td><?php echo $sms_request->getGivenQuantity() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $sms_request->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sms_request->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('request/edit?id='.$sms_request->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('request/index') ?>">List</a>
