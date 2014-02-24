<?php
/**
 * Completion
 *
 * @author        Takanori Kobashi kobashi@akane.waseda.jp
 * @since         1.0.0
 * @version       1.0.0
 * @copyright
 */
class Event extends AppModel
{
    public $name = 'Event';
    public $hasMany = array('EventsUser');
    public $validate = array(
         'name' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '氏名を入力してください'
            ),
        ),
        'location' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '場所を入力してください'
            ),
        ),
        'date' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '日時を入力してください'
            ),
        ),
    );

    /**
     * getEvent
     * @param: $event_id
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    public function getEvent($event_id)
    {
        $result = $this->find('first', array(
            'conditions' => array(
                'Event.id' => $event_id,
            ),
        ));
        return $result;
    }

    /**
     * getEvents
     * @param:
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    public function getEvents()
    {
        $result = $this->find('all', array(
            'conditions' => array(
            ),
            'order' => 'Event.date ASC'
        ));
        return $result;
    }

    /**
     * getEventUsers
     * @param: $event_id
     * @author: T.Kobashi
     * @since: 1.0.0
     */
    public function getEventUsers($event_id)
    {
        $result = $this->find('first', array(
            'conditions' => array(
                'Event.id' => $event_id,
            ),
            'recursive' => 4,
        ));
        return $result['EventsUser'];
    }
}
