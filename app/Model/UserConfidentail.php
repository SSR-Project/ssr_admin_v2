<?php
/**
 * UserConfidential
 *
 * @author        Takanori Kobashi kobashi@akane.waseda.jp
 * @since         1.0.0
 * @version       1.0.0
 * @copyright
 */
class UserConfidential extends AppModel
{
    public $name = 'UserConfidential';

    public $validate = array(
        'email' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'メールアドレスを入力してください'
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'そのメールアドレスは既に登録されています'
            )
        ),
        'password' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'パスワードを入力してください'
            ),
        ),
    );
}
