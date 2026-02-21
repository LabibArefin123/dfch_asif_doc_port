@extends('frontend.layouts.app')

@section('title', 'Photo Gallery')

<link rel="stylesheet" href="{{ asset('css/frontend/gallery/custom_gallery.css') }}">
@section('content')
    @include('frontend.welcome_page.header')
    <!-- Page Header -->
    <section class="page-header" style="background: #f7f7f7; padding: 40px 0;">
        <div class="container">
            <h1 class="text-center" style="font-weight: 700;">Photo Gallery</h1>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section py-5">
        <div class="container">
            <p class="text-center mb-5" style="font-size: 16px; color: #555;">
                এলাকাবাসীর সেবার মনোভাব নিয়ে মান সম্পন্ন শিক্ষা প্রসারে এবং কৃতিত্বপূর্ণ ফল অর্জন করে এই প্রতিষ্ঠানটি
                ইতিমধ্যে একটি স্থান করে নিয়েছে।
            </p>

            <div class="gallery-container">
                <!-- Big Preview with Navigation Buttons -->
                <div class="preview-box">
                    <button class="nav-btn left-btn">&#10094;</button>
                    <img id="preview-image"
                        src="{{ isset($galleries[0]) ? asset('uploads/images/gallery/' . $galleries[0]->image) : '' }}"
                        alt="Preview">
                    <h3 id="preview-title">{{ $galleries[0]->title ?? '' }}</h3>
                    <button class="nav-btn right-btn">&#10095;</button>
                </div>

                <!-- Thumbnails -->
                <div class="thumbnail-row">
                    @forelse ($galleries as $gallery)
                        <div class="thumbnail">
                            <img src="{{ asset('uploads/images/gallery/' . $gallery->image) }}"
                                alt="{{ $gallery->title ?? '' }}">
                        </div>
                    @empty
                        <p>No images found.</p>
                    @endforelse
                </div>
            </div>
            <script>
                const thumbnails = document.querySelectorAll('.thumbnail img');
                const previewImage = document.getElementById('preview-image');
                const previewTitle = document.getElementById('preview-title');
                const thumbnailBoxes = document.querySelectorAll('.thumbnail');

                let currentIndex = 0;
                const totalImages = thumbnails.length;

                // Initialize first active thumbnail
                thumbnailBoxes[currentIndex].classList.add('active');

                // Function to show image by index
                function showImage(index) {
                    // Remove old active
                    thumbnailBoxes.forEach(box => box.classList.remove('active'));

                    // Animate fade out
                    previewImage.style.opacity = 0;
                    previewTitle.style.opacity = 0;

                    setTimeout(() => {
                        previewImage.src = thumbnails[index].src;
                        previewTitle.textContent = thumbnails[index].alt;

                        // Animate fade in
                        previewImage.style.opacity = 1;
                        previewTitle.style.opacity = 1;

                        // Set new active thumbnail
                        thumbnailBoxes[index].classList.add('active');
                        currentIndex = index;
                    }, 300);
                }

                // Thumbnail click
                thumbnails.forEach((thumbnail, index) => {
                    thumbnail.addEventListener('click', () => {
                        showImage(index);
                    });
                });

                // Navigation buttons
                document.querySelector('.left-btn').addEventListener('click', () => {
                    let index = (currentIndex - 1 + totalImages) % totalImages;
                    showImage(index);
                });

                document.querySelector('.right-btn').addEventListener('click', () => {
                    let index = (currentIndex + 1) % totalImages;
                    showImage(index);
                });

                // Autoplay slider every 3 seconds
                setInterval(() => {
                    let index = (currentIndex + 1) % totalImages;
                    showImage(index);
                }, 8000);
            </script>

        </div>
            @include('frontend.welcome_page.footer')
    </section>

    <style>
        .gallery-item img {
            transition: transform 0.3s;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .col-lg-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (max-width: 576px) {

            .col-lg-4,
            .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
@endsection
