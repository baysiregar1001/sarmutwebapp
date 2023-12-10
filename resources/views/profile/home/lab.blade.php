@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')



<body>

    <div class="carousel-container">
        <div class="carousel" id="myCarousel">
            <?php
            // Array dengan daftar dokter dan jadwal
            $doctors = [
                ['name' => 'Dr. John Doe', 'schedule' => 'Monday, 10:00 AM - 2:00 PM', 'image' => 'img\gambar\sarmut-gambar.PNG'],
                ['name' => 'Dr. Jane Smith', 'schedule' => 'Tuesday, 1:00 PM - 5:00 PM', 'image' => 'img\gambar\sarmut-gambar.PNG'],
                ['name' => 'Dr. Bob Johnson', 'schedule' => 'Wednesday, 9:00 AM - 1:00 PM', 'image' => 'img\gambar\sarmut-gambar.PNG'],
                // Tambahkan lebih banyak dokter jika diperlukan
            ];

            // Tampilkan dokter dalam carousel
            foreach ($doctors as $doctor) {
                echo '<div class="carousel-item">';
                echo '<div class="doctor-container">';
                echo '<img src="' . $doctor['image'] . '" alt="' . $doctor['name'] . '">';
                echo '</div>';
                echo '<h2>' . $doctor['name'] . '</h2>';
                echo '<p>' . $doctor['schedule'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Mengganti tombol teks dengan ikon Font Awesome -->
        <div class="nav-buttons">
            <button class="prev-btn" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></button>
            <button class="next-btn" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></button>
            <button class="prev-slide-btn" onclick="prevSlide()"><i class="fas fa-arrow-left"></i></button>
            <button class="next-slide-btn" onclick="nextSlide()"><i class="fas fa-arrow-right"></i></button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
@endsection