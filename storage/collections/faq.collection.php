<?php
 return array (
  'name' => 'faq',
  'label' => 'faq',
  '_id' => 'faq5ef4cc320675b',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'title',
      'label' => 'Título',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    1 => 
    array (
      'name' => 'content',
      'label' => 'Conteúdo',
      'type' => 'layout',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1593101362,
  '_modified' => 1593618986,
  'color' => '',
  'acl' => 
  array (
    'cartorioUser' => 
    array (
      'entries_create' => true,
      'entries_delete' => true,
      'entries_edit' => true,
      'entries_view' => true,
    ),
    'cartorioSaude' => 
    array (
      'entries_view' => true,
      'entries_edit' => true,
      'entries_create' => true,
      'entries_delete' => true,
    ),
  ),
  'sort' => 
  array (
    'column' => '_created',
    'dir' => -1,
  ),
  'rules' => 
  array (
    'create' => 
    array (
      'enabled' => false,
    ),
    'read' => 
    array (
      'enabled' => false,
    ),
    'update' => 
    array (
      'enabled' => false,
    ),
    'delete' => 
    array (
      'enabled' => false,
    ),
  ),
  'icon' => 'items.svg',
  'group' => '',
  'contentpreview' => 
  array (
    'enabled' => false,
  ),
);