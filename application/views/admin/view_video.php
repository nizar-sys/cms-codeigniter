<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Video</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/video/add" class="btn btn-primary btn-sm">Add New</a>
	</div>
</section>


<section class="content">

  <div class="row">
    <div class="col-md-12">

        <?php
        if($this->session->flashdata('error')) {
            ?>
            <div class="callout callout-danger">
                <p><?php echo $this->session->flashdata('error'); ?></p>
            </div>
            <?php
        }
        if($this->session->flashdata('success')) {
            ?>
            <div class="callout callout-success">
                <p><?php echo $this->session->flashdata('success'); ?></p>
            </div>
            <?php
        }
        ?>


      <div class="box box-info">
        
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
			<thead>
			    <tr>
			        <th>SL</th>
			        <th>Video</th>
			         <th>Video Name</th>
			        <th>Action</th>
			    </tr>
			</thead>
            <tbody>

            	<?php
            	$i=0;
            	foreach ($video as $row) {
            		$i++;
	            	?>
	                <tr>
	                    <td><?php echo $i; ?></td>
	                    <td>
	                    
	                    	    <iframe width="200" height="150" src="<?php echo $row['url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                        <td><?php echo $row['video_name']; ?></td>
                         
	                    </td>
	                    <td>
	                        <a href="<?php echo base_url(); ?>admin/video/edit/<?php echo $row['video_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
                            <a href="<?php echo base_url(); ?>admin/video/delete/<?php echo $row['video_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a> 
	                    </td>
	                </tr>
	                <?php
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div> 

</section>