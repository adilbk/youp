<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tag extends CI_Migration {

        public function up()
        {
                echo '<tr><td>tags</td>';
                $this->dbforge->add_field(array(
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'value' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                ));
                $this->dbforge->create_table('tags');
                echo '<td><i class="fa fa-check"></i></td>';
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('tags');
        }
}

?>