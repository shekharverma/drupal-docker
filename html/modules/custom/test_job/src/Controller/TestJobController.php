<?php
namespace Drupal\test_job\Controller;

class TestJobController {
    public function Test() {
            return array(
                '#title' => 'Test Job',
                '#markup' => 'Here is some content.', 
            );
    }
}