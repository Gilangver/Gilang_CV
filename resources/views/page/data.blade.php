@extends('componen.index')

@section('home')
<div class="container my-5">
    <div id="feedbackSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            @foreach ($feedbacks as $key => $feedback)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="row align-items-center" style="background-color: #f8f9fa; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="col-md-4">
                            <img src="https://picsum.photos/500/500?random={{ $key }}" class="d-block w-100 rounded-circle shadow-lg" alt="feedback image" >
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-center">{{ $feedback->name }}</h4>
                            <p class="text-center">{{ $feedback->message }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#feedbackSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#feedbackSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
