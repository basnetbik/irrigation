        <div class="col-lg-12 frame">
            <iframe width=100% height="300" scrolling="no" frameborder="no"
                    src="<?php echo $url; ?>"
            ></iframe>
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
                                <td>
                                    <a target="_blank" href="<?php echo site_url('project/update/'.$projects_item['id'])?>">Update</a>
                                    | <a class="delete-project" href="<?php echo site_url('project/delete/'.$projects_item['id'])?>">Delete</a>
                                </td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach; ?>
            </table>
        </div>

    </div>

</div>

<script type="text/javascript">
    $(document).on('click', '.delete-project', function(e){
        if (!confirm('Do you really want to delete this project?')){
            e.preventDefault();
        }
    });
</script>