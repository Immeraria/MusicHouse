@extends('layouts.app')

@section('content')

<div class="container">

    <section class="h-100 h-custom">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class=" shopping-cart">
          <div class="card-body text-black">

            <div class="row">
              <div class="col-lg-6 px-5 py-4">

                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Товары в корзине</h3>

                <div class="d-flex align-items-center mb-5">
                  <div class="flex-shrink-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp"
                      class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                    <h5 class="text-primary">Samsung Galaxy M11 64GB</h5>
                    <h6 style="color: #9e9e9e;">Color: white</h6>
                    <div class="d-flex align-items-center">
                      <p class="fw-bold mb-0 me-5 pe-3">799$</p>
                      <div class="def-number-input number-input safari_only align-items-center">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                          class="minus"></button>
                        <input class="quantity fw-bold text-black" min="0" name="quantity" value="1"
                          type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                          class="plus"></button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-5">
                  <div class="flex-shrink-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/6.webp"
                      class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                    <h5 class="text-primary">Headphones Bose 35 II</h5>
                    <h6 style="color: #9e9e9e;">Color: Red</h6>
                    <div class="d-flex align-items-center">
                      <p class="fw-bold mb-0 me-5 pe-3">239$</p>
                      <div class="def-number-input number-input safari_only align-items-center">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                          class="minus"></button>
                        <input class="quantity fw-bold text-black" min="0" name="quantity" value="1"
                          type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                          class="plus"></button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-5">
                  <div class="flex-shrink-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                      class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                    <h5 class="text-primary">iPad 9.7 6-gen WiFi 32GB</h5>
                    <h6 style="color: #9e9e9e;">Color: rose pink</h6>
                    <div class="d-flex align-items-center">
                      <p class="fw-bold mb-0 me-5 pe-3">659$</p>
                      <div class="def-number-input number-input safari_only align-items-center">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                          class="minus"></button>
                        <input class="quantity fw-bold text-black" min="0" name="quantity" value="2"
                          type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                          class="plus"></button>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">

                <div class="d-flex justify-content-between px-x">
                  <p class="fw-bold">Discount:</p>
                  <p class="fw-bold">95$</p>
                </div>
                <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                  <h5 class="fw-bold mb-0">Total:</h5>
                  <h5 class="fw-bold mb-0">2261$</h5>
                </div>

              </div>
              <div class="col-lg-6 px-5 py-4">

                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Способ оплаты</h3>

                <form class="mb-5">

                  <div class="form-outline mb-5">
                    <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                      placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                    <label class="form-label" for="typeText">Номер карты</label>
                  </div>

                  <div class="form-outline mb-5">
                    <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                      placeholder="John Smith" />
                    <label class="form-label" for="typeName">Имя на карте</label>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                        <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="01/22"
                          size="7" id="exp" minlength="7" maxlength="7" />
                        <label class="form-label" for="typeExp">мм/гг</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                        <input type="password" id="typeText" class="form-control form-control-lg"
                          placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                        <label class="form-label" for="typeText">CVV</label>
                      </div>
                    </div>
                  </div>

                  <p class="mb-5">Продолжая, вы соглашаетесь с пользовательским соглашением <a
                      href="#!">пользовательским соглашением</a>.</p>

                  <button type="button" class="btn btn-primary btn-block btn-lg">Buy now</button>

                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

@endsection