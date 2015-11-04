<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Experience extends CI_Migration {

	public function up()
	{
		echo '<tr><td>table Experience</td>';
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
	                        'image' => array(
	                                'type' => 'VARCHAR',
	                                'constraint' => '200',
	                        ),
	                        'year' => array(
	                                'type' => 'DATE',
	                        ),
	                        'date' => array(
	                                'type' => 'DATE',
	                        ),
	                        'description' => array(
	                        		'type' => 'VARCHAR',
	                        		'constraint' => '300',
	                        ),
	                ));

				$this->dbforge->add_key('id',TRUE);
                $this->dbforge->create_table('experience');
                echo '<td><i class="fa fa-check"></i></td>';
                $this->seed();
                echo '<td><i class="fa fa-check"></i></td>';
	}

	public function down()
	{
		$this->dbforge->drop_table('experience');	
	}

	public function seed()
	{
		$this->load->model('entities/experience');

		for($i=0;$i<6;$i++)
		{
			$temporary_experience = new Experience();
			$temporary_experience->title='experience';
			$temporary_experience->image='image'.$i;
			if($i< 3)
			{	$j=2;
				$temporary_experience->year='2014';
				$temporary_experience->date='2014'.$j++.'10';
			}
			else 
			{
				$temporary_experience->year='2015';
				$temporary_experience->date='2015'.$j++.'12';
			}
			$temporary_experience->description='description de l\'experience !';

			$this->db->insert('experience',$temporary_experience);
		}
	}

}

?>