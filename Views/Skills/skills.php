<style>
  #skills {
    margin-top: 100px;
  }

  /* Start hidden */
.section1, .section2, .section3, #interests .bg-gray-50 {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 1s ease-out, transform 1s ease-out;
  pointer-events: none; /* optional: prevent interaction when hidden */
}

/* When visible, fade in and move to normal position */
.section1.visible, .section2.visible, .section3.visible, #interests .bg-gray-50.visible {
  opacity: 1;
  transform: translateY(0);
  pointer-events: auto;
}

</style>


<section class="py-16 px-6 md:px-16 text-gray-800">
  <div class="max-w-7xl mx-auto space-y-12" id="skills">
    <!-- Section Header -->
<!-- Animated Background Wrapper -->
<div class="relative text-center revel py-12 overflow-hidden min-h-[200px]">
  <!-- Image Background with Overlay -->
  <div class="absolute inset-0 z-0">
    <img src="assets/image/skills picture.jpg" alt="skills" class="w-full h-full object-cover opacity-40 blur-sm" />
    
    <!-- Gradient shimmer overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-pink-300 via-purple-300 to-blue-300 animate-pulse"></div>
  </div>

  <!-- Text Content -->
  <div class="relative z-10">
    <h2 class="text-3xl font-bold text-gray-900">My Skills</h2>
    <p class="text-gray-500 mt-2">
      A balanced mix of technical expertise and soft skills that help me perform effectively in a team and as an individual.
    </p>
  </div>
</div>




    <!-- Skills Grid -->
    <div class="grid section gap-12 md:grid-cols-2 lg:grid-cols-2">

      <!-- Frontend -->
      <div class="bg-gray-50 section1 p-6 rounded-2xl shadow-md hover:shadow-lg transition duration-300">
        <h3 class="text-2xl font-semibold text-blue-600 mb-4">Frontend</h3>
        <div class="space-y-4">
          <div><div class="flex justify-between text-sm font-medium"><span>HTML & CSS & SASS</span><span>90%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-blue-500 h-2 rounded w-[90%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>JavaScript</span><span>55%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-blue-500 h-2 rounded w-[55%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Vue JS</span><span>55%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-blue-500 h-2 rounded w-[55%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Figma</span><span>50%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-blue-500 h-2 rounded w-[50%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Canva</span><span>65%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-blue-500 h-2 rounded w-[65%]"></div></div></div>
        </div>
      </div>

      <!-- Backend -->
      <div class="bg-gray-50 p-6 section2 rounded-2xl shadow-md hover:shadow-lg transition duration-300">
        <h3 class="text-2xl font-semibold text-green-600 mb-4">Backend</h3>
        <div class="space-y-4">
          <div><div class="flex justify-between text-sm font-medium"><span>OOP (TypeScript)</span><span>80%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-green-500 h-2 rounded w-[80%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Algorithm (Python)</span><span>80%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-green-500 h-2 rounded w-[80%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Node.js (API Concept)</span><span>45%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-green-500 h-2 rounded w-[45%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>PHP (MVC)</span><span>85%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-green-500 h-2 rounded w-[85%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Laravel</span><span>70%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-green-500 h-2 rounded w-[70%]"></div></div></div>
        </div>
      </div>

      <!-- Database & Tools -->
      <div class="bg-gray-50 p-6 section3 rounded-2xl shadow-md hover:shadow-lg transition duration-300">
        <h3 class="text-2xl font-semibold text-purple-600 mb-4">Database & Tools</h3>
        <div class="space-y-4">
          <div><div class="flex justify-between text-sm font-medium"><span>MySQL</span><span>75%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-purple-500 h-2 rounded w-[75%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>WordPress</span><span>55%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-purple-500 h-2 rounded w-[55%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Power BI (Basic)</span><span>40%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-purple-500 h-2 rounded w-[40%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>GitHub</span><span>80%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-purple-500 h-2 rounded w-[80%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Jira (Scrum)</span><span>65%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-purple-500 h-2 rounded w-[65%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>AWS Hosting</span><span>45%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-purple-500 h-2 rounded w-[45%]"></div></div></div>
        </div>
      </div>

      <!-- Soft Skills -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow-md hover:shadow-lg transition duration-300">
        <h3 class="text-2xl font-semibold text-pink-600 mb-4">Soft Skills</h3>
        <div class="space-y-4">
          <div><div class="flex justify-between text-sm font-medium"><span>Communication</span><span>85%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-pink-500 h-2 rounded w-[85%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Problem Solving</span><span>80%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-pink-500 h-2 rounded w-[80%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Teamwork</span><span>90%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-pink-500 h-2 rounded w-[90%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Time & Task Management</span><span>75%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-pink-500 h-2 rounded w-[75%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Leadership</span><span>70%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-pink-500 h-2 rounded w-[70%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Researching</span><span>80%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-pink-500 h-2 rounded w-[80%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Critical Thinking</span><span>75%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-pink-500 h-2 rounded w-[75%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Presentation Skills</span><span>70%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-pink-500 h-2 rounded w-[70%]"></div></div></div>
          <div><div class="flex justify-between text-sm font-medium"><span>Adaptability</span><span>85%</span></div><div class="w-full bg-gray-200 h-2 rounded"><div class="bg-pink-500 h-2 rounded w-[85%]"></div></div></div>
        </div>
      </div>
      <!-- Language Skills -->
<div class="bg-gray-50 p-6 section3 rounded-2xl shadow-md hover:shadow-lg transition duration-300">
  <h3 class="text-2xl font-semibold text-purple-600 mb-4">Language</h3>
  <div class="space-y-4">
    <div>
      <div class="flex justify-between text-sm font-medium"><span>English</span><span>55%</span></div>
      <div class="w-full bg-gray-200 h-2 rounded">
        <div class="bg-purple-500 h-2 rounded w-[55%]"></div>
      </div>
    </div>
    <div>
      <div class="flex justify-between text-sm font-medium"><span>Khmer (Native)</span><span>100%</span></div>
      <div class="w-full bg-gray-200 h-2 rounded">
        <div class="bg-purple-500 h-2 rounded w-[100%]"></div>
      </div>
    </div>
  </div>
</div>


    </div>
  </div>
</section>


<section class="py-16 px-6 md:px-16 text-gray-800" id="interests">
  <div class="max-w-7xl mx-auto space-y-12">
    <!-- Section Header -->
    <div class="text-center">
      <h2 class="text-3xl font-bold text-gray-900">My Interest</h2>
      <p class="text-gray-500 mt-2">Passions and activities that fuel my motivation and growth in the tech world.</p>
    </div>

    <!-- Interests List -->
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      <!-- Interest Items -->
      <div class="bg-gray-50 p-6 rounded-2xl shadow-md transition-transform duration-300 hover:scale-105 hover:-translate-y-2 hover:shadow-xl text-center flex flex-col items-center">
        <img src="assets/image/people-volunteering-donating-money-items_53876-64646-2-1024x744.jpg" alt="Volunteering" class="w-20 h-20 mb-4 object-cover rounded-full shadow-md" />
        <h3 class="text-xl font-semibold text-indigo-600 mb-2">Volunteering</h3>
        <p class="text-gray-600">Giving back to community and supporting causes I care about.</p>
      </div>

      <div class="bg-gray-50 p-6 rounded-2xl shadow-md transition-transform duration-300 hover:scale-105 hover:-translate-y-2 hover:shadow-xl text-center flex flex-col items-center">
        <img src="assets/image/63e0f7476fb704f7ef0ed799_Unearth raw skills of your internal tech teams. (2).svg" alt="Hackathons & Coding Competitions" class="w-20 h-20 mb-4 object-cover rounded-full shadow-md" />
        <h3 class="text-xl font-semibold text-indigo-600 mb-2">Hackathons & Coding Competitions</h3>
        <p class="text-gray-600">Testing and sharpening my coding skills in challenging environments.</p>
      </div>

      <div class="bg-gray-50 p-6 rounded-2xl shadow-md transition-transform duration-300 hover:scale-105 hover:-translate-y-2 hover:shadow-xl text-center flex flex-col items-center">
        <img src="assets/image/Reading Tech Articles  icon .jpg" alt="Reading Tech Articles & Books" class="w-20 h-20 mb-4 object-cover rounded-full shadow-md" />
        <h3 class="text-xl font-semibold text-indigo-600 mb-2">Reading Tech Articles & Books</h3>
        <p class="text-gray-600">Keeping updated with latest trends and deepening my knowledge.</p>
      </div>

      <div class="bg-gray-50 p-6 rounded-2xl shadow-md transition-transform duration-300 hover:scale-105 hover:-translate-y-2 hover:shadow-xl text-center flex flex-col items-center">
        <img src="assets/image/Learning New Programming Languages.jpg" alt="Learning New Programming Languages" class="w-20 h-20 mb-4 object-cover rounded-full shadow-md" />
        <h3 class="text-xl font-semibold text-indigo-600 mb-2">Learning New Programming Languages</h3>
        <p class="text-gray-600">Expanding my toolkit and versatility as a developer.</p>
      </div>

      <div class="bg-gray-50 p-6 rounded-2xl shadow-md transition-transform duration-300 hover:scale-105 hover:-translate-y-2 hover:shadow-xl text-center flex flex-col items-center">
        <img src="assets/image/Building Personal Projects.jpg" alt="Building Personal Projects" class="w-20 h-20 mb-4 object-cover rounded-full shadow-md" />
        <h3 class="text-xl font-semibold text-indigo-600 mb-2">Building Personal Projects</h3>
        <p class="text-gray-600">Applying concepts and exploring ideas through hands-on work.</p>
      </div>

      <div class="bg-gray-50 p-6 rounded-2xl shadow-md transition-transform duration-300 hover:scale-105 hover:-translate-y-2 hover:shadow-xl text-center flex flex-col items-center">
        <img src="assets/image/Joining Workshops.jpg" alt="Joining Workshops" class="w-20 h-20 mb-4 object-cover rounded-full shadow-md" />
        <h3 class="text-xl font-semibold text-indigo-600 mb-2">Joining Workshops</h3>
        <p class="text-gray-600">Learning from experts and networking with peers.</p>
      </div>
    </div>
  </div>
</section>


<script>
  document.addEventListener("DOMContentLoaded", () => {
  const options = {
    root: null, // viewport
    rootMargin: "0px",
    threshold: 0.1 // trigger when 10% visible
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      } else {
        entry.target.classList.remove("visible");
      }
    });
  }, options);

  // Select all the sections/items to observe
  const targets = [
    ...document.querySelectorAll(".section1, .section2, .section3"),
    ...document.querySelectorAll("#interests .bg-gray-50")
  ];

  targets.forEach(target => observer.observe(target));
});

if (entry.isIntersecting) {
  entry.target.classList.add("visible");
}
// else do nothing to keep visible once loaded

</script>

