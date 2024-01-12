<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2023-04-17 09:42:36
$dictionary["Opportunity"]["fields"]["opportunities_accounts_1"] = array (
  'name' => 'opportunities_accounts_1',
  'type' => 'link',
  'relationship' => 'opportunities_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_OPPORTUNITIES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'opportunities_accounts_1accounts_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_accounts_1_name"] = array (
  'name' => 'opportunities_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'opportunities_accounts_1accounts_idb',
  'link' => 'opportunities_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_accounts_1accounts_idb"] = array (
  'name' => 'opportunities_accounts_1accounts_idb',
  'type' => 'link',
  'relationship' => 'opportunities_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);


// created: 2023-04-17 09:38:48
$dictionary["Opportunity"]["fields"]["opportunities_aos_products_1"] = array (
  'name' => 'opportunities_aos_products_1',
  'type' => 'link',
  'relationship' => 'opportunities_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'opportunities_aos_products_1aos_products_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_aos_products_1_name"] = array (
  'name' => 'opportunities_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'opportunities_aos_products_1aos_products_idb',
  'link' => 'opportunities_aos_products_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_aos_products_1aos_products_idb"] = array (
  'name' => 'opportunities_aos_products_1aos_products_idb',
  'type' => 'link',
  'relationship' => 'opportunities_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);


 // created: 2023-04-17 09:25:43
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2023-04-17 09:25:41
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2023-04-17 09:25:39
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2023-04-17 09:25:38
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>