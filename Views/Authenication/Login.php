<section class="min-h-screen flex items-center justify-center from-indigo-100 via-purple-100 to-pink-100 px-4">
  <div class="max-w-md w-full bg-white/90 backdrop-blur-md p-8 rounded-3xl shadow-2xl border border-gray-200">
    <h2 class="text-3xl font-extrabold text-center mb-6 text-indigo-700 font-[Poppins]">Welcome Back, Techie! 👋</h2>
    <p class="text-center text-gray-500 mb-6 text-sm">Login to view your submission dashboard</p>
    
    <form action="/Login" method="POST" class="space-y-6" novalidate>
      <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-700">📧 Email</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          placeholder="you@example.com" 
          required 
          autocomplete="email"
          class="w-full p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
        >
      </div>

      <div class="relative">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-700">🔒 Password</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          placeholder="••••••••" 
          required 
          autocomplete="current-password"
          class="w-full p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
        >
        <button type="button" 
                aria-label="Toggle Password Visibility"
                class="absolute right-4 top-10 text-indigo-400 hover:text-indigo-700"
                onclick="togglePasswordVisibility()">
          <i id="eyeIcon" class="uil uil-eye text-xl"></i>
        </button>
      </div>

      <button type="submit" class="w-full bg-gradient-to-r from-indigo-500 to-pink-500 hover:from-indigo-600 hover:to-pink-600 text-white py-3 rounded-xl font-semibold tracking-wide transition">
        🚀 Log In
      </button>
    </form>

    <p class="text-center text-sm text-gray-500 mt-6">
      Don’t have access? <a href="mailto:chandy.neat@passerellesnumeriques.org" class="text-indigo-600 font-semibold hover:underline">Contact Admin</a>
    </p>
  </div>
</section>

<script>
  function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      eyeIcon.classList.remove("uil-eye");
      eyeIcon.classList.add("uil-eye-slash");
    } else {
      passwordInput.type = 'password';
      eyeIcon.classList.remove("uil-eye-slash");
      eyeIcon.classList.add("uil-eye");
    }
  }
</script>

<?php if (!empty($error)): ?>
<script>
  Swal.fire({
    icon: 'error',
    title: 'Login Failed',
    text: <?= json_encode($error) ?>,
    confirmButtonColor: '#6366f1'
  });
</script>
<?php endif; ?>