<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include('inc/header.php'); ?>
</head>
<body>

    <h2 class="text-danger p-4">Tool Tips</h2>

    <button type="button" class="btn btn-success" data-html="true" data-toggle="toolpit" data-placement="top" title="<em>Tool Tip</em> On <b>Top</b>">TopToolPit</button>


    <div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>

    <br>
    <i class="bi bi-emoji-smile-fill fs-1"></i>



    <script>
      // setTimeout(() => {
      //   document.write("Hello delay for 3 seconds");
      // }, 3000);
    </script>

    

    <?php include('inc/footer-links.php'); ?>
</body>
</html>