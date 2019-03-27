<?php require_once 'includes/header.php'; ?>

    <section class="main-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-2 col-sm-4 col-xs-12 padding-right15">
                    <?php require_once 'includes/sidebar.php'; ?>
                </div>

                <div class="col-md-9 col-lg-10 col-sm-8 col-xs-12 padding-left15">
                    <div class="main-content">
                        <div class="display-flax-content">
                            <div class="section-title">
                                <h2>Inbox</h2>
                            </div>
                            <div class="inbox">
                                <table class="table table-striped" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                            $getAllMsg = $contact->getAllMessages();
                                            if ($getAllMsg) {
                                                $i=0;
                                                while ($value = $getAllMsg->fetch_assoc()) {
                                                    $i++;

                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $value['name']; ?> </td>
                                            <td><?php echo $value['email']; ?> </td>
                                            <td><?php echo $value['subject']; ?> </td>
                                            <td><?php echo $value['messages']; ?> </td>
                                            <td><a href="">Seen</a> || <a href="">Delete</a></td>
                                        </tr>
                                    <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
