<?php
/**
 * Certification
 *
 * @author        Takanori Kobashi kobashi@akane.waseda.jp
 * @since         1.0.0
 * @version       1.0.0
 * @copyright
 */
class Certification extends AppModel
{
    public $name = 'Certification';
    public $belongsTo = array('User');

    public $validate = array(
        'type' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => ''
            ),
        ),
        'count' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => ''
            ),
        ),
        'purpose' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => ''
            ),
        ),
    );

    /**
     * getCertification
     * @param:
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    public function getCertification()
    {
        $result = $this->find('all', array(
            'conditions' => array(
            ),
            'recursive' => 2,
        ));
        return $result;
    }

}
