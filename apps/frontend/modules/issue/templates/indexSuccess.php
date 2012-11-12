<h1>Sms issues List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Exit number</th>
      <th>Issue type</th>
      <th>Item</th>
      <th>Reciept referrence</th>
      <th>Serial number</th>
      <th>Storekeeper</th>
      <th>Borrower</th>
      <th>Quantity</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sms_issues as $sms_issue): ?>
    <tr>
      <td><a href="<?php echo url_for('issue/show?id='.$sms_issue->getId()) ?>"><?php echo $sms_issue->getId() ?></a></td>
      <td><?php echo $sms_issue->getExitNumber() ?></td>
      <td><?php echo $sms_issue->getIssueType() ?></td>
      <td><?php echo $sms_issue->getItemId() ?></td>
      <td><?php echo $sms_issue->getRecieptReferrenceId() ?></td>
      <td><?php echo $sms_issue->getSerialNumber() ?></td>
      <td><?php echo $sms_issue->getStorekeeperId() ?></td>
      <td><?php echo $sms_issue->getBorrowerId() ?></td>
      <td><?php echo $sms_issue->getQuantity() ?></td>
      <td><?php echo $sms_issue->getDescription() ?></td>
      <td><?php echo $sms_issue->getCreatedAt() ?></td>
      <td><?php echo $sms_issue->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('issue/new') ?>">New</a>
