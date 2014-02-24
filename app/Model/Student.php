<?php
/**
 * Student
 *
 * @author        Takanori Kobashi kobashi@akane.waseda.jp
 * @since         1.0.0
 * @version       1.0.0
 * @copyright
 */
class Student extends AppModel
{
    public $name = 'Student';

    public $validate = array(
         'grade' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '保証人氏名を入力してください'
            ),
        ),
        'department' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '保証人氏名を入力してください'
            ),
        ),
        'major' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '保証人氏名を入力してください'
            ),
        ),
        'number' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '保証人氏名を入力してください'
            ),
        ),
        'guarantor_name' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '保証人氏名を入力してください'
            ),
        ),
        'guarantor_adress' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '保証人住所を入力してください'
            ),
        ),
        'guarantor_email' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '保証人連絡先を入力してください'
            ),
        ),
    );
}
