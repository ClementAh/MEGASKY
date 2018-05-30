<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>MEGASKY</title>
    <link rel="shortcut icon" href="../assets/img/megasky.ico">

</head>
<body>

<?php include "../pages/header.php "?>


<div class="jarallax">
    <img class="jarallax-img" src="" alt="">
    Your content here...
</div>


<?php include "../pages/slider_tv.php "?>

<?php include "../pages/slider_banda_larga.php "?>

<?php include "../pages/banner.php "?>

<?php include "../pages/contact_section.php"?>

<?php include "../pages/footer.php "?>


<!-- Modal -->
<div class="modal fade" id="formAssine" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ASSINE JA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="../pages/form_contact.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome" name="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"  placeholder="Email" name="mail">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Telephone" name="telephone">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="categories">
                            <option>BANDA LARGA</option>
                            <option>PRE PAGO</option>
                            <option>POS PAGO</option>

                        </select>
                    </div>
                    <div class="form-group">

                        <textarea class="form-control" name="message" placeholder="Message" rows="5"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="assine" class="btn btn-primary">ASSINE</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

<?include "../pages/form_contact.php"?>
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax.min.js"></script>
<script src="jarallax/dist/jarallax.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>