        <div class="col-lg-6">
            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Area Covered</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($projects as $projects_item): ?>
                        <tr>
                            <td><?php echo $projects_item['s_no']; ?></td>
                            <td><a href=<?php echo site_url('project/'.$projects_item['name'])?>"><?php echo $projects_item['name']; ?></a></td>
                            <td><?php echo $projects_item['address']; ?></td>
                            <td><?php echo $projects_item['area_covered']; ?></td>
                        </tr>
                    <?php endforeach; ?>
            </table>
        </div>
        <div class="col-lg-6 frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14127.26978434482!2d85.31879115!3d27.7229222!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1457544362516" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </div>

</div>