<?php
/**
 * Completion
 *
 * @author        Takanori Kobashi kobashi@akane.waseda.jp
 * @since         1.0.0
 * @version       1.0.0
 * @copyright
 */
class Completion extends AppModel
{
    public $name = 'Completion';
    public $hasOne = array('GraduationCourse');
}
