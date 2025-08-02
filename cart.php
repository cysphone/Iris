<?php
session_start();

// If booking data is posted from room page
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['booking'] = [
        'room_name'   => $_POST['room_name'],
        'room_price'  => (int) $_POST['room_price'],
        'checkin'     => $_POST['checkin'],
        'checkout'    => $_POST['checkout'],
        'rooms'       => (int) $_POST['rooms'],
        'adults'      => (int) $_POST['adults'],
        'children'    => (int) $_POST['children'],
        'extra_adult' => isset($_POST['extra_adult']) ? (int) $_POST['extra_adult'] : 0,
        'extra_child' => isset($_POST['extra_child']) ? (int) $_POST['extra_child'] : 0,
    ];


    // Nights
    $checkin  = new DateTime($_SESSION['booking']['checkin']);
    $checkout = new DateTime($_SESSION['booking']['checkout']);
    $nights   = $checkin->diff($checkout)->days;
    if ($nights <= 0) $nights = 1;
    $_SESSION['booking']['nights'] = $nights;

    $roomRate  = $_SESSION['booking']['room_price'];
    $roomCost  = $roomRate * $nights * $_SESSION['booking']['rooms'];
    $extraCost = $_SESSION['booking']['extra_adult'] + $_SESSION['booking']['extra_child'];

    $_SESSION['booking']['subtotal'] = $roomCost + $extraCost;
    $_SESSION['booking']['total']    = $_SESSION['booking']['subtotal'];
}

$booking = $_SESSION['booking'] ?? null;
if (!$booking) {
    echo "<p>No booking found. Please go back and select a room.</p>";
    exit;
}
?>
<?php include 'includes/header.php'; ?>
<section data-anim-wrap class="pageHero -type-1 -items-center">
  <div data-anim-child="img-right cover-white delay-1" class="pageHero__bg">
    <img src="img/pageHero/1.png" alt="image">
  </div>
  <div class="container">
    <div class="row justify-center">
      <div class="col-auto">
        <div data-split='lines' data-anim-child="split-lines delay-3" class="pageHero__content text-center">
          <h1 class="pageHero__title text-white">Cart Page</h1>
          <p class="pageHero__text text-white">Review your booking before checkout</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="layout-pt-lg layout-pb-lg">
  <div class="container">
    <div class="row y-gap-40 justify-between">
      <!-- LEFT: Booking details in table -->
      <div class="col-xl-7 col-lg-7">
        <div class="tableWrap">
          <table class="table -type-1">
            <tr class="table__header bg-light-1">
              <th>PRODUCT</th>
              <th>PRICE</th>
              <th>QUANTITY</th>
              <th>SUBTOTAL</th>
            </tr>

            <tr>
              <td>
                <div class="d-flex items-center">
                  <img src="img/roomsSingle/3/2.png" alt="image">
                  <div class="ml-30">
                    <h2 class="text-24 fw-500"><?= $_SESSION['booking']['room_name'] ?></h2>

                    <div class="text-15 mt-15">
                      <span class="fw-500">Date:</span>
                      <?= $_SESSION['booking']['checkin'] ?> - <?= $_SESSION['booking']['checkout'] ?>
                    </div>

                    <div class="text-15 mt-5">
                      <span class="fw-500">Details:</span>
                      Rooms: <?= $_SESSION['booking']['rooms'] ?>,
                      Adults: <?= $_SESSION['booking']['adults'] ?>,
                      Children: <?= $_SESSION['booking']['children'] ?>,
                      Nights: <?= $_SESSION['booking']['nights'] ?>
                    </div>

                    <td>₹<?= number_format($_SESSION['booking']['room_price'], 2) ?></td>
                    <td><?= $_SESSION['booking']['rooms'] ?></td>
                    <td>₹<?= number_format($_SESSION['booking']['subtotal'], 2) ?></td>
            </tr>
          </table>
        </div>

        <div class="row y-gap-30 justify-between pt-30">
          <div class="col-auto">
            <div class="row y-gap-30">
              <div class="col-auto">
                <div class="contactForm">
                  <div class="form-input -h-55">
                    <input type="text" class="">
                    <label class="lh-1 text-16 text-light-1">Coupon code</label>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <button class="button -md -type-2 bg-accent-2 -accent-1">Apply Coupon</button>
              </div>
            </div>
          </div>

          <div class="col-auto">
            <button class="button -md -type-2 -outline-accent-1">Update Cart</button>
          </div>
        </div>
      </div>

      <!-- RIGHT: Totals box -->
      <div class="col-xl-4 col-lg-5">
        <div class="sidebar px-40 py-40 bg-light-1">
          <h3 class="text-30">Cart totals</h3>

          <div class="row y-gap-15 pt-30">
            <div class="col-12">
              <div class="d-flex justify-between">
                <div class="fw-500">Subtotal</div>
                <div class="fw-500">₹<?= number_format($booking['subtotal'], 2) ?></div>
              </div>
            </div>

            <div class="col-12">
              <div class="line -horizontal bg-border"></div>
            </div>

            <div class="col-12">
              <div class="d-flex justify-between">
                <div class="fw-500">Total</div>
                <div class="fw-500">₹<?= number_format($booking['total'], 2) ?></div>
              </div>
            </div>
          </div>

          <a href="checkout.php" class="button -md bg-accent-1 -accent-2 text-white w-1/1 mt-30">
            Proceed to checkout
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>