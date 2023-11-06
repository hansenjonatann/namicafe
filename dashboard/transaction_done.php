<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nami Cafe - Dashboard | Transaction Done</title>
    <!-- bootstrap 5 css -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
      integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../src/css/style.css" />
    <!-- custom css -->
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
  </head>

  <body class="bg-secondary">
    <div>
      <div class="sidebar p-4 bg-primary" id="sidebar">
        <h4 class="mb-5 text-white"><i class="bi bi-person mr-2"></i>Nami Cafe</h4>
        <hr class="bg-white h-5">
        <li>
          <a class="text-white" href="../dashboard/index.php">
            <i class="bi bi-house mr-2"></i>
            Dashboard
          </a>
        </li>
        <li>
          <a class="text-white" href="../dashboard/start_transaction.php">
            <i class="bi bi-cart mr-2"></i>
            Start Transaction
          </a>
        </li>
        <li class="active">
          <a class="text-white" href="../dashboard/transaction.php">
            <i class="bi bi-newspaper mr-2"></i>
            Transaction
          </a>
        </li>
        <li>
          <a class="text-white" href="../dashboard/report.php">
            <i class="bi bi-bicycle mr-2"></i>
            Report
          </a>
        </li>
        <li>
          <a class="text-white" href="../dashboard/close_cashier.php">
            <i class="bi bi-boombox mr-2"></i>
            Close Cashier
          </a>
        </li>
        <li>
          <a class="text-white" href="../dashboard/settings.php">
            <i class="bi bi-film mr-2"></i>
            Settings
          </a>
        </li>
      </div>
    </div>
    <div class="p-4" id="main-content">
          <button class="btn btn-primary" id="button-toggle">
            <i class="bi bi-list"></i>
          </button>
          <span class="fs-3">Transaction</span>
          <div class="container mt-5">

            <div class="row d-flex justify-content-center text-center  ">
              <div class="col-md-6">
                <a href="../dashboard/transaction_order.php" class="text-primary fs-1">Order</a>
              </div>
              <div class="col-md-6  border-dark border-bottom ">
                <a class="text-primary" href="../dashboard/transaction_done.php">Done</a>
              </div>
            </div>
            
          </div>
          
        </div>

      <script src="../src/js/script.js"></script>
  </body>
</html>
