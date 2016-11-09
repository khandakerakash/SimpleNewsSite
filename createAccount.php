<?php include('header.php');?>
        <!-- Start Accoun create Form -->
        <div class="container create-account-page">
            <div class="row">
                <!-- form: -->
                <section>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="page-header">
                            <h2>Create an Account for <span style="color: #ED1c24;">Newedge</span> Admin</h2>
                        </div>

                        <form id="defaultForm" method="POST" class="form-horizontal" action="">
                            <div class="alert alert-success" style="display: none;"></div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">First Name</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="first_name" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Last Name</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="last_name" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">E-mail</label>
                                <div class="col-lg-5">
                                    <input type="email" class="form-control" name="email" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Password</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" name="password" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-3">
                                    <button type="submit" class="btn btn-primary" name="admin_account">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- :form -->
            </div>
        </div>
        <!-- End Of Account Create Form -->
        <?php include('footer.php');?>
    </body>
</html>