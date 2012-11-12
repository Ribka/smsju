<?php

/**
 * request actions.
 *
 * @package    sms
 * @subpackage request
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class requestActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sms_requests = Doctrine_Core::getTable('SmsRequest')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sms_request = Doctrine_Core::getTable('SmsRequest')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->sms_request);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SmsRequestForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SmsRequestForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sms_request = Doctrine_Core::getTable('SmsRequest')->find(array($request->getParameter('id'))), sprintf('Object sms_request does not exist (%s).', $request->getParameter('id')));
    $this->form = new SmsRequestForm($sms_request);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sms_request = Doctrine_Core::getTable('SmsRequest')->find(array($request->getParameter('id'))), sprintf('Object sms_request does not exist (%s).', $request->getParameter('id')));
    $this->form = new SmsRequestForm($sms_request);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sms_request = Doctrine_Core::getTable('SmsRequest')->find(array($request->getParameter('id'))), sprintf('Object sms_request does not exist (%s).', $request->getParameter('id')));
    $sms_request->delete();

    $this->redirect('request/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sms_request = $form->save();

      $this->redirect('request/edit?id='.$sms_request->getId());
    }
  }
}
