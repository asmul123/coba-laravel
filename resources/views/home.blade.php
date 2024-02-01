@extends('layouts.main')
@section('container')
<!--  Row 1 -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">Jumlah Buku</h5>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="fw-semibold mb-3">1.500</h4>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="fs-3 mb-0">buku</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex justify-content-center">
                                    <div id="breakup"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">Jumlah Member</h5>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="fw-semibold mb-3">500</h4>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="fs-3 mb-0">member</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex justify-content-center">
                                    <div id="breakup2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection