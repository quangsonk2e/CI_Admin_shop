	<?php 	
							$config['base_url'] = 'http://code.com/admin/home/page';
  							$config['total_rows'] = $total_rows;
  							$config['per_page'] = 20;
  							$config['num_links'] = 2;
  							$config['use_page_numbers'] = TRUE;
            				$config['full_tag_open'] = "<ul class='pagination'>";
							$config['full_tag_close'] ="</ul>";
							$config['num_tag_open'] = '<li>';
							$config['num_tag_close'] = '</li>';
							$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
							$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
							$config['next_tag_open'] = "<li>";
							$config['next_tagl_close'] = "</li>";
							$config['prev_tag_open'] = "<li>";
							$config['prev_tagl_close'] = "</li>";
							$config['first_tag_open'] = "<li>";
							$config['first_tagl_close'] = "</li>";
							$config['last_tag_open'] = "<li>";
							$config['last_tagl_close'] = "</li>";
             				$config['first_link'] = "Đầu";
              				$config['last_link'] = "Cuối";

            				$this->pagination->initialize($config);
                 
 							$this->pagination->initialize($config);
 							echo $this->pagination->create_links();
  							
  							?>