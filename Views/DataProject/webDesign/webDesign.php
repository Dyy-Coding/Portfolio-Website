
<style>
  .projectContainers {
    margin-top: 100px;
  }
</style>
<div id="projectContainer"></div>



<script>
  function renderMusicStreamingSection() {
    const container = document.getElementById("projectContainer"); // Target where you want to render

    container.innerHTML = `
    <section class="min-h-screen py-16 px-4 md:px-16 bg-gradient-to-b from-white to-gray-100 text-gray-800 font-sans">
      <div class="max-w-5xl mx-auto space-y-12 projectContainers">

        <div class="text-center space-y-2">
          <h1 class="text-4xl font-extrabold text-blue-700 tracking-tight">🎵 Music Streaming Web App</h1>
          <p class="text-base font-medium text-gray-600">My Role: <span class="text-black">Code Quality Reviewer</span></p>
          <a href="https://music-band-b1.netlify.app/" class="inline-block mt-4 px-4 py-2 text-xs bg-indigo-600 text-white rounded hover:bg-indigo-700">View Website</a>

        </div>

        <div class="flex justify-center">
          <img src="assets/image/music band image.png" alt="Music Website" class="rounded-lg mb-4">
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6 space-y-4">
          <h2 class="text-xl font-semibold text-gray-800">🌟 Project Overview</h2>
          <p class="text-gray-700 leading-relaxed">
            I collaborated with a team of 3 members to build a dynamic music streaming platform. As a Code Quality Reviewer,
            I ensured clean, consistent, and maintainable code through pull request reviews and feedback sessions. I also:
          </p>
          <ul class="list-disc pl-6 text-gray-700">
            <li>Fixed layout bugs and optimized for responsiveness.</li>
            <li>Applied SASS for scalable and organized styling.</li>
            <li>Ensured cross-device compatibility and UI consistency.</li>
          </ul>
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-800 text-sm">
          <div><strong>👥 Team Size:</strong> 3 Members</div>
          <div><strong>🧑‍💼 My Role:</strong> Code Quality Reviewer</div>
          <div><strong>🛠️ Tech Stack:</strong> HTML, CSS, SASS, JavaScript, GitHub</div>
          <div><strong>📱 Project Type:</strong> Web-based Music Streaming Platform</div>
          <div><strong>🕒 Duration:</strong> 31.5 Hours</div>
          <div><strong>📅 Timeline:</strong> Oct 21 – Nov 5, 2024</div>
        </div>

        <!-- Downloadable Resources -->
        <section class="py-12 px-4 md:px-16 bg-white text-gray-800">
          <div class="max-w-5xl mx-auto space-y-8">
            <div class="text-center space-y-2">
              <h2 class="text-3xl font-bold text-blue-700 tracking-tight">📂 Project Resources</h2>
              <p class="text-gray-600 text-base">Download documentation, source code, and other materials from the project.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="bg-gray-50 rounded-xl shadow p-5 hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">📄 Project Report</h3>
                <p class="text-sm text-gray-600 mb-4">Detailed documentation explaining development, challenges, and solutions.</p>
                <a href="Views/DataProject/webDesign/doces/📑 Project Report.pdf" download class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded transition">
                  ⬇️ Download PDF
                </a>
              </div>

              <div class="bg-gray-50 rounded-xl shadow p-5 hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">🗃️ Source Code (ZIP)</h3>
                <p class="text-sm text-gray-600 mb-4">Includes all front-end with setup instructions.</p>
                <a href="Views/DataProject/webDesign/files/Music-band-B1-master.zip" download class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded transition">
                  ⬇️ Download ZIP
                </a>
              </div>

              <div class="bg-gray-50 rounded-xl shadow p-5 hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">🖥️ Presentation Slides</h3>
                <p class="text-sm text-gray-600 mb-4">Used during project demo showcasing key features and process.</p>
                <a href="Views/DataProject/webDesign/slide/Yellow Black Grunge Music Presentation.pdf" download class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded transition">
                  ⬇️ Download Slides
                </a>
              </div>

              <div class="bg-white rounded-xl shadow p-5 hover:shadow-lg transition">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">🖼️ Figma Prototype</h3>
                <div class="rounded-lg shadow-md mb-4 w-full object-cover h-48">
                  <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="100%" height="300" src="https://embed.figma.com/design/FgNBLj5YSQdDQ7dl3mc2yx/Music-Band-Figma?node-id=0-1&embed-host=share" allowfullscreen></iframe>
                </div>
                <a href="https://www.figma.com/design/FgNBLj5YSQdDQ7dl3mc2yx/Music-Band-Figma?node-id=0-1&t=EZr5JGD3590a3efR-1"
                   class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded transition">
                  🔗 View on Figma
                </a>
              </div>

            </div>
          </div>
        </section>

        <div class="text-center pt-6">
          <a href="/Project" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded-full shadow-sm transition">
            ← Go Back to Projects
          </a>
        </div>

      </div>
    </section>
    `;
  }

  // Example call (e.g., after DOM loaded)
  document.addEventListener("DOMContentLoaded", renderMusicStreamingSection);
</script>
