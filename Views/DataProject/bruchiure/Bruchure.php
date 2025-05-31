
<style>
    #bruchure {
        margin-top: 100px;
    }
</style>

<!-- Brochure Section -->
<section class="min-h-screen py-16 px-6 md:px-16 bg-gray-50 text-gray-800">
  <div class="max-w-6xl mx-auto space-y-10" id="bruchure">

    <!-- Title -->
    <div class="text-center">
      <h1 class="text-4xl font-bold text-gray-900">Brochure Design Project</h1>
      <p class="text-gray-600 mt-2">UX Researcher & Tool Specialist / Code Quality Reviewer</p>
    </div>

    <!-- Image Preview -->
    <div class="w-full flex justify-center">
      <img id="previewImage" src="assets/image/BruchureImage/A4 - 7.jpg" alt="Preview"
        class="rounded-xl shadow-lg max-h-[500px] transition duration-300">
    </div>

    <!-- Scrollable Thumbnails Row -->
    <div class="overflow-x-auto whitespace-nowrap mt-6 pb-2 scroll-smooth">
      <div class="inline-flex space-x-4">
        <!-- Thumbnails -->
        <img src="assets/image/BruchureImage/A4 - 7.jpg" alt="Brochure 1"
          onclick="setPreview(this.src)"
          class="h-28 rounded-lg shadow cursor-pointer hover:scale-105 transition">
        <img src="assets/image/BruchureImage/A4 - 8.jpg" alt="Brochure 2"
          onclick="setPreview(this.src)"
          class="h-28 rounded-lg shadow cursor-pointer hover:scale-105 transition">
        <img src="assets/image/BruchureImage/A4 - 9.jpg" alt="Brochure 3"
          onclick="setPreview(this.src)"
          class="h-28 rounded-lg shadow cursor-pointer hover:scale-105 transition">
        <img src="assets/image/BruchureImage/A4 - 10.jpg" alt="Brochure 4"
          onclick="setPreview(this.src)"
          class="h-28 rounded-lg shadow cursor-pointer hover:scale-105 transition">
        <img src="assets/image/BruchureImage/Frame 7.jpg" alt="Brochure 5"
          onclick="setPreview(this.src)"
          class="h-28 rounded-lg shadow cursor-pointer hover:scale-105 transition">
      </div>
    </div>

    <!-- Project Overview -->
    <div class="bg-white rounded-xl p-6 shadow-md space-y-6">
      <div>
        <div>
          <h2 class="text-2xl font-semibold mb-4">Project Overview</h2>
          <p class="text-gray-700 text-base">
            In Preview I, I led the research and brainstorming process with my team members, focusing on understanding the target audience and message. I contributed to the visual identity by designing the logo and structuring the brochure layout using Figma. This phase included consistent feedback sessions to ensure clarity, creativity, and alignment with the project goals.
          </p>
        </div>
      </div>

      <!-- Details -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-700">
        <div><span class="font-semibold">🧑‍💼 Role:</span> UX Researcher & Tool Specialist</div>
        <div><span class="font-semibold">👥 Team Size:</span> 5 Members</div>
        <div><span class="font-semibold">🛠️ Technologies Used:</span> Figma</div>
        <div><span class="font-semibold">📱 Project Type:</span> Brochure Design</div>
        <div><span class="font-semibold">🕒 Duration:</span> 12 hours</div>
        <div><span class="font-semibold">📅 Date:</span> June 18, 2024 – August 6, 2024</div>
      </div>

    
    </div>
    <!-- Project Resources Section -->
<section class="py-12 px-6 md:px-16 bg-white text-gray-800">
  <div class="max-w-6xl mx-auto space-y-10">

    <!-- Header -->
    <div class="text-center space-y-2">
      <h2 class="text-3xl font-bold text-indigo-700 tracking-tight">📂 Project Resources</h2>
      <p class="text-gray-600 text-base">Download key configuration files, report, and setup guide.</p>
    </div>

    <!-- Resource Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <!-- Report -->
      <div class="bg-gray-50 rounded-xl shadow p-5 hover:shadow-lg transition">
        <h3 class="text-lg font-semibold mb-2 text-gray-900">📄 Deployment Report</h3>
        <p class="text-sm text-gray-600 mb-4">Step-by-step setup instructions, configuration details, and troubleshooting tips.</p>
        <a href="Views/DataProject/bruchiure/doces/Bruchure Project Report.pdf" download 
           class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded transition">
          ⬇️ Download PDF
        </a>
      </div>

      <div class="bg-gray-50 rounded-xl shadow p-5 hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">🖥️ Presentation Slides</h3>
                <p class="text-sm text-gray-600 mb-4">Used during project demo showcasing key features and process.</p>
                <a href="Views/DataProject/bruchiure/slide/BruchureProject.pdf" download class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded transition">
                  ⬇️ Download Slides
                </a>
              </div>

  

    </div>
  </div>
</section>
<!-- Back Button -->
         <div class="text-center pt-6">
          <a href="/Project" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded-full shadow-sm transition">
            ← Go Back to Projects
          </a>
        </div>

<!-- Script for preview image change -->
<script>
  function setPreview(src) {
    document.getElementById('previewImage').src = src;
  }
</script>
