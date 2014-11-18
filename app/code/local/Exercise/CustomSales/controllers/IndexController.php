<?php
class Exercise_CustomSales_IndexController extends Mage_Core_Controller_Front_Action
{
   public function indexAction ()
   {
   	$PostValues = $this->getRequest()->getParams();
   	if($PostValues['emailadress'] != '' AND $PostValues['order_id'] != "" AND $PostValues['form_key'] != "")
   	{
   		$order = Mage::getModel('sales/order')->load($PostValues['order_id'], 'increment_id');
   		$order->setCustomerEmail($PostValues['emailadress'])->save();
   		echo "updated";
   	}
   }
}

?>