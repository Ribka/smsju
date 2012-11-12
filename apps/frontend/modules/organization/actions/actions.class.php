<?php

/**
 * organization actions.
 *
 * @package    sms
 * @subpackage organization
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class organizationActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sms_customer_organizations = Doctrine_Core::getTable('SmsCustomerOrganization')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sms_customer_organization = Doctrine_Core::getTable('SmsCustomerOrganization')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->sms_customer_organization);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SmsCustomerOrganizationForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SmsCustomerOrganizationForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sms_customer_organization = Doctrine_Core::getTable('SmsCustomerOrganization')->find(array($request->getParameter('id'))), sprintf('Object sms_customer_organization does not exist (%s).', $request->getParameter('id')));
    $this->form = new SmsCustomerOrganizationForm($sms_customer_organization);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sms_customer_organization = Doctrine_Core::getTable('SmsCustomerOrganization')->find(array($request->getParameter('id'))), sprintf('Object sms_customer_organization does not exist (%s).', $request->getParameter('id')));
    $this->form = new SmsCustomerOrganizationForm($sms_customer_organization);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sms_customer_organization = Doctrine_Core::getTable('SmsCustomerOrganization')->find(array($request->getParameter('id'))), sprintf('Object sms_customer_organization does not exist (%s).', $request->getParameter('id')));
    $sms_customer_organization->delete();

    $this->redirect('organization/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sms_customer_organization = $form->save();

      $this->redirect('organization/edit?id='.$sms_customer_organization->getId());
    }
  }
}
