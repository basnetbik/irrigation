<div class="container">
    <div class="row">
        <div style="max-width: 1000px;  padding: 20px; margin: 20px auto; background-color: rgba(255,255,255,0.4)">
            <div style=""><h4>Add New Project</h4></div>
            <div class="form-group" style="">
                <div class="input-group">
                    <label>Project Introduction</label>
                    <input type="text" class="form-control" placeholder="Name of the Project">
                </div>
                <br/>
                <div class="input-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="VDC/Municipality and Ward No">
                    <select class="form-control">
                        <?php foreach ($districts as $district_): ?>
                            <option value="<?php echo $district_; ?>"><?php echo $district_; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <br>
                <div class="input-group">
                    <label>Geographical Location</label>
                    <input type="text" class="form-control" placeholder="Latitude">
                    <input type="text" class="form-control" placeholder="Longitude">
                </div>
                <br/>
                <div class="input-group">
                    <label>Beneficiries</label>
                    <input type="text" class="form-control" placeholder="Population">
                    <input type="text" class="form-control" placeholder="Household">
                </div>
                <br/>
                <div class="input-group">
                    <label>Hydrology</label>
                    <input type="text" class="form-control" placeholder="Name of Source">
                    <input type="text" class="form-control" placeholder="Measured Discharge">
                </div>
                <br/>
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

</div>