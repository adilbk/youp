<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Page_View extends CI_Migration {

        public function up()
        {
                echo '<tr><td>page_views</td>';
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'ip' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'country' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'page_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                        ),
                        'date' => array(
                                'type' => 'DATETIME',
                        ),
                ));
                $this->dbforge->add_key('id',TRUE);
                $this->dbforge->create_table('page_views');
                echo '<td><i class="fa fa-check"></i></td>';
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('page_views');
        }
}

?>