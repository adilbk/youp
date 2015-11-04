<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Portfolio_Entries extends CI_Migration {

		public function up()
		{
			echo '<tr><td>table portfolio_entries</td>';
			$this->dbforge->add_field(array(
	                        'id' => array(
	                                'type' => 'INT',
	                                'constraint' => '11',
	                                'unsigned' => TRUE,
	                                'auto_increment' => TRUE
	                        ),
	                        'title' => array(
	                                'type' => 'VARCHAR',
	                                'constraint' => '100',
	                        ),
	                        'description' => array(
	                                'type' => 'TEXT',
	                        ),
	                        'image' => array(
	                                'type' => 'VARCHAR',
	                                'constraint' => '200',
	                        ),
	                        'category' => array(
	                                'type' => 'INT',
	                                'constraint' => '11',
	                        ),
	                ));

				$this->dbforge->add_key('id',TRUE);
                $this->dbforge->create_table('portfolio_entries');
                echo '<td><i class="fa fa-check"></i></td>';
                $this->seed();
                echo '<td><i class="fa fa-check"></i></td>';
		}

		public function down()
		{
			$this->dbforge->drop_table('portfolio_entries');
		}

		public function seed()
		{
			$this->load->model('entities/portfolioentry');

			$temporary_portfolio = new portfolioentry();
			for($i=0;$i<16;$i++)
			{
				$temporary_portfolio->title='portfolio ';
				$temporary_portfolio->description='portfolio description';
				$temporary_portfolio->image='default.jpg';
				$temporary_portfolio->category='1';

				$this->db->insert('portfolio_entries',$temporary_portfolio);
			}
		}
}


?>