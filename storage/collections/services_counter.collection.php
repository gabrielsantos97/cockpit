<?php
 return array (
  'name' => 'services_counter',
  'label' => 'servicos de firma e balcao',
  '_id' => 'services_counter5efdeb8222ae8',
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
  '_created' => 1593699202,
  '_modified' => 1593700926,
  'color' => '',
  'acl' => 
  array (
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
  'icon' => 'finder.svg',
);