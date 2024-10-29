<div class="outter-wp">
				<!--sub-heard-part-->
					<div class="sub-heard-part">
					<ol class="breadcrumb m-b-0">
						<li><a href="index.html">Home</a></li>
						<li class="active"><?php if(isset($_GET['naveeth'])){ echo strtoupper($page=$_GET['naveeth']); } ?></li>
					</ol>
					</div>
				<!--//sub-heard-part-->
				<div class="graph-visual tables-main">
						<h2 class="inner-tittle"><?php echo strtoupper($_GET['naveeth']); ?></h2>
							
											<div class="graph">
										<div class="tables">
									
											<table class="table table-bordered "> 
											
												<thead>
													<tr>
														<th>#</th>
														<th>Subject</th> 
														<th>Lecturer Email</th>
														<th>Lecturer Name</th>
														<
													</tr>
												</thead>
												<tbody> 
													
							<?php $subjects_dis_admin = $naveeth->subjects_info_display_admin();
								$sub_sn = 1;
								while($subjects_info_admin =$subjects_dis_admin->fetch_assoc())					{
									
								
													?>						
											
													
													<tr>
														<th scope="row"><?php echo $sub_sn; ?></th>
													
														<td><?php echo $subjects_info_admin['subject_name']; ?></td>
														<td><?php echo $subjects_info_admin['t_fullname']; ?></td>
														<td><?php echo $subjects_info_admin['t_email']; ?></td>
													
													</tr>
											<?php $sub_sn++; } ?>
												</tbody> 
										
											</table> 
										</div>
								</div>
											
						
					</div>
					<!--//graph-visual-->
				</div>