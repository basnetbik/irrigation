<div class="container">
    <div class="row">
        <h4>Projects List
            <?php if ($is_admin): ?>
                | <a  href="<?php echo site_url('project/add')?>">Add New Project</a>
                | <a  href="<?php echo site_url('district/update/all')?>">Edit Map Url</a>
            <?php endif ?>
        </h4>
        <hr/>
        <div class="col-lg-7">
            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>S. N</th>
                    <th>District</th>
                    <th>Total Projects</th>
                    <th>Command Area</th>
                    <th>Total Irrigated Area</th>
                    <?php if ($is_admin): ?>
                        <th>Operations</th>
                    <?php endif ?>
                </tr>
                </thead>
                <tbody>

                    <?php foreach ($districts as $districts_item): ?>
                        <tr id="<?php echo $districts_item['district']; ?>" class="district_photo" ">
                            <td><?php echo $districts_item['s_no']; ?></td>
                            <td><a href="<?php echo site_url('projects/?district='.$districts_item['district'])?>"><?php echo $districts_item['district']; ?></a></td>
                            <td><?php echo $districts_item['total_projects']; ?></td>
                            <td><?php echo $districts_item['command_area']; ?></td>
                            <td><?php echo $districts_item['total_irrigated_area']; ?></td>
                            <?php if ($is_admin): ?>
                                <td><a href="<?php echo site_url('district/update/'.$districts_item['district']);?>">Edit</a></td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        <div class="col-lg-5 frame" style="padding:0">
            <div id="chart" style="height: 400px; width: 100%">
                <h5 class="district_name"></h5>
                <a target="_blank" class="image_url">
                    <img class="image" width="100%" />
                </a>
            </div>
        </div>
    </div>

</div>

<script>
$('.district_photo').mouseover(function(){
    var url = 'static/images/uploads/'+$(this).attr('id')+'.jpg';
    $('.image').attr('src', "<?php echo base_url(); ?>"+url);
    $('.image_url').attr('href', "<?php echo base_url(); ?>"+url);
    $('.district_name').text('District: '+$(this).attr('id'))
})

</script>