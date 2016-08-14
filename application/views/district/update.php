<div class="container">
    <div class="row">
        <div style="max-width: 1000px;  padding: 20px; margin: 20px auto; background-color: rgba(255,255,255,0.4)">
            <div style="">
                <h4>Update District | <?php echo $district; ?> </h4>

                <?php echo form_open_multipart('district/update/'.$district); ?>

                <div class="form-group" style="">
                    <div class="input-group">
                        <label>Map Url</label>
                        <?php echo form_error('url'); ?>
                        <input type="text" class="form-control" name="url" value="<?php echo set_value('url', $details['url']); ?>" placeholder="Map Url">
                        <label>Description</label>
                        <?php echo form_error('description'); ?>
                        <input type="text" class="form-control" name="description" value="<?php echo set_value('description', $details['description']); ?>" placeholder="Description">
                        <label>Command Area</label>
                        <?php echo form_error('command_area'); ?>
                        <input type="text" class="form-control" name="command_area" value="<?php echo set_value('command_area', $details['command_area']); ?>" placeholder="Command Area">
                        <label>Image</label>
                        <?php echo form_error('image'); ?>
                        <input type="file" class="form-control" name="image" placeholder="Image">
                    </div>
                    <br/><br/>

                    <div class="input-group">
                        <button type="submit" class="btn btn-primary" id="submit" onclick="return confirm('Are you sure you want to submit this form?');">Submit</button>
                        <a class="btn btn-warning" id="list-districts" href="<?php echo site_url('districts')?>">Cancel</a>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(document).on('click', '#list-districts', function(e){
        if (!confirm('Do you really want to cancel this operation?')){
            e.preventDefault();
        }
    });
</script>