<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $sms_customer_organization->getId() ?></td>
    </tr>
    <tr>
      <th>Customer:</th>
      <td><?php echo $sms_customer_organization->getCustomerId() ?></td>
    </tr>
    <tr>
      <th>Customer organization tin number:</th>
      <td><?php echo $sms_customer_organization->getCustomerOrganizationTinNumber() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization name:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationName() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization acronym:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationAcronym() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization head office name:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationHeadOfficeName() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization head office phone:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationHeadOfficePhone() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization chief executive name:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationChiefExecutiveName() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization contact person:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationContactPerson() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization designation:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationDesignation() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization place:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationPlace() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization email:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationEmail() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization phone number:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationPhoneNumber() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization fax:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationFax() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization web site:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationWebSite() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization global head count:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationGlobalHeadCount() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization local head count:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationLocalHeadCount() ?></td>
    </tr>
    <tr>
      <th>Customer oraganization founded date:</th>
      <td><?php echo $sms_customer_organization->getCustomerOraganizationFoundedDate() ?></td>
    </tr>
    <tr>
      <th>Ownership:</th>
      <td><?php echo $sms_customer_organization->getOwnership() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $sms_customer_organization->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sms_customer_organization->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('organization/edit?id='.$sms_customer_organization->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('organization/index') ?>">List</a>
