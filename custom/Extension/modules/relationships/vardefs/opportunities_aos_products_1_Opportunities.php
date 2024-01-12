<?php
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
