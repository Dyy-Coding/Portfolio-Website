<style>
  #contact, #contact .grid {
    margin-top: 100px;
  }

  .fade-on-scroll {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 1.5s ease, transform 1.5s ease;
  }

  .fade-in {
    opacity: 1 !important;
    transform: translateY(0) !important;
  }

  .map-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .map-hover:hover {
    transform: scale(1.02);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  }

    /* Floating label style (optional if you want to keep placeholders only) */
  .input-field {
    background: transparent;
    border: 2px solid rgba(59, 130, 246, 0.5); /* blue-500 with 50% opacity */
    color: #1e3a8a; /* blue-900 */
    font-weight: 600;
    padding: 1rem 1rem 0.5rem 1rem;
    border-radius: 1rem;
    transition: border-color 0.3s ease, background 0.3s ease;
  }
  .input-field::placeholder {
    color: rgba(59, 130, 246, 0.6); /* lighter blue */
    font-weight: 400;
  }
  .input-field:focus {
    outline: none;
    border-color: #3b82f6; /* blue-500 */
    background: rgba(59, 130, 246, 0.1);
  }

  textarea.input-field {
    min-height: 130px;
    resize: vertical;
  }

  /* Send button */
  .btn-send {
    background: linear-gradient(90deg, #3b82f6, #2563eb);
    color: white;
    font-weight: 700;
    padding: 1rem 2.5rem;
    border-radius: 2rem;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
  }
  .btn-send:hover {
    background: linear-gradient(90deg, #2563eb, #1d4ed8);
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(37, 99, 235, 0.6);
  }
</style>

<!-- -------------- CONTACT BOX ---------------- -->
<section class="section py-16 px-6 md:px-16 bg-gray-50 text-gray-800">
  <div class="text-center mb-12 fade-on-scroll" id="contact">
    <h1 class="text-3xl font-bold">Get in Touch</h1>
    <p class="text-gray-600">Do you have a project in your mind? Contact me here.</p>
  </div>
  
  <!-- Map Section -->
  <div class="mt-12 max-w-5xl mx-auto fade-on-scroll">
    <iframe 
      src="https://www.google.com/maps?q=Passerelles+numériques+Cambodia&output=embed" 
      width="100%" 
      height="400" 
      style="border:0;" 
      allowfullscreen 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade"
      class="rounded shadow map-hover">
    </iframe>
  </div>

  <!-- Contact Info & Form -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto mt-12 fade-on-scroll">
    <!-- Contact Info -->
    <div>
      <div class="space-y-4 text-sm md:text-base">
        <h2 class="text-xl font-semibold">Find Me <i class="uil uil-corner-right-down"></i></h2>
        <p><i class="uil uil-envelope"></i> Email: 
          <a href="mailto:chandy.neat@student.passerellesnumeriques.org">chandy.neat@student.passerellesnumeriques.org</a>
        </p>
        <p><i class="uil uil-phone"></i> Tel: 093 967 654</p>
        <p><i class="uil uil-map-marker"></i> Address: BP511 St. 371 Phum Tropeang Chhuk (Borey Sorla),<br>
          Sangkat Tek Thla, Khan Sen Sok, Phnom Penh, Cambodia
        </p>
      </div>
    </div>

    <!-- Contact Form -->
    <div>
  <form action="/insertSubmission" method="POST" class="space-y-6 max-w-lg mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      <input 
        type="text" 
        name="name" 
        class="input-field w-full" 
        placeholder="Name" 
        required 
        autocomplete="name"
      >
      <input 
        type="email" 
        name="email" 
        class="input-field w-full" 
        placeholder="Email" 
        required 
        autocomplete="email"
      >
    </div>
    <textarea 
      name="message" 
      rows="5" 
      class="input-field w-full" 
      placeholder="Message" 
      required
    ></textarea>
    <button type="submit" class="btn-send">
      Send <i class="uil uil-message"></i>
    </button>
  </form>
</div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Your existing fade-in observer code...
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('fade-in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-on-scroll').forEach(el => {
      observer.observe(el);
    });

    // Check for success query param in URL
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === '1') {
      Swal.fire({
        icon: 'success',
        title: 'Message Sent!',
        text: 'Thank you for contacting us. We will get back to you shortly.',
        timer: 3000,
        timerProgressBar: true,
        showConfirmButton: false
      }).then(() => {
        // Clean URL to remove success param without reload
        window.history.replaceState({}, document.title, window.location.pathname);
      });
    }
  });
</script>
