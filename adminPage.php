<?php include('header.php');?>
<!-- Start Accoun create Form -->
<div class="container admin-page">
    <div class="row">
        <!-- form: -->
        <section>
            <div class="col-lg-10 col-lg-offset-1">
                <div class="page-header">
                    <h2>Welcome to <span style="color: #ED1c24;">Newedge</span> Admin Page</h2>
                </div>

                <form id="defaultForm" method="POST" class="form-horizontal" action="">
                    <div class="alert alert-success" style="display: none;"></div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Heading</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="news_heading" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Description</label>
                        <div class="col-lg-7">
                            <textarea name="post_description" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-3">
                            <button type="submit" class="btn btn-primary" name="news_post">Post</button>
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