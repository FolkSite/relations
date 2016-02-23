<?php
$parent = $modx->getOption('parent',$scriptProperties,1);
$parentObj = $modx->getObject('modResource',$parent);
if (!($parentObj instanceof modResource)) { return ''; }
$resArray = $parentObj->getMany('Children');
$resources = array();
foreach($resArray as $res) {
  if ($res instanceof modResource) {
    $resources[] = $res->get('pagetitle') . '==' . $res->get('id');
  }
}
$out = implode("||",$resources);
return $out;