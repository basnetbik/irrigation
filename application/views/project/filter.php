<div class="container">
    <div class="row">
        <div class="row">
            <?php echo form_open('projects', array('method'=>'get')); ?>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="district" class="col-lg-2 control-label">District</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="district" name="district">
                                <option value="all"
                                    <?php if ($district == 'all'): ?> selected="selected" <?php endif ?>
                                >
                                    All
                                </option>
                                <?php foreach ($districts as $district_): ?>
                                    <option value="<?php echo $district_; ?>"
                                        <?php if ($district == $district_): ?> selected="selected" <?php endif ?>
                                    >
                                        <?php echo $district_; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="status" class="col-lg-2 control-label">Status</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="status" name="status">
                                <option value="all"
                                    <?php if ($status == 'all'): ?> selected="selected" <?php endif ?>
                                >
                                    All
                                </option>
                                <?php foreach ($status_list  as $status_): ?>
                                    <option value="<?php echo $status_; ?>"
                                        <?php if ($status == $status_): ?> selected="selected" <?php endif ?>
                                    >
                                        <?php echo $status_; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form class="" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" id="name" name="name" value="<?php echo $name?>" class="form-control" placeholder="Search by name">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            
            </form>
        </div>

<script>

    function query() {
        var district = $('#district').val();
        var status = $('#status').val();
        var name = $('#name').val();
        var url = "<?php echo site_url('projects')?>";
        url += '?district=' + district + '&status=' + status + '&name=' + name;
        window.location = url;
    }
    $(document).on('change', '#district', function(e){
       query();
    });

    $(document).on('change', '#status', function(e){
       query();
    });

</script>