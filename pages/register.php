<?php include 'header.php';?>

<style>
    body{
        background-color: #545b62;
    }
</style>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-info text-white">
                    <div class="card-header text-center bg-dark">
                        <h4> Registration Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Full Name <sup class="text-danger font-weight-bold">*</sup></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="full_name" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Email <sup class="text-danger font-weight-bold">*</sup></label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Phone Number <sup class="text-danger font-weight-bold">*</sup></label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="phone" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Subject <sup class="text-danger font-weight-bold">*</sup></label>
                                <div class="col-md-9">
                                    <label><input type="checkbox" name="subject[]" value="Bangla"/> Bangla </label>
                                    <label><input type="checkbox" name="subject[]" value="English"/> English </label>
                                    <label><input type="checkbox" name="subject[]" value="Math"/> Math </label>
                                    <label><input type="checkbox" name="subject[]" value="Physics"/> Physics </label>
                                    <label><input type="checkbox" name="subject[]" value="Chemistry"/> Chemistry </label>
                                    <label><input type="checkbox" name="subject[]" value="Biology"/> Biology </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-dark" name="reg_btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>




