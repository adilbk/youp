<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Popup extends CI_Migration {

        public function up()
        {
                echo '<tr><td>popup</td>';
                $this->dbforge->add_field(array(
                        'type' => array(
                                'type' => 'INT',
                                'constraint' => '1',
                        ),
                        'message' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                ));
                $this->dbforge->create_table('popup');
                echo '<td><i class="fa fa-check"></i></td>';
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('popup');
        }
}

?>