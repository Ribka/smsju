<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $sms_issue->getId() ?></td>
    </tr>
    <tr>
      <th>Exit number:</th>
      <td><?php echo $sms_issue->getExitNumber() ?></td>
    </tr>
    <tr>
      <th>Issue type:</th>
      <td><?php echo $sms_issue->getIssueType() ?></td>
    </tr>
    <tr>
      <th>Item:</th>
      <td><?php echo $sms_issue->getItemId() ?></td>
    </tr>
    <tr>
      <th>Reciept referrence:</th>
      <td><?php echo $sms_issue->getRecieptReferrenceId() ?></td>
    </tr>
    <tr>
      <th>Serial number:</th>
      <td><?php echo $sms_issue->getSerialNumber() ?></td>
    </tr>
    <tr>
      <th>Storekeeper:</th>
      <td><?php echo $sms_issue->getStorekeeperId() ?></td>
    </tr>
    <tr>
      <th>Borrower:</th>
      <td><?php echo $sms_issue->getBorrowerId() ?></td>
    </tr>
    <tr>
      <th>Quantity:</th>
      <td><?php echo $sms_issue->getQuantity() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $sms_issue->getDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $sms_issue->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sms_issue->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('issue/edit?id='.$sms_issue->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('issue/index') ?>">List</a>
