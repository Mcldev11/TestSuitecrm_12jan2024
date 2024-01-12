<?php
// created: 2023-04-17 09:38:48
$dictionary["AOS_Products"]["fields"]["opportunities_aos_products_1"] = array (
  'name' => 'opportunities_aos_products_1',
  'type' => 'link',
  'relationship' => 'opportunities_aos_products_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCTS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_aos_products_1opportunities_ida',
);
$dictionary["AOS_Products"]["fields"]["opportunities_aos_products_1_name"] = array (
  'name' => 'opportunities_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCTS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_aos_products_1opportunities_ida',
  'link' => 'opportunities_aos_products_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["opportunities_aos_products_1opportunities_ida"] = array (
  'name' => 'opportunities_aos_products_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCTS_1_FROM_OPPORTUNITIES_TITLE',
);
