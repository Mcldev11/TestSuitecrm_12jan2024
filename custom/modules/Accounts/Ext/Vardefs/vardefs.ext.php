<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2023-04-17 09:42:36
$dictionary["Account"]["fields"]["opportunities_accounts_1"] = array (
  'name' => 'opportunities_accounts_1',
  'type' => 'link',
  'relationship' => 'opportunities_accounts_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_ACCOUNTS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_accounts_1opportunities_ida',
);
$dictionary["Account"]["fields"]["opportunities_accounts_1_name"] = array (
  'name' => 'opportunities_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_ACCOUNTS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_accounts_1opportunities_ida',
  'link' => 'opportunities_accounts_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["opportunities_accounts_1opportunities_ida"] = array (
  'name' => 'opportunities_accounts_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_ACCOUNTS_1_FROM_OPPORTUNITIES_TITLE',
);


 // created: 2023-04-17 09:25:16
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2023-04-17 09:25:13
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2023-04-17 09:25:13
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2023-04-17 09:25:10
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>