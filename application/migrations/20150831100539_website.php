<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Website extends CI_Migration {

        public function up()
        {
                echo '<tr><td>website</td>';
                $this->dbforge->add_field(array(
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'description' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                ));
                $this->dbforge->create_table('website');
                echo '<td><i class="fa fa-check"></i></td>';
                $this->seed();
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('website');
        }

        public function seed()
        {
                $this->load->model('entities/website');
                $website = new Website();
                $website->title = 'Titre du site web';
                $website->description = 'Description du site web';
                $this->db->insert('website',$website);
        }
}

?>