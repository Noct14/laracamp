@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
<<<<<<< HEAD
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
=======
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
<<<<<<< HEAD
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
=======
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    </div>
@endif