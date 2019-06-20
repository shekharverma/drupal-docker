<?php

/**
 * @file
 * Contains \Drupal\test_job\Plugin\field\formatter\TextFieldFormatter.
 */

namespace Drupal\test_job\Plugin\Field\FieldFormatter;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'simple text field' formatter.
 *
 * @FieldFormatter(
 *   id = "simple_text_field",
 *   label = @Translation("Simple Text Field Formatter"),
 *   field_types = {
 *     "string",
 *     "text",
 *   }
 * )
 */

class TextFieldFormatter extends FormatterBase {  

/**
 * {@inheritdoc}
*/

public function viewElements(FieldItemListInterface $items, $langcode) {
  $elements = array();

  foreach ($items as $delta => $item) { 
     $val = $item->value; 
     $elements[$delta] = array(
      '#theme' => 'simple_text_field_formatter',
      '#val' => $val,
    );
  }

  return $elements;    
}

}