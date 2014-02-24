<?php
/**
 * User
 *
 * @author        Takanori Kobashi kobashi@akane.waseda.jp
 * @since         1.0.0
 * @version       1.0.0
 * @copyright
 */
class User extends AppModel
{
    public $name = 'User';
    public $hasOne = array('Student','Completion','UserConfidential','Certification');
    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '名前を入力してください'
            ),
        ),
        'nationality' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '住所を入力してください'
            ),
        ),
        'adress' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '住所を入力してください'
            ),
        ),
        'phone' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '電話番号を入力してください'
            ),
        ),
        'birthday' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '住所を入力してください'
            ),
        ),
        'gender' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '住所を入力してください'
            ),
        ),
    );

    /**
     * getStudentUser
     * @param: $user_id
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    public function getStudentUser($user_id)
    {
        $result = $this->find('first', array(
            'conditions' => array(
                'User.id' => $user_id,
                'UserConfidential.delete' => '0',
            ),
        ));
        return $result;
    }

    /**
     * getStudentUsers
     * @param:
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    public function getStudentUsers()
    {
        $result = $this->find('all', array(
            'conditions' => array(
                'NOT' => array('Student.id' => null),
                'Completion.id' => null,
                'UserConfidential.delete' => '0',
            ),
        ));
        return $result;
    }

    /**
     * getStudentUsersByConditions
     * @param: $condtions
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    public function getStudentUsersByConditions($condtions)
    {
        $result = $this->find('all', array(
            'conditions' => $condtions,
        ));
        return $result;
    }

    /**
     * getCompletionUser
     * @param: $user_id
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    public function getCompletionUser($user_id)
    {
        $result = $this->find('first', array(
            'conditions' => array(
                'User.id' => $user_id,
                'UserConfidential.delete' => '0',
            ),
            'recursive' => 2,
        ));
        return $result;
    }

    /**
     * getCompletionUsers
     * @param:
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    public function getCompletionUsers()
    {
        $result = $this->find('all', array(
            'conditions' => array(
                'NOT' => array('Student.id' => null),
                'NOT' => array('Completion.id' => null),
                'UserConfidential.delete' => '0',
            ),
             'recursive' => 2,
        ));
        return $result;
    }

    /**
     * getCompletionUsersByConditions
     * @param: $condtions
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    public function getCompletionUsersByConditions($condtions)
    {
        $result = $this->find('all', array(
            'conditions' => $condtions,
            'recursive' => 2,
        ));
        return $result;
    }
}
