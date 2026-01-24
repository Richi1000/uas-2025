@php
$contact = [
    'phone' => '0812-3456-7890',
    'email' => 'admin@absensiqr.test',
    'address_1' => 'Jl. Contoh No. 123',
    'address_2' => 'Jakarta, Indonesia',
    'schedule_1' => '24 Jam / 7 Hari',
    'schedule_2' => 'Jam Kantor: 10.00 - 17.30',
];
@endphp

<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">

            <!-- Contact Info -->
            <div class="col-xl-4">
                <div class="contact-item-wrapper">

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="lni lni-phone"></i>
                        </div>
                        <div class="contact-content">
                            <h4>Kontak</h4>
                            <p>{{ $contact['phone'] }}</p>
                            <p>{{ $contact['email'] }}</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="lni lni-map-marker"></i>
                        </div>
                        <div class="contact-content">
                            <h4>Alamat</h4>
                            <p>{{ $contact['address_1'] }}</p>
                            <p>{{ $contact['address_2'] }}</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="lni lni-alarm-clock"></i>
                        </div>
                        <div class="contact-content">
                            <h4>Jam Operasional</h4>
                            <p>{{ $contact['schedule_1'] }}</p>
                            <p>{{ $contact['schedule_2'] }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-xl-8">
                <div class="contact-form-wrapper">

                    <div class="section-title text-center">
                        <span>Get in Touch</span>
                        <h2>Siap Memulai?</h2>
                        <p>
                            Hubungi kami untuk mendapatkan informasi lebih lanjut
                            mengenai sistem absensi digital berbasis QR Code.
                        </p>
                    </div>

                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Nama" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="No. Telepon">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Subjek">
                            </div>
                            <div class="col-12">
                                <textarea rows="5" placeholder="Pesan"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn primary-btn rounded-full">
                                    Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
