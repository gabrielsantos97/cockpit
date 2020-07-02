<?php
 return array (
  'name' => 'health_notary_area',
  'label' => 'area cartorio saude',
  '_id' => 'health_notary_area5efcaee5c910c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'title',
      'label' => 'Titulo',
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
      'name' => 'map',
      'label' => 'Mapa',
      'type' => 'location',
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
      'label' => 'Icone',
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
  ),
  'template' => '',
  'data' => NULL,
  '_created' => 1593618149,
  '_modified' => 1593619262,
  'description' => '',
  'acl' => 
  array (
    'cartorioUser' => 
    array (
      'form' => true,
      'edit' => true,
      'data' => true,
    ),
    'cartorioSaude' => 
    array (
      'form' => true,
      'edit' => true,
      'data' => true,
    ),
  ),
  'icon' => 'buildings.svg',
);