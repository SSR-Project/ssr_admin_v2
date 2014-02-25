<?php


class Event extends AppModel {
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

    public function getEvent($event_id)
    {
        $result = $this->find('first', array(
            'conditions' => array(
                'Event.id' => $event_id,
            ),
        ));
        return $result;
    }

    public function getEvents()
    {
        $result = $this->find('all', array(
            'conditions' => array(
            ),
            'order' => 'Event.date ASC'
        ));
        return $result;
    }

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
