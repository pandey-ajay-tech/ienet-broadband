@extends('layouts.master')
@section('title')
    Teams
@endsection

{{-- Breadcrump --}}
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        .social a {
            display: inline-block;
            font-size: 18px;
            margin-right: 10px;
            color: #444;
            transition: 0.3s;
        }

        .social a:hover {
            color: #d8232a;
        }
    </style>
    <section class="py-5" style="background:#ffffff;">
        <div class="container">
            <h3 class="fw-bold text-center mb-4" style="color:#111;">MANAGEMENT TEAM</h3>
            <p class="text-center mb-5" style="color:#444; max-width:800px; margin:auto;">
                The management team section provides an overview of your internet service business’s management team.
                This section highlights their experience, qualifications, and key responsibilities within the organization.
            </p>

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="p-4 h-100 rounded border shadow-sm text-center">
                        <h5 class="fw-semibold mt-2">Kundan Kumar</h5>
                        <p class="text-muted mb-2">Sales Department</p>
                        <p style="color:#444;">
                            The sales team is responsible for building and maintaining customer relationships.
                            They resolve complaints, record complex issues and forward them to the proper authorities.
                        </p>


                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="p-4 h-100 rounded border shadow-sm text-center">
                        <h5 class="fw-semibold mt-2">Suresh Kole</h5>
                        <p class="text-muted mb-2">Support</p>
                        <p style="color:#444;">
                            The support team addresses technical issues, resolves customer queries, and ensures customer
                            satisfaction.
                            Their goal is to enable customers to effectively use the service.
                        </p>

                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="p-4 h-100 rounded border shadow-sm text-center">
                        <h5 class="fw-semibold mt-2">Chandan Yadav</h5>
                        <p class="text-muted mb-2">Accounts Department</p>
                        <p style="color:#444;">
                            The accounting department manages bills, payroll, financial reporting,
                            vendor payments, and other financial activities critical to the organization.
                        </p>
                        {{-- <div class="mt-3">
                        <a href="#" class="text-dark me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-dark me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-dark me-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
                    </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
