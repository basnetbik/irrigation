        <div class="col-lg-6">
            <div class="row">
                <h4><?php echo $details['district']; ?>: <?php echo $details['name']; ?></h4>
                <?php if($is_admin): ?>
                    <a href="<?php echo site_url('project/update/'.$details['id'])?>">Update Project</a>
                    | <a id="delete-project" href="<?php echo site_url('project/delete/'.$details['id'])?>">Delete Project</a>
                <?php endif ?>
                <hr>
                <table style="font-size: 15px">
                    <tr>
                        <td>Location(VDC, District)</td>
                        <td><?php echo $details['vdc']; ?>, <?php echo $details['district']; ?></td>
                    </tr>
                    <tr>
                        <td>Command Area</td>
                        <td><?php echo $details['command_area']; ?></td>
                    </tr>
                    <tr>
                        <td>Hydrology(Name/Type of Source)</td>
                        <td><?php echo $details['source_name']; ?>/<?php echo $details['source_type']; ?></td>
                    </tr>
                    <tr>
                        <td>Canal(Main Canal Length/Design Discharge at Intake)</td>
                        <td><?php echo $details['main_canal_length']; ?>/<?php echo $details['design_discharge_intake']; ?></td>
                    </tr>
                    <tr>
                        <td>Beneficiaries(Population/Household)</td>
                        <td><?php echo $details['population']; ?>/<?php echo $details['household']; ?></td>
                    </tr>
                    <tr>
                        <td>Project Cost(Total Project Cost/Cost per Ha)</td>
                        <td><?php echo $details['total_project_cost']; ?>/<?php echo $details['cost_per_ha'] ?></td>
                    </tr>
                    <tr>
                        <td>Economic Analysis(EIRR)</td>
                        <td><?php echo $details['eirr']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-lg-6 frame">
            <iframe width=100% height="300" scrolling="no" frameborder="no"
                    src="<?php echo $details['url']; ?>"
            ></iframe>
        </div>

    </div>

</div>

<script type="text/javascript">
    $(document).on('click', '#delete-project', function(e){
        if (!confirm('Do you really want to delete this project?')){
            e.preventDefault();
        }
    });
</script>