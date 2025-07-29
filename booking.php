<?php include 'includes/header.php'; ?>

    <section data-anim-wrap class="pageHero -type-1 -items-center">
      <div data-anim-child="img-right cover-white delay-1" class="pageHero__bg">
        <img src="img/pageHero/1.png" alt="image">
      </div>

      <div class="container">
        <div class="row justify-center">
          <div class="col-auto">
            <div data-split='lines' data-anim-child="split-lines delay-3" class="pageHero__content text-center">
              <h1 class="pageHero__title text-white">Booking Page</h1>
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
            <div class="text-21 fw-500 mb-50">Order #231108-084706171</div>

            <div class="row y-gap-30 items-center">
              <div class="col-md-auto col-12">
                <img src="img/roomsSingle/3/1.png" alt="image" class="col-md-auto col-12">
              </div>

              <div class="col-sm">
                <div class="row y-gap-20 justify-between">
                  <div class="col-auto">
                    <h2 class="text-40 fw-500">Luxury Villa Suite</h2>

                    <div class="mt-30"><span class="fw-500">Date:</span> 2023-11-08 - 2023-11-09</div>
                    <div class="mt-15"><span class="fw-500">Details:</span> Rooms: 1, Adults: 1,</div>
                  </div>

                  <div class="col-auto">
                    <div class="text-19">$499 / NIGHT</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="line -horizontal bg-border mt-50 mb-50"></div>

            <div class="row x-gap-40 y-gap-20 justify-end text-right">
              <div class="col-auto">
                <div class="text-19">Subtotal:</div>
                <div class="text-19 mt-10">Total:</div>
                <div class="text-19 mt-10">Amount Paid:</div>
                <div class="text-19 mt-10">Amount Due:</div>
              </div>

              <div class="col-auto">
                <div class="text-19 fw-500">$3584</div>
                <div class="text-19 fw-500 mt-10">$3584</div>
                <div class="text-19 fw-500 mt-10">$0</div>
                <div class="text-19 fw-500 mt-10">$3584</div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-5">
            <div class="sidebar px-40 py-40 bg-light-1">
              <h3 class="text-30 mb-30">Contact Information</h3>

              <div class="contactForm">
                <div class="row y-gap-30 pt-40">

                  <div class="col-12">
                    <div class="form-input">

                      <div class="form-input ">
                        <input type="text" required class="">
                        <label class="lh-1 text-16 text-light-1">First Name</label>
                      </div>

                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-input">

                      <div class="form-input ">
                        <input type="text" required class="">
                        <label class="lh-1 text-16 text-light-1">First Name</label>
                      </div>

                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-input">

                      <div class="form-input ">
                        <input type="text" required class="">
                        <label class="lh-1 text-16 text-light-1">Email</label>
                      </div>

                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-input">

                      <div class="form-input ">
                        <input type="text" required class="">
                        <label class="lh-1 text-16 text-light-1">Re-Type Email</label>
                      </div>

                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-input">

                      <div class="form-input ">
                        <input type="text" required class="">
                        <label class="lh-1 text-16 text-light-1">Contact Phone</label>
                      </div>

                    </div>
                  </div>

                </div>
              </div>


              <div class="form-radio d-flex items-center mt-40">
                <div class="radio">
                  <input type="radio" name="name">
                  <div class="radio__mark">
                    <div class="radio__icon"></div>
                  </div>
                </div>
                <div class="lh-1 ml-10">Amount to Pay now: <span class="fw-500">$960</span></div>
              </div>


              <h3 class="text-30 mt-40">Payment Method</h3>
              <div class="fw-500 uppercase mt-30">PAY LATER</div>
              <div class="line -horizontal bg-border mt-20"></div>
              <div class="text-19 mt-30 mb-20">Book now, pay later!</div>


              <div class="d-flex items-center">
                <div class="form-checkbox ">
                  <input type="checkbox" name="name">
                  <div class="form-checkbox__mark">
                    <div class="form-checkbox__icon">
                      <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.29082 0.971021C9.01235 0.692189 8.56018 0.692365 8.28134 0.971021L3.73802 5.51452L1.71871 3.49523C1.43988 3.21639 0.987896 3.21639 0.709063 3.49523C0.430231 3.77406 0.430231 4.22604 0.709063 4.50487L3.23309 7.0289C3.37242 7.16823 3.55512 7.23807 3.73783 7.23807C3.92054 7.23807 4.10341 7.16841 4.24274 7.0289L9.29082 1.98065C9.56965 1.70201 9.56965 1.24984 9.29082 0.971021Z" fill="white" />
                      </svg>
                    </div>
                  </div>
                </div>

                <div class="fw-500 ml-10">I read and agree to the terms & conditions</div>

              </div>


              <div class="mt-20">You have to edit “Terms & Conditions” page to replace this start content with your own.</div>

              <button class="button -md bg-accent-1 -accent-2 text-white w-1/1 mt-40">COMPLETE MY ORDER</button>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'includes/footer.php'; ?>