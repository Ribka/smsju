<h1>Sms customer organizations List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Customer</th>
      <th>Customer organization tin number</th>
      <th>Customer oraganization name</th>
      <th>Customer oraganization acronym</th>
      <th>Customer oraganization head office name</th>
      <th>Customer oraganization head office phone</th>
      <th>Customer oraganization chief executive name</th>
      <th>Customer oraganization contact person</th>
      <th>Customer oraganization designation</th>
      <th>Customer oraganization place</th>
      <th>Customer oraganization email</th>
      <th>Customer oraganization phone number</th>
      <th>Customer oraganization fax</th>
      <th>Customer oraganization web site</th>
      <th>Customer oraganization global head count</th>
      <th>Customer oraganization local head count</th>
      <th>Customer oraganization founded date</th>
      <th>Ownership</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sms_customer_organizations as $sms_customer_organization): ?>
    <tr>
      <td><a href="<?php echo url_for('organization/show?id='.$sms_customer_organization->getId()) ?>"><?php echo $sms_customer_organization->getId() ?></a></td>
      <td><?php echo $sms_customer_organization->getCustomerId() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOrganizationTinNumber() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationName() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationAcronym() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationHeadOfficeName() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationHeadOfficePhone() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationChiefExecutiveName() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationContactPerson() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationDesignation() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationPlace() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationEmail() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationPhoneNumber() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationFax() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationWebSite() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationGlobalHeadCount() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationLocalHeadCount() ?></td>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationFoundedDate() ?></td>
      <td><?php echo $sms_customer_organization->getOwnership() ?></td>
      <td><?php echo $sms_customer_organization->getCreatedAt() ?></td>
      <td><?php echo $sms_customer_organization->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('organization/new') ?>">New</a>
