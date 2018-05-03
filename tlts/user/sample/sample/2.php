<?php
require ('fpdf.php  ');
$address = $extraclient->get_company_address();

// generate the PDF invoice
$this->load->library('pdfinvoice');

// set document information
$this->pdfinvoice->SetSubject("Invoice " . $data_invoice['code_invoice']);

// add a page
$this->pdfinvoice->AddPage();
$this->pdfinvoice->StartPageOffset();

// write the client's details out
$width = $this->pdfinvoice->GetPageWidth()/2;
$margins = $this->pdfinvoice->getMargins();
$this->pdfinvoice->SetFont('times', 'b', $this->pdfinvoice->bigFont );
$this->_row($width, array("From:", "To:"));
$this->pdfinvoice->SetFont('times', 'i', $this->pdfinvoice->smallFont );
$this->_row($width, array("MY NAME", $customer['name_contact']));
$this->_row($width, array($address['phone'], $customer['name_customer']));
$this->_row($width, array($address['street'], $customer['address1_street']));
$this->_row($width, array($address['city']. ", ".$address['state']." ".$address['zipcode'],
                          $customer['address1_city']. ", ".$customer['address1_state']." ".$customer['address1_zip']));
?>