<?php

/**
 * reciept actions.
 *
 * @package    sms
 * @subpackage reciept
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class recieptActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sms_stock_reciepts = Doctrine_Core::getTable('SmsStockReciept')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sms_stock_reciept = Doctrine_Core::getTable('SmsStockReciept')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->sms_stock_reciept);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SmsStockRecieptForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SmsStockRecieptForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sms_stock_reciept = Doctrine_Core::getTable('SmsStockReciept')->find(array($request->getParameter('id'))), sprintf('Object sms_stock_reciept does not exist (%s).', $request->getParameter('id')));
    $this->form = new SmsStockRecieptForm($sms_stock_reciept);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sms_stock_reciept = Doctrine_Core::getTable('SmsStockReciept')->find(array($request->getParameter('id'))), sprintf('Object sms_stock_reciept does not exist (%s).', $request->getParameter('id')));
    $this->form = new SmsStockRecieptForm($sms_stock_reciept);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sms_stock_reciept = Doctrine_Core::getTable('SmsStockReciept')->find(array($request->getParameter('id'))), sprintf('Object sms_stock_reciept does not exist (%s).', $request->getParameter('id')));
    $sms_stock_reciept->delete();

    $this->redirect('reciept/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sms_stock_reciept = $form->save();

      $this->redirect('reciept/edit?id='.$sms_stock_reciept->getId());
    }
  }
}
