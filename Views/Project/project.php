<style>
  #portfolio {
    margin-top: 60px;
  }

  .hidden-on-load {
    opacity: 0;
    transform: translateY(20px);
    transition: all 1.2s ease-out;
  }

  .show-on-scroll {
    opacity: 1 !important;
    transform: translateY(0) !important;
  }

  .project-card {
    background: linear-gradient(145deg, #ffffff, #f3f4f6);
    border-radius: 1rem;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    transition: all 0.4s ease;
    cursor: pointer;
  }

  .project-card:hover {
    transform: scale(1.03);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
  }

  .project-card img {
    transition: transform 0.3s ease;
  }

  .project-card:hover img {
    transform: scale(1.05);
  }

  .tag {
    font-size: 0.75rem;
    padding: 0.25rem 0.5rem;
    background: #e0f2fe;
    color: #0369a1;
    border-radius: 9999px;
    display: inline-block;
    margin-bottom: 0.5rem;
  }

  .genz-header {
    font-size: 2.25rem;
    font-weight: 800;
    background: linear-gradient(to right, #1e40af, #06b6d4);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
  }
</style>

<section class="py-16 px-6 md:px-16">
  <div class="max-w-7xl mx-auto space-y-12" id="portfolio">
    <div class="text-center">
      <h2 class="genz-header">🔥 My School Projects</h2>
      <p class="text-gray-500 mt-2">Crafted with ❤️ by a passionate student</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- Inventory Management -->
      <div class="project-card hidden-on-load p-5">
        <span class="tag">📦 System</span>
        <h3 class="text-xl font-bold mb-2">Inventory Management</h3>
        <img src="assets/image/Inventory Management system.jpg" alt="Inventory" class="rounded-lg mb-4">
        <p class="text-gray-700 text-sm">Team-based PHP MVC + MySQL system. Sprint-based progress with GitHub & Jira flow 🧩</p>
        <p class="text-gray-400 text-xs mt-2">📅 Mar 10 – Apr 2, 2025</p>
        <a href="/VirtualCompany1" class="inline-block mt-4 px-4 py-2 text-xs bg-indigo-600 text-white rounded hover:bg-indigo-700">👀 See More</a>
      </div>

      <!-- Weather App -->
      <div class="project-card hidden-on-load p-5">
        <span class="tag">🌦️ JS + API</span>
        <h3 class="text-xl font-bold mb-2">Weather App</h3>
        <img src="assets/image/wheather app.png" alt="Weather App" class="rounded-lg mb-4">
        <p class="text-gray-700 text-sm">Fetches live data via weather API. Local storage + SASS styled 🌐</p>
        <p class="text-gray-400 text-xs mt-2">📅 Jan 14 – Jan 29, 2025</p>
        <a href="/wetherApp" class="inline-block mt-4 px-4 py-2 text-xs bg-indigo-600 text-white rounded hover:bg-indigo-700">👀 See More</a>
      </div>

      <!-- WordPress Deployment -->
      <div class="project-card hidden-on-load p-5">
        <span class="tag">☁️ DevOps</span>
        <h3 class="text-xl font-bold mb-2">WordPress Deployment</h3>
        <img src="assets/image/Software-Deployment.jpeg" alt="WordPress" class="rounded-lg mb-4">
        <p class="text-gray-700 text-sm">Cloud-deployed WordPress on AWS Ubuntu. Setup LAMP stack and DNS 🛠️</p>
        <p class="text-gray-400 text-xs mt-2">📅 Dec 23 – Dec 30, 2024</p>
        <a href="/Deployment" class="inline-block mt-4 px-4 py-2 text-xs bg-indigo-600 text-white rounded hover:bg-indigo-700">👀 See More</a>
      </div>

      <!-- Object Tracking -->
      <div class="project-card hidden-on-load p-5">
        <span class="tag">🎯 Scan object</span>
        <h3 class="text-xl font-bold mb-2">Object Tracking</h3>
        <img src="assets/image/scanning object.jpg" alt="Object Tracking" class="rounded-lg mb-4">
        <p class="text-gray-700 text-sm">Used YOLOv8 for tracking objects via webcam. ID labeling and real-time metrics 📸</p>
        <p class="text-gray-400 text-xs mt-2">📅 Dec 16 – Dec 22, 2024</p>
        <a href="/Scanning" class="inline-block mt-4 px-4 py-2 text-xs bg-indigo-600 text-white rounded hover:bg-indigo-700">👀 See More</a>
      </div>

      <!-- Face Detection -->
      <div class="project-card hidden-on-load p-5">
        <span class="tag">👁️ AI</span>
        <h3 class="text-xl font-bold mb-2">Face Recognition</h3>
        <img src="assets/image/Face detection.jpg" alt="Face Detection" class="rounded-lg mb-4">
        <p class="text-gray-700 text-sm">
          Developed a face recognition-based attendance system with a user-friendly GUI using Python libraries like OpenCV and Tkinter. The system detects faces via webcam, logs attendance automatically in Excel, and provides voice feedback. 
          Responsible for back-end logic, facial recognition integration, and data handling.
        </p>
        <p class="text-gray-400 text-xs mt-2">📅 Nov 18 – Nov 28, 2024</p>
        <a href="/faceRecognition" class="inline-block mt-4 px-4 py-2 text-xs bg-indigo-600 text-white rounded hover:bg-indigo-700">👀 See More</a>
      </div>

      <!-- Music Website Project -->
      <div class="project-card hidden-on-load p-5">
        <span class="tag">🎵 Music Website</span>
        <h3 class="text-xl font-bold mb-2">Music Website Project</h3>
        <img src="assets/image/music band image.png" alt="Music Website" class="rounded-lg mb-4">
        <p class="text-gray-700 text-sm mb-2">
          Maintained clean, readable code by enforcing HTML, CSS, and SASS standards; resolved bugs through GitHub collaboration; and ensured cross-browser responsiveness and code efficiency through constructive feedback.
        </p>
        <p class="text-gray-400 text-xs mt-2">📅 Oct 21 – Nov 5, 2024</p>
        <a href="/webDesign" class="inline-block mt-4 px-4 py-2 text-xs bg-indigo-600 text-white rounded hover:bg-indigo-700">👀 See More</a>
      </div>

      <!-- Brochure Design -->
      <div class="project-card hidden-on-load p-5">
        <span class="tag">🖌️ Design</span>
        <h3 class="text-xl font-bold mb-2">Brochure Design</h3>
        <img src="assets/image/A4 - 5.jpg" alt="Brochure" class="rounded-lg mb-4">
        <p class="text-gray-700 text-sm">
          I led a small team in using Figma for collaborative design and conducted UX/UI research through browser-based analysis, ensuring efficiency and user-centered innovation.
        </p>
        <p class="text-gray-400 text-xs mt-2">📅 Jun 18 – August 6, 2024</p>
        <a href="/bruchure" class="inline-block mt-4 px-4 py-2 text-xs bg-indigo-600 text-white rounded hover:bg-indigo-700">👀 See More</a>
      </div>

    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show-on-scroll');
          entry.target.classList.remove('hidden-on-load');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.hidden-on-load').forEach(el => observer.observe(el));
  });
</script>
