<?php

/**
 * return actions.
 *
 * @package    sms
 * @subpackage return
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class returnActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sms_returns = Doctrine_Core::getTable('SmsReturn')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sms_return = Doctrine_Core::getTable('SmsReturn')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->sms_return);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SmsReturnForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SmsReturnForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sms_return = Doctrine_Core::getTable('SmsReturn')->find(array($request->getParameter('id'))), sprintf('Object sms_return does not exist (%s).', $request->getParameter('id')));
    $this->form = new SmsReturnForm($sms_return);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sms_return = Doctrine_Core::getTable('SmsReturn')->find(array($request->getParameter('id'))), sprintf('Object sms_return does not exist (%s).', $request->getParameter('id')));
    $this->form = new SmsReturnForm($sms_return);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sms_return = Doctrine_Core::getTable('SmsReturn')->find(array($request->getParameter('id'))), sprintf('Object sms_return does not exist (%s).', $request->getParameter('id')));
    $sms_return->delete();

    $this->redirect('return/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sms_return = $form->save();

      $this->redirect('return/edit?id='.$sms_return->getId());
    }
  }
}
