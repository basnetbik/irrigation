<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="district" class="col-lg-2 control-label">District</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="district" name="district">
                            <option value="all">All</option>
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
                        <select class="form-control" id="status">
                            <option value="all">All</option>
                            <?php foreach ($status as $status_): ?>
                                <option value="<?php echo $status_; ?>"
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
                            <input type="text" class="form-control" placeholder="Search by name">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br/><br/>