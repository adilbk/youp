<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Message extends CI_Migration {

        public function up()
        {
                echo '<tr><td>table messages</td>';
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'type' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'content' => array(
                                'type' => 'TEXT',
                        ),
                        'date' => array(
                                'type' => 'DATE',
                        ),
                ));
                $this->dbforge->add_key('id',TRUE);
                $this->dbforge->create_table('messages');
                echo '<td><i class="fa fa-check"></i></td>';
                $this->seed();
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('messages');
        }

        public function seed()
        {
                $this->load->model('entities/message');
                $this->load->helper('date');

                $temporary_message=new Message();
                for($i=1;$i<=10;$i++)
                {                        
                        $temporary_message->type=1;
                        $temporary_message->email='Youepl@youpel.ma';
                        $temporary_message->name='Youpel Company';
                        $temporary_message->content='Bienvenue chez votre boite de reception';
                        $temporary_message->date=date('Y-m-d');
                        
                        $this->db->insert('messages',$temporary_message);
                }
        }
}

?>