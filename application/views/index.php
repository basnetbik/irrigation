<div class="container">
    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <h1>Irrigation Information Management System</h1>
            <p>Various information related with the irrigation projects located at districts in the central region is systematically furnished in the Irrigation Information Management System. Along with the basic information, Spatial location of irrigation systems in the respective district map and project information bar diagram showing three stages of project execution - demand or pipe line, under construction and completion stages - are currently in display. With the availability of relevant data the IIMS shall be updated periodically.</p>
            <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('districts'); ?>">View Projects</a></p>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div id="chart" style="height: 300px; width: 100%">
                <h5 style="text-align: center; margin-top: 40px;">Total Projects: <?php echo $status['total']['no']; ?> </h5>
                <ul class="chart">
                    <li>
                        <div style="text-align: center;"><?php echo $status['Construction Completed']['no']; ?></div>
                        <span style="height:<?php echo $status['Construction Completed']['percent']; ?>%" title="Construction Completed"></span>
                    </li>
                    <li>
                        <div style="text-align: center"><?php echo $status['Under Construction']['no']; ?></div>
                        <span style="height:<?php echo $status['Under Construction']['percent']; ?>%" title="Under Construction"></span>
                    </li>
                    <li>
                        <div style="text-align: center"><?php echo $status['Pipeline Project']['no']; ?></div>
                        <span style="height:<?php echo $status['Pipeline Project']['percent']; ?>%" title="Pipeline Project"></span>
                    </li>
                </ul>
            </div>
              </div>
    </div>
</div>