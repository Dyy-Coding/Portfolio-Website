<style>
  #faceAttendance {
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

<!-- Face Recognition Attendance System Section -->
<section class="min-h-screen py-16 px-6 md:px-16 bg-gray-50 text-gray-800">
  <div class="max-w-6xl mx-auto space-y-10" id="faceAttendance">

    <!-- Title -->
    <div class="text-center">
      <h1 class="text-4xl font-bold text-gray-900">Face Recognition Attendance System</h1>
      <p class="text-gray-600 mt-2">Role: Developer & Logic Designer</p>
    </div>

    <!-- Video Preview -->
    <div class="flex justify-center">
      <video 
        class="video-preview"
        src="assets/image/FaceReconiton/Face.mp4" 
        controls 
        preload="metadata" 
        poster="assets/image/Face detection.jpg">
        Your browser does not support the video tag.
      </video>
    </div>

    <!-- Project Overview -->
    <div class="bg-white rounded-xl p-6 shadow-md space-y-6">
      <div>
        <h2 class="text-2xl font-semibold mb-4">Project Overview</h2>
        <p class="text-gray-700 text-base">
          I developed a face recognition-based attendance system with a graphical interface. The application utilizes a webcam to detect and recognize faces in real-time, logs attendance automatically into Excel sheets, and gives audio feedback for each detection. I was primarily responsible for designing the back-end logic, implementing facial recognition algorithms, and managing data integration and storage. The project was completed collaboratively with two other team members.
        </p>
      </div>

      <!-- Libraries and Tools -->
      <div>
        <h2 class="text-xl font-semibold mt-6 mb-2">📚 Libraries & Tools Used</h2>
        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
          <li><strong>OpenCV:</strong> Real-time image capture and face detection.</li>
          <li><strong>face_recognition:</strong> Face identification and verification.</li>
          <li><strong>pandas:</strong> Data manipulation and attendance records.</li>
          <li><strong>uuid:</strong> Unique IDs for attendance entries.</li>
          <li><strong>tkinter & customtkinter:</strong> GUI interface design.</li>
          <li><strong>PIL (Pillow):</strong> Image handling and manipulation.</li>
          <li><strong>os:</strong> File system and path operations.</li>
          <li><strong>openpyxl:</strong> Excel file writing.</li>
          <li><strong>numpy:</strong> Face encoding operations.</li>
          <li><strong>datetime:</strong> Time-stamped attendance.</li>
          <li><strong>pyttsx3:</strong> Audio feedback.</li>
          <li><strong>GitHub:</strong> Version control.</li>
          <li><strong>Pyhton:</strong> version 3.11.9 </li>
        </ul>
      </div>

      <!-- Summary -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-700 mt-4">
        <div><span class="font-semibold">🧑‍💼 Role:</span> Developer & Logical Designer</div>
        <div><span class="font-semibold">👥 Team Size:</span> 3 Members</div>
        <div><span class="font-semibold">🛠️ Technologies:</span> Python, OpenCV, Tkinter, face_recognition...</div>
        <div><span class="font-semibold">📱 Type:</span> GUI-based Attendance System</div>
        <div><span class="font-semibold">🕒 Duration:</span> 30 hours</div>
        <div><span class="font-semibold">📅 Date:</span> Nov 18 – Nov 28, 2024</div>
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
      <p class="text-gray-600 text-base">Download key documents, code, and slides for this project.</p>
    </div>

    <!-- Resource Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      <!-- Report -->
      <div class="bg-gray-50 rounded-xl shadow p-5 hover:shadow-lg transition">
        <h3 class="text-lg font-semibold mb-2 text-gray-900">📄 Project Report</h3>
        <p class="text-sm text-gray-600 mb-4">Detailed explanation of system design, logic, and development process.</p>
        <a href="Views/DataProject/faceRoconition/doces/Face_Recognition_Attendance_System_Report.pdf" download 
           class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded transition">
          ⬇️ Download PDF
        </a>
      </div>

      <!-- Source Code -->
      <div class="bg-gray-50 rounded-xl shadow p-5 hover:shadow-lg transition">
        <h3 class="text-lg font-semibold mb-2 text-gray-900">🗃️ Source Code (ZIP)</h3>
        <p class="text-sm text-gray-600 mb-4">Includes full Python files, model training scripts, and GUI implementation.</p>
        <a href="Views/DataProject/faceRoconition/files/Face_Detection_Project-main.zip" download 
           class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded transition">
          ⬇️ Download ZIP
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
