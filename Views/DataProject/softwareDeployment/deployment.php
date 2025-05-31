<style>
  #softwareDeployment {
    margin-top: 100px;
  }
  .video-preview {
    max-width: 100%;
    border-radius: 1rem;
    box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
  }
  .video-preview:hover {
    transform: scale(1.03);
  }
</style>

<!-- Software Deployment Project Section -->
<section class="min-h-screen py-16 px-6 md:px-16 bg-gray-50 text-gray-800">
  <div class="max-w-6xl mx-auto space-y-10" id="softwareDeployment">

    <!-- Title -->
    <div class="text-center">
      <h1 class="text-4xl font-bold text-gray-900">Software Deployment Project</h1>
      <p class="text-gray-600 mt-2">Role: DevOps & Junior WordPress</p>
    </div>

    <!-- Optional Video Preview -->
    <div class="flex justify-center">
      <video 
        class="video-preview"
        src="assets/image/SoftwareDeployment/20-43-23.mp4" 
        controls 
        preload="metadata" 
        poster="assets/image/Software-Deployment.jpeg">
        Your browser does not support the video tag.
      </video>
    </div>

    <!-- Project Overview -->
    <div class="bg-white rounded-xl p-6 shadow-md space-y-6">
      <div>
        <h2 class="text-2xl font-semibold mb-4">Project Overview</h2>
        <p class="text-gray-700 text-base">
          I deployed and hosted a WordPress website on an AWS cloud server running Ubuntu. I configured the environment using MobaXterm for remote access, installed necessary packages (Apache, PHP, MySQL), and ensured the website was accessible online. This solo project allowed me to gain hands-on experience with cloud deployment, server setup, and web hosting.
        </p>
      </div>

      <!-- Libraries and Tools -->
      <div>
        <h2 class="text-xl font-semibold mt-6 mb-2">📚 Tools & Platforms Used</h2>
        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
          <li><strong>AWS:</strong> Cloud server hosting (EC2 instance).</li>
          <li><strong>Linux Ubuntu:</strong> Operating system for the server.</li>
          <li><strong>MobaXterm:</strong> SSH access and remote terminal.</li>
          <li><strong>WordPress:</strong> Content management system.</li>
          <li><strong>Apache, PHP, MySQL:</strong> Server stack configuration.</li>
        </ul>
      </div>

      <!-- Summary -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-700 mt-4">
        <div><span class="font-semibold">💻 Role:</span> DevOps & Junior WordPress</div>
        <div><span class="font-semibold">👥 Team Size:</span> Solo Project</div>
        <div><span class="font-semibold">🛠️ Technologies:</span> AWS, Ubuntu, MobaXterm, WordPress</div>
        <div><span class="font-semibold">📱 Type:</span> Cloud-Based WordPress Deployment</div>
        <div><span class="font-semibold">🕒 Duration:</span> 6 hours</div>
        <div><span class="font-semibold">📅 Date:</span> Dec 23 – Dec 30, 2024</div>
      </div>
    </div>
  </div>
</section>

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
        <a href="Views/DataProject/softwareDeployment/doces/WordPress_Deployment_Report.pdf" download 
           class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded transition">
          ⬇️ Download PDF
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
