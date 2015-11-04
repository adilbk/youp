<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Post extends CI_Migration {

        public function up()
        {
                echo '<tr><td>posts</td>';
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'description' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'image' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'content' => array(
                                'type' => 'TEXT',
                        ),
                        'date' => array(
                                'type' => 'DATETIME',
                        ),
                        'admin_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                        ),
                ));
                $this->dbforge->add_key('id',TRUE);
                $this->dbforge->create_table('posts');
                echo '<td><i class="fa fa-check"></i></td>';
                $this->seed();
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('posts');
        }

        public function seed()
        {
                $this->load->model('entities/post');
                $this->load->helper('date');
                for($i=1;$i<=1;$i++)
                {
                        $temporary_post=new Post();
                        $temporary_post->title='Un article agréable!';
                        $temporary_post->description='Ceci est votre premier article!';
                        $temporary_post->image='blog_post_image.jpg';
                        $temporary_post->content='<p><img src="http://i.imgur.com/7tE1xDc.jpg" style="width: 921px; float: left;"><p></p><h1>Bienvenue!</h1><p>Vous pouvez créer des trucs vraiment agréable en utilisant Youpel_CMS!<br></p><p></p> ';
                        $temporary_post->date=date('Y-m-d H:i:s');
                        $temporary_post->admin_id=1;
                        $this->db->insert('posts',$temporary_post);
                }
        }
}

?>