<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('NewslettersHistory', 'doctrine');

/**
 * BaseNewslettersHistory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $newsletter_id
 * @property integer $subscriber_id
 * @property integer $news_id
 * @property string $log
 * @property timestamp $date_added
 * @property timestamp $date_sent
 * @property boolean $sent
 * @property NewslettersSubscribers $NewslettersSubscribers
 * @property Newsletters $Newsletters
 * 
 * @package    ShineISP
 * 
 * @author     Shine Software <info@shineisp.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNewslettersHistory extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('newsletters_history');
        $this->hasColumn('newsletter_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('subscriber_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => '4',
             ));
        $this->hasColumn('news_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => '4',
             ));
        $this->hasColumn('log', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '',
             ));
        $this->hasColumn('date_added', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => true,
             'length' => '25',
             ));
        $this->hasColumn('date_sent', 'timestamp', 25, array(
             'type' => 'timestamp',
             'length' => '25',
             ));
        $this->hasColumn('sent', 'boolean', 25, array(
             'type' => 'boolean',
             'length' => '25',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('NewslettersSubscribers', array(
             'local' => 'subscriber_id',
             'foreign' => 'subscriber_id'));

        $this->hasOne('Newsletters', array(
             'local' => 'news_id',
             'foreign' => 'news_id'));
    }
}