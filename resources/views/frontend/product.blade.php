@extends('layouts.site')
@section('title','Home')
@section('content')
<section class="container mt-4">
      <div class="control-panel d-flex justify-content-between">
        <div>
          <button class="btn btn-success" id="grid-view">Grid View</button>
          <button class="btn btn-secondary" id="list-view">List View</button>
        </div>
        <select class="form-control w-auto" id="sort-products">
          <option value="low-high">Price: Low to High</option>
          <option value="high-low">Price: High to Low</option>
        </select>
      </div>

      <div class="container mt-4">
        <div id="product-container" class="d-flex flex-wrap mb-2">
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div id="product-container" class="d-flex flex-wrap mb-2">
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div id="product-container" class="d-flex flex-wrap mb-2">
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div id="product-container" class="d-flex flex-wrap mb-2">
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
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
              <a href="#" class="btn btn-success">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
     
    <footer>
      <div class="container-fluid bg-danger text-light py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start">
              <p class="mb-md-0">
                &copy; <a href="#">Your Site Name</a>. All Rights Reserved.
              </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <p class="mb-0">
                Designed by <a href="https://htmlcodex.com">HTML Codex</a>
              </p>
            </div>
          </div>
        </div>
      </div>
@endsection
