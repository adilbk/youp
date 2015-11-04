<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Pages extends CI_Migration {

        public function up()
        {
                echo '<tr><td>pages</td>';
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'url' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),

                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                ));
                $this->dbforge->add_key('id',TRUE);
                $this->dbforge->create_table('pages');
                echo '<td><i class="fa fa-check"></i></td>';
                $this->seed();
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('pages');
        }
        
        public function seed()
        {

                $this->load->model('entities/Page');
                
                $pageHome = new Page();
                $pageHome->url = 'home';
                $pageHome->title = 'Accueil';
                $this->db->insert('pages',$pageHome);

                $pageQuiSommeNous = new Page();
                $pageQuiSommeNous ->url = 'nous';
                $pageQuiSommeNous ->title = 'Qui Somme Nous';
                $this->db->insert('pages',$pageQuiSommeNous);
                
                $pagePortfolio = new Page();
                $pagePortfolio->url = 'portfolio';
                $pagePortfolio->title = 'Portfolio';
                $this->db->insert('pages',$pagePortfolio);

                $pageBlog = new Page();
                $pageBlog->url = 'blog';
                $pageBlog->title = 'Blog';
                $this->db->insert('pages',$pageBlog);

                $pageContact = new Page();
                $pageContact->url = 'contact';
                $pageContact->title = 'Contact';
                $this->db->insert('pages',$pageContact); 

        }
}

?>