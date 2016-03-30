<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="district" class="col-lg-2 control-label">District</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="district">
                            <option>All</option>
                            <?php foreach ($districts as $district_): ?>
                                <option><?php echo $district_; ?></option>
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
                            <option>All</option>
                            <option>Completed</option>
                            <option>Under Construction</option>
                            <option>Under Survey</option>
                            <option>Proposed</option>
                            <option>Planned</option>
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