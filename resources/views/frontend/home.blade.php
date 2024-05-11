@extends('layouts.site')
@section('title','Home')
@section('content')

<nav class="category-bar">
      <ul class="category-list">
        <li class="category-item"><a href="#electronics">Quan ao</a></li>
        <li class="category-item"><a href="#apparel">Tui xach</a></li>
        <li class="category-item"><a href="#home-goods">My Pham</a></li>
        <li class="category-item"><a href="#books">Giay dep</a></li>
        <li class="category-item"><a href="#sports">Phu kien</a></li>
      </ul>
    </nav>

    <div class="slider-container">
      <div class="slide active">
        <img src="https://via.placeholder.com/600x400/0000FF/808080?Text=Slide1" alt="Slide 1">
    </div>
    <div class="slide">
        <img src="https://via.placeholder.com/600x400/FF0000/FFFFFF?Text=Slide2" alt="Slide 2">
    </div>
    <div class="slide">
        <img src="https://via.placeholder.com/600x400/00FF00/000000?Text=Slide3" alt="Slide 3">
    </div>
    <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
    <a class="next" onclick="moveSlide(1)">&#10095;</a>
    </div>

    <script src="script.js"></script>
    <div class="new-products">
      <h2>San pham moi</h2>
      <div id="product-container" class="d-flex flex-wrap">
        <!-- Card 1 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
      </div>
    </div>

    <div class="sale-products">
      <h2>San pham giam gia</h2>
      <div id="product-container" class="d-flex flex-wrap">
        <!-- Card 1 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
      </div>
    </div>

    <div class="new-posts">
      <h2>Bai dang moi</h2>
      <div id="product-container" class="d-flex flex-wrap">
        <!-- Card 1 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="card">
          <img
            src="https://via.placeholder.com/150"
            class="card-img-top"
            alt="Product Image"
          />
          <div class="card-body">
            <h5 class="card-title">Ten san pham</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#" class="btn btn-success">Xem them</a>
          </div>
        </div>
      </div>
    </div>
    @endsection
