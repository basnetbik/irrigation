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
                        <td class="cat-title">Location</td>
                    </tr>
                    <tr>
                        <td>VDC</td>
                        <td><?php echo $details['vdc']; ?></td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td><?php echo $details['district']; ?></td>
                    </tr>
                    <tr class="empty"></tr>
                    <tr class="cat-title">
                        <td>Area</td>
                    </tr>
                    <tr>
                        <td>Command Area</td>
                        <td><?php echo $details['command_area']; ?></td>
                    </tr>
                    <tr class="empty"></tr>
                    <tr>
                        <td class="cat-title">Hydrology</td>
                    </tr>
                    <tr>
                        <td>Name of Source</td>
                        <td><?php echo $details['source_name']; ?></td>
                    </tr>
                    <tr>
                        <td>Type of Source</td>
                        <td><?php echo $details['source_type']; ?></td>
                    </tr>
                    <tr class="empty"></tr>
                    <tr class="cat-title"><td>Canal</td></tr>
                    <tr>
                        <td>Main Canal Length</td>
                        <td><?php echo $details['main_canal_length']; ?></td>
                    </tr>
                    <tr>
                        <td>Design Discharge at Intake&nbsp;&nbsp;  </td>
                        <td><?php echo $details['design_discharge_intake']; ?></td>
                    </tr>
                    <tr class="empty"></tr>
                    <tr class="cat-title">
                        <td>Beneficiaries</td>
                    </tr>
                    <tr>
                        <td>Population</td>
                        <td><?php echo $details['population']; ?></td>
                    </tr>
                    <tr>
                        <td>Household</td>
                        <td><?php echo $details['household']; ?></td>
                    </tr>
                    <tr class="empty"></tr>
                    <tr class="cat-title">
                        <td>Project Cost</td>
                    </tr>
                    <tr>
                        <td>Total Project Cost</td>
                        <td><?php echo $details['total_project_cost']; ?></td>
                    </tr>
                    <tr>
                        <td>Cost per Ha</td>
                        <td><?php echo $details['cost_per_ha'] ?></td>
                    </tr>
                    <tr class="empty"></tr>
                    <tr class="cat-title">
                        <td>Economic Analysis</td>
                    </tr>
                    <tr>
                        <td>EIRR</td>
                        <td><?php echo $details['eirr']; ?></td>
                    </tr>
                    <tr class="empty"></tr>
                </table>
            </div>
        </div>
        <div class="col-lg-6 frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14127.26978434482!2d85.31879115!3d27.7229222!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1457544362516" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
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