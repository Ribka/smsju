<h1>Sms requests List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Requested by</th>
      <th>Requested item</th>
      <th>Requested quantity</th>
      <th>Description</th>
      <th>Request status</th>
      <th>Given quantity</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sms_requests as $sms_request): ?>
    <tr>
      <td><a href="<?php echo url_for('request/show?id='.$sms_request->getId()) ?>"><?php echo $sms_request->getId() ?></a></td>
      <td><?php echo $sms_request->getRequestedBy() ?></td>
      <td><?php echo $sms_request->getRequestedItem() ?></td>
      <td><?php echo $sms_request->getRequestedQuantity() ?></td>
      <td><?php echo $sms_request->getDescription() ?></td>
      <td><?php echo $sms_request->getRequestStatus() ?></td>
      <td><?php echo $sms_request->getGivenQuantity() ?></td>
      <td><?php echo $sms_request->getCreatedAt() ?></td>
      <td><?php echo $sms_request->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('request/new') ?>">New</a>
