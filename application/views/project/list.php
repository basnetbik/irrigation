        <div class="col-lg-12 frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14127.26978434482!2d85.31879115!3d27.7229222!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1457544362516" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-12">
            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>District</th>
                    <th>Status</th>
                    <th>Net Command Area</th>
                    <th>Beneficiaries Population</th>
                    <?php if($is_admin): ?>
                        <th>Operations</th>
                    <?php endif ?>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($projects as $projects_item): ?>
                        <tr>
                            <td><a target="_blank" href="<?php echo site_url('project/'.$projects_item['id'])?>"><?php echo $projects_item['name']; ?></a></td>
                            <td><?php echo $projects_item['district']; ?></td>
                            <td><?php echo $projects_item['status']; ?></td>
                            <td><?php echo $projects_item['command_area']; ?></td>
                            <td><?php echo $projects_item['population']; ?></td>
                            <?php if($is_admin): ?>
                                <td><a target="_blank" href="<?php echo site_url('project/update/'.$projects_item['id'])?>">Update</a> | <a href="">Delete</a></td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach; ?>
            </table>
        </div>

    </div>

</div>