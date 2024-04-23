<?php

// Simple button
$form['my-button'] = [
  '#type' => 'cl_component',
  '#component' => 'button',
  '#context' => [
    'text' => t('Button text'),
    'style' => 'primary',
  ],
];

// Button with Icon (Large, Above)
$form['my-button'] = [
  '#type' => 'cl_component',
  '#component' => 'button',
  '#context' => [
    'text' => t('Button text'),
    'style' => 'primary',
    'disabled' => 1,
    'iconName' => 'address-book',
    'iconClasses' => 'icon-lg pt-2',
    'iconPlacement' => 'above',
    'dataBsToggle' => 'modal',
    'dataBsTarget' => '#exampleModal',
  ],
];

// Simple Link
$form['my-link'] = [
  '#type' => 'cl_component',
  '#component' => 'link',
  '#context' => [
    'text' => t('Link text'),
    'style' => 'primary',
  ],
];
