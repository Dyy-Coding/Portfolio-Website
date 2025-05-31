<style>
  #education {
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

  .hover-zoom {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .hover-zoom:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  }
</style>

<!-- ------------------ EDUCATION PAGE WITH IMAGE ------------------ -->
<section class="min-h-screen py-16 px-6 md:px-16 bg-gray-50 text-gray-800">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12" id="education">

    <!-- Left: Image Section -->
    <div class="md:w-1/2 flex justify-center fade-on-scroll">
      <div class="w-full max-w-sm rounded-2xl overflow-hidden shadow-lg hover-zoom">
        <img src="assets/image/photo_2024-11-04_21-06-59 (1) (1).png" alt="Education Photo" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- Right: Education Content -->
    <div class="md:w-1/2 space-y-8 fade-on-scroll">
      <!-- Header -->
      <div class="text-left">
        <h1 class="text-4xl font-bold text-gray-900">My Education</h1>
        <p class="mt-2 text-gray-600 text-base">Here's a quick look at my academic journey and certifications.</p>
      </div>

      <!-- Education Timeline -->
      <div class="space-y-6">
        <div>
          <h2 class="text-xl font-semibold text-blue-600">🎓 Passerelles Numériques Cambodia (PNC)</h2>
          <p class="text-gray-700">Associate Degree in PNC as Web Developer</p>
          <p class="text-sm text-gray-500">2024 – 2025 (Expected)</p>
        </div>
        <div>
          <h2 class="text-xl font-semibold text-blue-600">🏫 NGS Peam Chikong High School</h2>
          <p class="text-gray-700">High School Diploma – Kompong Cham Province</p>
          <p class="text-sm text-gray-500">Graduated: 2023</p>
        </div>
      </div>

      <!-- Certifications -->
      <div>
        <h3 class="text-lg font-semibold text-gray-800">📜 Certifications</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-1">
          <li>High School Certificate</li>
          <li>Certificate Awarded: Leadership and Personal Development</li>
          <li>Associate Degree at PNC (Soon)</li> 
        </ul>
      </div>

      <!-- Download CV -->
      <div>
        <a href="download" class="inline-block px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
          Download CV <i class="uil uil-file-alt ml-1"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
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
  });
</script>
