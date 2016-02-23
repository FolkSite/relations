<?php
/**
 * templateVars transport file for relations extra
 *
 * Copyright 2016 by DANNY HARDING <danny@stuntrocket.co>
 * Created on 02-23-2016
 *
 * @package relations
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $templateVars */


$templateVars = array();

$templateVars[1] = $modx->newObject('modTemplateVar');
$templateVars[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'type' => 'listbox-multiple',
  'name' => 'RelatedArticles',
  'caption' => 'Articles Related To This',
  'description' => '',
  'elements' => '@EVAL return $modx->runSnippet(\'listMyResources\',array(\'parent\' => 11));',
  'rank' => 0,
  'display' => 'delim',
  'default_text' => '',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => 'true',
    'listWidth' => '',
    'title' => '',
    'typeAhead' => 'false',
    'typeAheadDelay' => '250',
    'listEmptyText' => '',
    'stackItems' => 'false',
  ),
  'output_properties' => 
  array (
    'delimiter' => ',',
  ),
), '', true, true);
$templateVars[2] = $modx->newObject('modTemplateVar');
$templateVars[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'type' => 'listbox-multiple',
  'name' => 'RelatedResources',
  'caption' => 'Resources Related To This',
  'description' => '',
  'elements' => '@EVAL return $modx->runSnippet(\'listAllResources\');',
  'rank' => 0,
  'display' => 'delim',
  'default_text' => '',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => 'true',
    'listWidth' => '',
    'title' => '',
    'typeAhead' => 'false',
    'typeAheadDelay' => '250',
    'listEmptyText' => '',
    'stackItems' => 'false',
  ),
  'output_properties' => 
  array (
    'delimiter' => ',',
  ),
), '', true, true);
return $templateVars;
