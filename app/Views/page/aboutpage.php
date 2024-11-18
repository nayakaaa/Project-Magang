<?= $this->extend('atribut/template');?>

<?= $this->section('content');?>

<style>
    .hero-section {
  background-image: url("<?= base_url('Image/background.jpg') ?>");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  color: white;
  position: relative;
  z-index: 1;
}

.hero-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5); /* Overlay hitam transparan */
  z-index: -1;
}

.hero-content {
  position: relative;
  z-index: 2;
}
</style>

    <section class="hero-section text-center py-5">
        <div class="container hero-content">
            <h1>About My Website</h1>
            <p class="lead">This is a simple home page using Bootstrap 5 for a modern look.</p>
        </div>
    </section>


    <!-- Content Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                </div>
                <div class="col-md-4">
                    <h2>Our Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
                <div class="col-md-4">
                    <h2>Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                </div>
                <div class="col-md-4">
                    <h2>Our Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
                <div class="col-md-4">
                    <h2>Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor.</p>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection('');?>