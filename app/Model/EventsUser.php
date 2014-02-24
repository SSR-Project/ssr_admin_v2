<?php
/**
 * EventsUser
 *
 * @author        Takanori Kobashi kobashi@akane.waseda.jp
 * @since         1.0.0
 * @version       1.0.0
 * @copyright
 */
class EventsUser extends AppModel
{
    public $name = 'EventsUser';
    public $belongsTo = array('User','EventsUser');
}
