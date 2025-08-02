<?php
session_start();

// Redirect if no booking data
if (!isset($_SESSION['booking'])) {
    header("Location: index.php");
    exit;
}
$booking = $_SESSION['booking'];
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
              <h1 class="pageHero__title text-white">Checkout</h1>
              <p class="pageHero__text text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg">
      <div class="container">
        <div class="row y-gap-40 justify-between">
          <div class="col-xl-7 col-lg-7">
            <h2 class="text-30 mb-50">Billing details</h2>

            <div class="contactForm row y-gap-30">
              <div class="col-md-6">

                <div class="form-input ">
                  <input type="text" required class="">
                  <label class="lh-1 text-16 text-light-1">First Name</label>
                </div>

              </div>

              <div class="col-md-6">

                <div class="form-input ">
                  <input type="text" required class="">
                  <label class="lh-1 text-16 text-light-1">Last Name</label>
                </div>

              </div>

              <div class="col-12">

                <div class="form-input ">
                  <input type="text" required class="">
                  <label class="lh-1 text-16 text-light-1">Company name (optional)</label>
                </div>

              </div>

              <div class="col-12">

                <div class="form-input ">
                  <input type="text" required class="">
                  <label class="lh-1 text-16 text-light-1">Country / Region *</label>
                </div>

              </div>

              <div class="col-12">

                <div class="form-input ">
                  <input type="text" required class="">
                  <label class="lh-1 text-16 text-light-1">House number and street name</label>
                </div>

              </div>

              <div class="col-12">

                <div class="form-input ">
                  <input type="text" required class="">
                  <label class="lh-1 text-16 text-light-1">Apartment, suite, unit, etc. (optional)</label>
                </div>

              </div>

              <div class="col-12">

                <div class="form-input ">
                  <input type="text" required class="">
                  <label class="lh-1 text-16 text-light-1">State *</label>
                </div>

              </div>

              <div class="col-12">

                <div class="form-input ">
                  <input type="text" required class="">
                  <label class="lh-1 text-16 text-light-1">ZIP *</label>
                </div>

              </div>

              <div class="col-12">

                <div class="form-input ">
                  <input type="text" required class="">
                  <label class="lh-1 text-16 text-light-1">Phone *</label>
                </div>

              </div>

              <div class="col-12">

                <div class="form-input ">
                  <input type="text" required class="">
                  <label class="lh-1 text-16 text-light-1">Email Address *</label>
                </div>

              </div>
            </div>


            <h2 class="text-30 mb-50 pt-100 sm:pt-50">Additional information</h2>

            <div class="contactForm row y-gap-30">
              <div class="col-12">

                <div class="form-input ">
                  <textarea required class="border-1" rows="10"></textarea>
                  <label class="lh-1 ">Order notes (optional)</label>
                </div>

              </div>
            </div>
          </div>

        <div class="col-xl-4 col-lg-5">
          <div class="sidebar px-40 py-40 bg-light-1 shadow-1">
            <h3 class="text-30 mb-30">Your Order</h3>

            <div class="d-flex justify-between mb-15">
              <span>Room:</span>
              <span><?= htmlspecialchars($booking['room_name']) ?></span>
            </div>
            <div class="d-flex justify-between mb-15">
              <span>Dates:</span>
              <span><?= $booking['checkin'] ?> - <?= $booking['checkout'] ?></span>
            </div>
            <div class="d-flex justify-between mb-15">
              <span>Nights:</span>
              <span><?= $booking['nights'] ?></span>
            </div>
            <div class="d-flex justify-between mb-15">
              <span>Guests:</span>
              <span><?= $booking['adults'] ?> Adults, <?= $booking['children'] ?> Children</span>
            </div>
            <?php if ($booking['extra_adult']) : ?>
            <div class="d-flex justify-between mb-15">
              <span>Extra Mattress (Adult):</span>
              <span>₹<?= $booking['extra_adult'] ?></span>
            </div>
            <?php endif; ?>
            <?php if ($booking['extra_child']) : ?>
            <div class="d-flex justify-between mb-15">
              <span>Extra Mattress (Child):</span>
              <span>₹<?= $booking['extra_child'] ?></span>
            </div>
            <?php endif; ?>
            
            <hr class="mt-20 mb-20">

            <div class="d-flex justify-between fw-500">
              <span>Total:</span>
              <span>₹<?= $booking['total'] ?></span>
            </div>

            <button type="submit" class="button -md bg-accent-1 -accent-2 text-white w-1/1 mt-30">
              Place Order
            </button>
          </div>
        </div>
        </div>
      </div>
    </section>

 <?php include 'includes/footer.php'; ?>