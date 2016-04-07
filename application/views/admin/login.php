<div class="container">

    <div class="row">
        <div style="max-width: 500px;  padding: 20px; margin: 100px auto; background-color: rgba(255,255,255,0.4)">
            <div style=""><h4>Login</h4></div>
            <?php echo form_open('admin'); ?>
                <div class="form-group">
                    <div class="input-group">
                        <label class="label">Username</label>
                        <?php echo form_error('username'); ?>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <label class="label">Password</label>
                        <?php echo form_error('password'); ?>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <br>
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>