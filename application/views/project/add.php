<div class="container">
    <div class="row">
        <div style="max-width: 1000px;  padding: 20px; margin: 20px auto; background-color: rgba(255,255,255,0.4)">
            <div style=""><h4><?php if($update): ;?>Update<?php else:; ?>Add New<?php endif; ?> Project</h4>

            <?php if ($success): ?>
                <p style="color: green"><?php echo $success; ?></p>
            <?php endif?>

            <?php if($update): ?>
                <?php echo form_open('project/update/'.$details['id']); ?>
            <?php else: ?>
                <?php echo form_open('project/add'); ?>
            <?php endif; ?>

                <div class="form-group" style="">
                    <div class="input-group">
                        <label>Name of the Project</label>
                        <?php echo form_error('name'); ?>
                        <input type="text" class="form-control" name="name" value="<?php echo set_value('name', $details['name']); ?>" placeholder="Name of the Project">
                    </div>
                    <br/><br/>

                    <div class="input-group">
                        <label>Location</label>
                        <?php echo form_error('vdc'); ?>
                        <input type="text" class="form-control" name="vdc" value="<?php echo set_value('vdc', $details['vdc']); ?>" placeholder="VDC">
                        <?php echo form_error('district'); ?>
                        <select class="form-control" name="district">
                            <?php foreach ($districts as $district_): ?>
                                <option value="<?php echo $district_; ?>"
                                        <?php if (set_value('district', $details['district']) == $district_): ?> selected="selected" <?php endif ?>
                                >
                                        <?php echo $district_; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('latitude'); ?>
                        <input type="text" name="latitude" class="form-control" value="<?php echo set_value('latitude', $details['latitude']); ?>" placeholder="Latitude">
                        <?php echo form_error('longitude'); ?>
                        <input type="text" name="longitude" class="form-control" value="<?php echo set_value('longitude', $details['longitude']); ?>" placeholder="Longitude">
                    </div>
                    <br/><br/>

                    <div class="input-group">
                        <label>Command Area</label>
                        <?php echo form_error('command_area'); ?>
                        <input type="text" name="command_area" class="form-control" value="<?php echo set_value('command_area', $details['command_area']); ?>" placeholder="Command Area">
                    </div>
                    <br/><br/>

                    <div class="input-group">
                        <label>Hydrology</label>
                        <?php echo form_error('source_name'); ?>
                        <input type="text" name="source_name" class="form-control" value="<?php echo set_value('source_name', $details['source_name']); ?>" placeholder="Name of Source">
                        <?php echo form_error('source_type'); ?>
                        <input type="text" name="source_type" class="form-control" value="<?php echo set_value('source_type', $details['source_type']); ?>" placeholder="Type of Source">
                    </div>
                    <br/><br/>

                    <div class="input-group">
                        <label>Canal</label>
                        <?php echo form_error('main_canal_length'); ?>
                        <input type="text" name="main_canal_length" class="form-control" value="<?php echo set_value('main_canal_length', $details['main_canal_length']); ?>" placeholder="Main Canal Length">
                        <?php echo form_error('design_discharge_intake'); ?>
                        <input type="text" name="design_discharge_intake" class="form-control" value="<?php echo set_value('design_discharge_intake', $details['design_discharge_intake']); ?>" placeholder="Design Discharge at Intake">
                    </div>
                    <br/><br/>

                    <div class="input-group">
                        <label>Beneficiaries</label>
                        <?php echo form_error('population'); ?>
                        <input type="text" name="population" class="form-control" value="<?php echo set_value('population', $details['population']); ?>" placeholder="Population">
                        <?php echo form_error('household'); ?>
                        <input type="text" name="household" class="form-control" value="<?php echo set_value('household', $details['household']); ?>" placeholder="Household">
                    </div>
                    <br/><br/>

                    <div class="input-group">
                        <label>Project Cost</label>
                        <?php echo form_error('total_project_cost'); ?>
                        <input type="text" name="total_project_cost" class="form-control" value="<?php echo set_value('total_project_cost', $details['total_project_cost']); ?>" placeholder="Total Project Cost">
                        <?php echo form_error('cost_per_ha'); ?>
                        <input type="text" name="cost_per_ha" class="form-control" value="<?php echo set_value('cost_per_ha', $details['cost_per_ha']); ?>" placeholder="Cost per Ha">
                    </div>
                    <br/><br/>

                    <div class="input-group">
                        <label>Economic Analysis</label>
                        <?php echo form_error('eirr'); ?>
                        <input type="text" name="eirr" class="form-control" value="<?php echo set_value('eirr', $details['eirr']); ?>" placeholder="EIRR">
                    </div>
                    <br/><br/>

                    <div class="input-group">
                        <label>Status</label>
                        <?php echo form_error('status'); ?>
                        <select class="form-control" name="status">
                            <?php foreach ($status as $status_): ?>
                                <option value="<?php echo $status_; ?>"
                                    <?php if (set_value('status', $details['status']) == $status_): ?> selected="selected" <?php endif ?>
                                >
                                    <?php echo $status_; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <br/><br>

                    <div class="input-group">
                        <button type="submit" class="btn btn-primary" id="submit" onclick="return confirm('Are you sure you want to submit this form?');">Submit</button>
                        <a class="btn btn-warning" id="list-admin" href="<?php echo site_url('districts')?>">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).on('click', '#list-admin', function(e){
        if (!confirm('Do you really want to cancel this operation?')){
            e.preventDefault();
        }
    });
</script>