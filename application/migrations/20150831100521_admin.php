<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Admin extends CI_Migration {

        public function up()
        {
                echo '<tr><td>admins</td>';
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'first_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'last_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'avatar' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'label' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                ));
                $this->dbforge->add_key('id',TRUE);
                $this->dbforge->create_table('admins');
                $this->seed();
               echo '<td><i class="fa fa-check"></i></td>';
               echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('admins');
        }

        public function seed()
        {
                $this->load->model('entities/admin');
                $admin = new Admin();
                $admin->email='admin@test.com';
                $admin->password='admin';
                $this->db->insert('admins',$admin);
        }
}

?>