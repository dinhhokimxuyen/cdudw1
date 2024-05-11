@extends('layouts.site')
@section('title','Home')
@section('content')

    <section class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <img
            src="https://via.placeholder.com/300x200"
            alt="Product Image"
            class="img-fluid"
          />
        </div>
        <div class="col-md-6">
          <h1>Ten san pham</h1>
          <p class="price">$29.99</p>
          <p>
            Description of the product here. It's a detailed description that
            talks about the features of the product and why it's worth buying.
          </p>
          <button class="btn btn-success">Them vao gio hang</button>
        </div>
      </div>
    </section>

    <section class="container mt-4">
      <h2>Chi tiet</h2>
      <p>
        More detailed information about the product, such as specifications,
        materials used, sizes available, etc. Lorem ipsum dolor sit amet
        consectetur adipisicing elit. Dolorum accusamus explicabo neque magnam
        cumque reiciendis. Fugiat magni sapiente distinctio explicabo, totam
        culpa inventore aliquam delectus modi aperiam doloribus nobis quo!
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita alias
        enim ratione nostrum aliquam dolorem nobis quibusdam adipisci iste!
        Harum ipsa, et porro doloremque qui autem corporis saepe perferendis
        incidunt? Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Consequatur nisi perferendis repellendus beatae, incidunt a debitis
        temporibus quam laboriosam in corrupti praesentium saepe laborum eos
        autem aspernatur? Architecto, iusto inventore. Lorem ipsum dolor sit
        amet consectetur adipisicing elit. Eveniet tempore eaque vero
        consequuntur iusto nemo asperiores nobis ducimus ipsa illum vitae,
        impedit harum? Vel, amet. Itaque, nihil! Asperiores, voluptatem officia.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit sed
        magni libero dignissimos nam ratione assumenda esse quia nisi iure
        magnam repudiandae ullam enim ut temporibus excepturi, quas quibusdam
        alias.
      </p>
    </section>

    <section class="container mt-4">
      <h2>San pham cung loai</h2>
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
    </section>

@endsection