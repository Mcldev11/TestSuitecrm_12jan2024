<?php
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
