<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>asset/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->

    </head>
<body><div class="container">
<div class="col-lg-12">
    <h2>Brand details</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>image</th>
                <th>add</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <?php echo $error;?>
                <?php echo form_open_multipart('main/add')?>
                <input type="hidden" name="action" value="add_details">
                <td ><input class="form-control" style="width:100%" type="text" name="title"></td>
                <td ><input class="form-control" style="width:100%" type="text" name="desc"></td>
                <td >
                    <input type="file" name="userfile" size="20" />


                              </td>
                <td> <input type="submit" value="add details" />     </td>

            </tr>
            </form>
            </tbody>
        </table>
    </div>
</div>
</div>
</body>
</html>