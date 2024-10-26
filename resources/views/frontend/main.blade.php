

@extends('frontend.home')



@section('footer')

<footer class="footer">
    <div class="container">
        <div class="row align-items-center">

            <!---------- CONTACT DETAILS ---------->
            <div class="col-md-8">
                <div class="flex-wrap contact-details d-flex align-items-center">
                    <span class="me-3" style="color: #004a9f; font-weight:bold">Contact Us:</span>
                    <div class="d-flex align-items-center me-3">
                        <i class="fas fa-map-marker-alt me-1" aria-label="Address icon"></i>
                        <span>Lahug, Cebu City, Cebu, Visayas 6000</span>
                    </div>
                    <div class="d-flex align-items-center me-3">
                        <i class="fas fa-phone me-1" aria-label="Phone icon"></i>
                        <span>(888) 422-7974</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-fax me-1" aria-label="Fax icon"></i>
                        <span>Fax: (888) 511-8586</span>
                    </div>
                </div>
            </div>

            <!---------- PRIVACY POLICY LINK ---------->
            <div class="mt-3 col-md-4 text-md-end mt-md-0">
                <a href="privacy_policy.html" target="_blank" class="nav-link">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>

@endsection
