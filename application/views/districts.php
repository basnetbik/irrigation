<div class="container">
    <div class="row">
        <h4>Projects List </h4>
        <hr/>
        <div class="col-lg-6">
            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>District</th>
                    <th>Total Projects</th>
                    <th>Area Covered</th>
                </tr>
                </thead>
                <tbody>

                    <?php foreach ($districts as $districts_item): ?>
                        <tr>
                            <td><?php echo $districts_item['s_no']; ?></td>
                            <td><a href="<?php echo site_url('list/'.$districts_item['district'])?>"><?php echo $districts_item['district']; ?></a></td>
                            <td><?php echo $districts_item['total_projects']; ?></td>
                            <td><?php echo $districts_item['area_covered']; ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        <div class="col-lg-6 frame">
            <div id="chart" style="height: 300px; width: 100%">
                <ul class="chart">
                    <li>
                        <span style="height:<?php echo $status['completed']; ?>%" title="Completed"></span>
                    </li>
                    <li>
                        <span style="height:<?php echo $status['under_construction']; ?>%" title="Under Construction"></span>
                    </li>
                    <li>
                        <span style="height:<?php echo $status['surveyed']; ?>%" title="Surveyed"></span>
                    </li>
                    <li>
                        <span style="height:<?php echo $status['proposed']; ?>%" title="Proposed"></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>