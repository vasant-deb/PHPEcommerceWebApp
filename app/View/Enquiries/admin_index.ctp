<div class="container-fluid main-content">
  <div class="page-title">
    <h1> Enquiries <?php //echo $title_for_layout?></h1>
  </div>
  <!-- DataTables Example -->
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"> <i class="fa fa-table"></i>Manage Enquiries
          
        </div>
        <div class="widget-content padded clearfix">
        <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
            <thead>
            <th>ID</th>
              <th>Name</th>
			  <th>Enquiry From</th>
              <th>Email</th>
			   <th>Contact</th>
               <th>Enquiry Date</th>
              <th class="actions">Actions</th>
              </thead>
            <tbody>
	<?php foreach ($enquiries as $enquiry): ?>
              <tr>
				<td><?php echo h($enquiry['Enquiry']['id']); ?></td>
				<td><?php echo h($enquiry['Enquiry']['name']); ?></td>				 
				<td><?php echo h($enquiry['Enquiry']['enquiry_for']); ?></td>
				<td><?php echo h($enquiry['Enquiry']['email']); ?></td>
								<td><?php echo h($enquiry['Enquiry']['mobile']); ?></td>

				<td><?php echo h($enquiry['Enquiry']['created']); ?></td>
                 <td class="actions">
				
				  <?php 
		   echo $this->Html->link("<i class=\"fa fa-eye\"></i>",
		   array( 'action' => 'view', $enquiry['Enquiry']['id']),
		    array('escape' => FALSE,'class' => 'table-actions')); 
			?>
			
		<div class="action-buttons"> 			 
		<?php 
		/* 
		echo $this->Html->link("<i class=\"fa fa-envelope\"></i>",
		array( 'action' => 'send', $enquiry['Enquiry']['id']),
		array('escape' => FALSE,'class' => 'table-actions')); 

		echo $this->Html->link("<i class=\"fa fa-pencil\"></i>",
		array( 'action' => 'edit', $enquiry['Enquiry']['id']),
		array('escape' => FALSE,'class' => 'table-actions')); 

		echo $this->Form->postLink("<i class=\"fa fa-trash\"></i>", 
		array('action' => 'delete', $enquiry['Enquiry']['id']), 
		array('escape' => FALSE,'class' => 'table-actions'), __('Are you sure you want to delete # %s?', $enquiry['Enquiry']['id'])); 

		*/	
		?>

			</div>
				 </td>
              
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- end DataTables Example -->
</div>
   
 
<script>
$('#flashMessage').addClass('alert alert-success');
</script>
 