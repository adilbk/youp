<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Slider_Image extends CI_Migration {

        public function up()
        {
                echo '<tr><td>slider_images</td>';
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'label' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'image' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'title' => array(
                                 'type'=>'VARCHAR',
                                 'constraint' =>'200'
                        ),
                        'description' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                ));
                $this->dbforge->add_key('id',TRUE);
                $this->dbforge->create_table('slider_images');
                echo '<td><i class="fa fa-check"></i></td>';
                $this->seed();
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('slider_images');
        }

        public function seed()
        {
            $this->load->model('entities/sliderimage');
            for($i=1;$i<=3;$i++)
            {
                $slider_element = new SliderImage();
                $slider_element->id = $i;
                $slider_element->title = 'Titre '.$i;
                $slider_element->description = 'Texte de description '.$i;
                $slider_element->image = 'slider_image_'.$i.'.jpg';
                $slider_element->label = 'Label'.$i;
                $this->db->insert('slider_images',$slider_element);
            }
        }
}

?>