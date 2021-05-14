<?php

namespace PaymentCheque;

use Payment\PaymentProcessor_MerchantHosted;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\NumericField;

class ChequeProcessor extends PaymentProcessor_MerchantHosted {

  public function getFormFields() {

    $fieldList = new FieldList();

    $fieldList->push(new NumericField('Amount', 'Amount', ''));
    $fieldList->push(new DropdownField('Currency', 'Select currency :', $this->gateway->getSupportedCurrencies()));

    return $fieldList;
  }
}