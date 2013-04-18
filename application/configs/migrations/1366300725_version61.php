<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version61 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('emails_templates_data', 'emails_templates_data_template_id_emails_templates_template_id', array(
             'name' => 'emails_templates_data_template_id_emails_templates_template_id',
             'local' => 'template_id',
             'foreign' => 'template_id',
             'foreignTable' => 'emails_templates',
             ));
        $this->createForeignKey('emails_templates_sends', 'emails_templates_sends_customer_id_customers_customer_id', array(
             'name' => 'emails_templates_sends_customer_id_customers_customer_id',
             'local' => 'customer_id',
             'foreign' => 'customer_id',
             'foreignTable' => 'customers',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('emails_templates_data', 'emails_templates_data_template_id', array(
             'fields' => 
             array(
              0 => 'template_id',
             ),
             ));
        $this->addIndex('emails_templates_sends', 'emails_templates_sends_customer_id', array(
             'fields' => 
             array(
              0 => 'customer_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('emails_templates_data', 'emails_templates_data_template_id_emails_templates_template_id');
        $this->dropForeignKey('emails_templates_sends', 'emails_templates_sends_customer_id_customers_customer_id');
        $this->removeIndex('emails_templates_data', 'emails_templates_data_template_id', array(
             'fields' => 
             array(
              0 => 'template_id',
             ),
             ));
        $this->removeIndex('emails_templates_sends', 'emails_templates_sends_customer_id', array(
             'fields' => 
             array(
              0 => 'customer_id',
             ),
             ));
    }
}