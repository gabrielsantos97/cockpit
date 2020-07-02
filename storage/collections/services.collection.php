<?php
 return array (
  'name' => 'services',
  'label' => 'servicos',
  '_id' => 'services5ef4cd42749c6',
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
    2 => 
    array (
      'name' => 'icon',
      'label' => 'Ícone',
      'type' => 'image',
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
    3 => 
    array (
      'name' => 'category',
      'label' => 'Categoria do Serviço',
      'type' => 'multiplecollectionlink',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'links' => 
        array (
          0 => 
          array (
            'name' => 'services_counter',
            'display' => 'Serviços de Firma e Balcão',
          ),
          1 => 
          array (
            'name' => 'services_others',
            'display' => 'Serviços de Específicos',
          ),
        ),
        'limit' => false,
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
  '_created' => 1593101634,
  '_modified' => 1593700402,
  'color' => '',
  'acl' => 
  array (
    'cartorioUser' => 
    array (
      'entries_view' => true,
      'entries_edit' => true,
      'entries_create' => true,
      'entries_delete' => true,
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
  'icon' => 'accounts.svg',
);