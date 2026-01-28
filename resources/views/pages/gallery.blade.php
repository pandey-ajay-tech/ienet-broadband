@extends('layouts.master')

@section('title')
    Gallery
@endsection

@section('content')
    <section class="py-5 bg-white">
        <div class="container">

            <h3 class="fw-bold text-center mb-3">Our Work Gallery</h3>
            <p class="text-center mb-4" style="max-width:800px;margin:auto;color:#555;">
                Explore our installation work including RF connections, FTTH installations,
                and CCTV security setups delivered with professionalism and precision.
            </p>

            <!-- Filter Buttons -->
            <div class="text-center mb-4">
                <button class="btn btn-outline-danger mx-1 filter-btn active" data-filter="all">ALL</button>
                <button class="btn btn-outline-danger mx-1 filter-btn" data-filter="rf">RF Installation</button>
                <button class="btn btn-outline-danger mx-1 filter-btn" data-filter="ftth">FTTH Installation</button>
                <button class="btn btn-outline-danger mx-1 filter-btn" data-filter="cctv">CCTV Installation</button>
            </div>

            <!-- Gallery Grid -->
            <div class="row g-4">

                <!-- RF -->
                <div class="col-md-4 gallery-item rf">
                    <div class="border rounded shadow-sm overflow-hidden">
                        <img src="{{ asset('assets/images/gallery/2.png') }}" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-md-4 gallery-item rf">
                    <div class="border rounded shadow-sm overflow-hidden">
                        <img src="{{ asset('assets/images/gallery/3.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4 gallery-item rf">
                    <div class="border rounded shadow-sm overflow-hidden">
                        <img src="{{ asset('assets/images/gallery/7.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- FTTH -->
                <div class="col-md-4 gallery-item ftth">
                    <div class="border rounded shadow-sm overflow-hidden">
                        <img src="{{ asset('assets/images/gallery/8.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4 gallery-item ftth">
                    <div class="border rounded shadow-sm overflow-hidden">
                        <img src="{{ asset('assets/images/gallery/9.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4 gallery-item ftth">
                    <div class="border rounded shadow-sm overflow-hidden">
                        <img src="{{ asset('assets/images/gallery/10.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- CCTV -->
                <div class="col-md-4 gallery-item cctv">
                    <div class="border rounded shadow-sm overflow-hidden">
                        <img src="{{ asset('assets/images/gallery/1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-md-4 gallery-item cctv">
                    <div class="border rounded shadow-sm overflow-hidden">
                        <img src="{{ asset('assets/images/gallery/5.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-md-4 gallery-item cctv">
                    <div class="border rounded shadow-sm overflow-hidden">
                        <img src="{{ asset('assets/images/gallery/4.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Filter Script -->
    <script>
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {

                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                let filter = this.getAttribute('data-filter');

                document.querySelectorAll('.gallery-item').forEach(item => {
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>

    <style>
        .filter-btn.active {
            background: #d8232a;
            color: #fff;
        }
    </style>
@endsection
