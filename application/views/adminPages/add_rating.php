
      
  <div class="card">
            <div class="card-body"> 
              <h5 class="card-title">Add Rating</h5>

<?php echo form_open('index.php/admin/create_rating')?>
<?php if ($message = $this->session->flashdata('message')): ?>
			<div class="row">
				<div class="col-md-6">
					<div class="alert alert-success alert-dismissble">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $message; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
<form> 
  <div class="form-group">
    <label for="formGroupExampleInput">Rating</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="rating" placeholder="Rating">

    <div class="text-danger">
    <?php echo form_error('rating'); ?>
    </div>  

<div class="form-group">
    <label for="formGroupExampleInput">Discription</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="description"  placeholder="Discription">
    <div class="text-danger">
    <?php echo form_error('description'); ?>
    </div>  
</div>
<div class="form-group">
<input type="submit" value='save'>
</div>
</form>
 
             
</div>
</div>
 